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
                                        href="{{ route('admin.branches.index') }}">Operator Setting</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <form action="{{ route('admin.operator.update', $operator->id) }}" method="POST" class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="no_telp">Telphone Number</label>
                            <input type="number" name="no_telp" id="no_telp" data-list="{{ $operator->no_telp }}"
                                class="awesomplete form-control @error('no_telp') is-invalid @enderror"
                                placeholder="Telephone number for message customer"
                                value="{{ old('no_telp', $operator->no_telp) }}">
                            @error('no_telp')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email for message customer" value="{{ old('email', $operator->email) }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        </div>
                            <button type="submit" class="btn btn-success w-max-content mt-3 mx-auto">Save <i
                                    class="fa fa-save"></i></button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/awesomplete.js') }}"></script>
@endsection
