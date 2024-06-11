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
                                        href="{{ route('admin.branches.index') }}">Branch data</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <form action="{{ route('admin.branches.store') }}" method="POST" class="row">
                    @csrf

                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="province">Province</label>
                            <input type="text" name="province" id="province" data-list="{{ $zone }}"
                                class="awesomplete form-control @error('province') is-invalid @enderror"
                                placeholder="Enter province name for branch" value="{{ old('province') }}">
                            @error('province')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="city">City</label>
                            <input type="text" name="city" id="city"
                                class="form-control @error('city') is-invalid @enderror"
                                placeholder="Enter city name for branch" value="{{ old('city') }}">
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="my-3 text-center">
                        <label class="form-label" for="coordinate">Coordinate</label>
                        <input type="text" name="coordinate" id="coordinate"
                            class="form-control @error('coordinate') is-invalid @enderror"
                            placeholder="Enter coordinate for branch" value="{{ old('coordinate') }}">
                        @error('coordinate')
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
    <script src="{{ asset('assets/admin/js/awesomplete.js') }}"></script>
@endsection
