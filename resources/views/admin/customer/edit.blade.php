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
                                        href="{{ route('admin.customer.index') }}">Customer data</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card px-5">
                <form action="{{ route('admin.customer.update', $customer->id) }}" method="POST" class="row">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Enter customer name"
                                value="{{ old('name', $customer->name) }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter customer email for login" value="{{ old('email', $customer->email) }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="customer_email">Customer Email</label>
                            <input type="email" name="customer_email" id="customer_email"
                                class="form-control @error('customer_email') is-invalid @enderror"
                                placeholder="Enter customer email for message" value="{{ old('customer_email', $customer->customer_email) }}">
                            @error('customer_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="no_telp">Telephone number (62xxx)</label>
                            <input type="text" name="no_telp" id="no_telp"
                                class="form-control @error('no_telp') is-invalid @enderror"
                                placeholder="Enter customer telephone number" value="{{ old('no_telp', $customer->no_telp) }}">
                            @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="my-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Enter customer password">
                        @error('password')
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
