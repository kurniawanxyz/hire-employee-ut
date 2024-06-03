@extends('layouts.nav-admin')

@section('title', 'Create Student')
<link rel="stylesheet" href="{{ asset('assets/admin/css/photo_hover.css') }}">

@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">
            <div class="page-header mb-3">
                <div class="card p-4 mb-4 flex-row justify-content-md-between flex-column flex-md-row align-items-center">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot mb-0">
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="{{ route('admin.hired-students.index') }}">{{ __('Hired Students data') }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <button class="btn btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#uploadDataByExcel">Add by Excel</button>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <form action="{{ route('admin.hired-students.store') }}" method="POST" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column align-items-center pb-2">
                        <label for="potoProfile" class="image-hover">
                            <span class="edit-icon-profile"></span>
                            <img id="profileImage" src="{{ asset('assets/admin/img/default_photo.png') }}"
                                alt="Photo profile" width="100">
                        </label>
                        <input type="file" name="photo" id="potoProfile" class="d-none">
                        @error('poto_profile')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <h6 class="mt-2">Photo profile siswa</h6>
                        @error('photo')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="height">Height</label>
                            <input type="number" name="height" id="height"
                                class="form-control @error('height') is-invalid @enderror"
                                placeholder="Enter number for age student" value="{{ old('height') }}">
                            @error('height')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="branch">Branch</label>
                            <select name="branch" id="branch" class="form-select @error('branch') is-invalid @enderror">
                                <option disabled selected>--Choose Branch--</option>
                                @foreach ($branch as $item)
                                    <option value="{{ $item->id }}" {{ old('branch') == $item->id ? 'selected' : '' }}>{{ $item->city }}</option>
                                @endforeach
                            </select>
                            @error('branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="age">Age</label>
                            <input type="number" name="age" id="age"
                                class="form-control @error('age') is-invalid @enderror"
                                placeholder="Enter number for age student" value="{{ old('age') }}">
                            @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="weight">Weight</label>
                            <input type="number" name="weight" id="weight"
                                class="form-control @error('weight') is-invalid @enderror"
                                placeholder="Enter number for age student" value="{{ old('weight') }}">
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="role">Role</label>
                            <select name="role" id="branch" class="form-select @error('role') is-invalid @enderror">
                                <option disabled selected>--Choose role--</option>
                                <option value="mechanic" {{ old('role') == 'mechanic' ? 'selected' : '' }}>mechanic</option>
                                <option value="operator" {{ old('role') == 'operator' ? 'selected' : '' }}>operator</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 px-5 text-center pt-3">
                        <label class="form-label" for="experience">Experience</label>
                        <textarea class="form-control @error('experience') is-invalid @enderror" name="experience" placeholder="Write the experience student here"
                            id="experience" style="height: 100px">{{ old('experience') }}</textarea>
                        @error('experience')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit" class="btn btn-success w-max-content mt-3">Save <i
                                class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="uploadDataByExcel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="uploadDataByExcelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadDataByExcelLabel">Export data siswa by Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <div class="col-md">
                        <a href="{{ asset('assets/sample/sample_hired_student.xlsx') }}" type="button" class="btn btn-primary">download list kolom</a>
                        <form action="{{ route('admin.hired-students.import') }}" method="POST" enctype="multipart/form-data" id="upload-form">
                            @csrf

                            <div class="input-group pt-3">
                                <input type="file" class="form-control" name="file_excel" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                            @error('file_excel')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="$('#upload-form').submit()" class="btn btn-success">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/change-img.js') }}"></script>
    <script>
        changeImg('potoProfile', 'profileImage');
    </script>
@endsection
