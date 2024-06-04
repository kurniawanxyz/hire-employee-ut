@extends('layouts.nav-admin')

@section('title', 'Create Student')
<link rel="stylesheet" href="{{ asset('assets/admin/css/photo_hover.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">

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
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <form action="{{ route('admin.hired-students.update', $student->id) }}" method="POST" class="row"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-column align-items-center pb-2">
                        <label for="potoProfile" class="image-hover">
                            <span class="edit-icon-profile"></span>
                            <img id="profileImage" src="{{ $student->photo }}" alt="Photo profile" width="100">
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
                            <label class="form-label" for="nis">NIS</label>
                            <input type="text" name="nis" id="nis"
                                class="form-control @error('nis') is-invalid @enderror" placeholder="Enter name for student"
                                value="{{ old('nis', $student->nis) }}">
                            @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="school_origin">School Origin</label>
                            <input type="text" name="school_origin" id="school_origin"
                                class="form-control @error('school_origin') is-invalid @enderror"
                                placeholder="Enter name for student"
                                value="{{ old('school_origin', $student->school_origin) }}">
                            @error('school_origin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('name', $student->name) }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="email">E-Mail</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('email', $student->email) }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="height">Height</label>
                            <input type="number" name="height" id="height"
                                class="form-control @error('height') is-invalid @enderror"
                                placeholder="Enter number for age student" value="{{ old('height', $student->height) }}">
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
                                    <option value="{{ $item->id }}"
                                        {{ old('branch', $student->branch->id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->city }}</option>
                                @endforeach
                            </select>
                            @error('branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3 px-3 d-flex">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="recruit" id="recruit1"
                                    value="no" {{ old('recruit',$student->hasRecruit == 0 ? 'no' : '') == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="recruit1">
                                    Not hired yet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recruit" id="recruit2"
                                    value="yes" {{ old('recruit',$student->hasRecruit == 1 ? 'yes' : '') == 'yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="recruit2">
                                    already recruited
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="place_birth">Place Birth</label>
                            <input type="text" name="place_birth" id="place_birth"
                                class="form-control @error('place_birth') is-invalid @enderror"
                                placeholder="Enter name place birth student"
                                value="{{ old('place_birth', $student->place_birth) }}">
                            @error('place_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="major">Major</label>
                            <input type="text" name="major" id="major"
                                class="form-control @error('major') is-invalid @enderror"
                                placeholder="Enter name place birth student" value="{{ old('major', $student->major) }}">
                            @error('major')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="date_birth">Date Birth</label>
                            <input type="text" name="date_birth" id="date_birth"
                                class="form-control @error('date_birth') is-invalid @enderror"
                                placeholder="Enter name place birth student" value="{{ old('date_birth', $student->date_birth) }}">
                            @error('date_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="age">Age</label>
                            <input type="number" name="age" id="age"
                                class="form-control @error('age') is-invalid @enderror"
                                placeholder="Enter number for age student" value="{{ old('age', $student->age) }}">
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
                                placeholder="Enter number for age student" value="{{ old('weight', $student->weight) }}">
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="role">Role</label>
                            <select name="role" id="branch"
                                class="form-select @error('role') is-invalid @enderror">
                                <option disabled selected>--Choose role--</option>
                                <option value="mechanic"
                                    {{ old('role', $student->role) == 'mechanic' ? 'selected' : '' }}>
                                    mechanic</option>
                                <option value="operator"
                                    {{ old('role', $student->role) == 'operator' ? 'selected' : '' }}>
                                    operator</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="batch">Batch</label>
                            <input type="number" name="batch" id="batch"
                                class="form-control @error('batch') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('batch', $student->batch) }}">
                            @error('batch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 px-5 text-center pt-3">
                        <label class="form-label" for="experience">Experience</label>
                        <textarea class="form-control @error('experience') is-invalid @enderror" name="experience"
                            placeholder="Write the experience student here" id="experience" style="height: 100px">{{ old('experience', $student->experience) }}</textarea>
                        @error('experience')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="avg_theory">Average Theory</label>
                            <input type="text" name="avg_theory" id="avg_theory"
                                class="form-control @error('avg_theory') is-invalid @enderror"
                                placeholder="Enter name for student"
                                value="{{ old('avg_theory', $student->score->avg_theory) }}">
                            @error('ojt_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="ojt_location">OJT Location</label>
                            <input type="text" name="ojt_location" id="ojt_location"
                                class="form-control @error('ojt_location') is-invalid @enderror"
                                placeholder="Enter name for student"
                                value="{{ old('ojt_location', $student->specialization->ojt_location) }}">
                            @error('ojt_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="exp_ojt_ps">Experience OJT PS</label>
                            <input type="number" name="exp_ojt_ps" id="exp_ojt_ps"
                                class="form-control @error('exp_ojt_ps') is-invalid @enderror"
                                placeholder="Enter experience student PS" value="{{ old('exp_ojt_ps', $student->ojt->preventive_maintenance) }}">
                            @error('exp_ojt_ps')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="exp_ojt_ri">Experience OJT R&I</label>
                            <input type="number" name="exp_ojt_ri" id="exp_ojt_ri"
                                class="form-control @error('exp_ojt_ri') is-invalid @enderror"
                                placeholder="Enter experience student R&I" value="{{ old('exp_ojt_ri', $student->ojt->remove_and_install) }}">
                            @error('exp_ojt_ri')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="exp_ojt_ts">Experience OJT TS</label>
                            <input type="number" name="exp_ojt_ts" id="exp_ojt_ts"
                                class="form-control @error('exp_ojt_ts') is-invalid @enderror"
                                placeholder="Enter experience student TS" value="{{ old('exp_ojt_ts', $student->ojt->machine_troubleshooting) }}">
                            @error('exp_ojt_ts')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="avg_practice">Average Practice</label>
                            <input type="text" name="avg_practice" id="avg_practice"
                                class="form-control @error('avg_practice') is-invalid @enderror"
                                placeholder="Enter name for student"
                                value="{{ old('avg_practice', $student->score->avg_practice) }}">
                            @error('ojt_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="us_rank_1">Unit Specialization Rank 1</label>
                            <input type="text" name="us_rank_1" id="us_rank_1"
                                class="form-control @error('us_rank_1') is-invalid @enderror"
                                placeholder="Enter rank 1"
                                value="{{ old('us_rank_1', $student->specialization->rank_1) }}">
                            @error('us_rank_1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="us_rank_1">Unit Specialization Rank 2</label>
                            <input type="text" name="us_rank_2" id="us_rank_2"
                                class="form-control @error('us_rank_2') is-invalid @enderror"
                                placeholder="Enter rank 2"
                                value="{{ old('us_rank_2', $student->specialization->rank_2) }}">
                            @error('us_rank_2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="us_rank_1">Unit Specialization Rank 3</label>
                            <input type="text" name="us_rank_3" id="us_rank_3"
                                class="form-control @error('us_rank_3') is-invalid @enderror"
                                placeholder="Enter rank 3"
                                value="{{ old('us_rank_3', $student->specialization->rank_3) }}">
                            @error('us_rank_3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="us_rank_4">Unit Specialization Rank 4</label>
                            <input type="text" name="us_rank_4" id="us_rank_4"
                                class="form-control @error('us_rank_4') is-invalid @enderror"
                                placeholder="Enter rank 4"
                                value="{{ old('us_rank_4', $student->specialization->rank_4) }}">
                            @error('us_rank_4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 px-5 text-center pt-3">
                        <button type="submit" class="btn btn-success w-max-content mt-3">Save <i
                                class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/change-img.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script>
        $("#branch").select2();
        changeImg('potoProfile', 'profileImage');
    </script>
@endsection
