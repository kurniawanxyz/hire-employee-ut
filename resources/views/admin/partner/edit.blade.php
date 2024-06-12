@extends('layouts.nav-admin')

@section('title', 'Create Student')
<link rel="stylesheet" href="{{ asset('assets/admin/css/awesomplete.css') }}">

@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">
            <div class="page-header mb-3">
                <div class="card p-4 mb-4 flex-row justify-content-md-between flex-column flex-md-row align-items-center">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot mb-0">
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="{{ route('admin.partner.index') }}">Branch data</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <form action="{{ route('admin.partner.update',$customer->id) }}" method="POST" class="row">
                    @csrf
                    @method("PUT")
                    <div class="col-md-12px-3">
                        <div class="my-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="awesomplete form-control @error('name') is-invalid @enderror"
                                placeholder="Enter name name for customer or patners" value="{{ old('name',$customer->name) }}">
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="my-3 d-flex flex-column">
                        <label class="form-label" for="coordinate">Coordinate</label>
                        <input type="text" name="coordinate" id="coordinate"
                            class="form-control @error('coordinate') is-invalid @enderror"
                            placeholder="Enter coordinate for customer or patners" value="{{ old('coordinate',$customer->coordinate) }}">
                        @error('coordinate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success w-max-content mt-3 <script>document.write('ahha')</script>">Save <i
                                class="fa fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/awesomplete.js') }}"></script>
@endsection
