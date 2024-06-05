@extends('layouts.nav-admin')
@section('title', "Dashboard")

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid pb-0">

            <div class="row">
                <div class="col-4">
                {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3"> --}}
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fa fa-building"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{ $branch }}</h3>
                                <span>Branches</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3"> --}}
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fa-solid fa-user"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{ $hiredStudent }}</h3>
                                <span>Hire Students</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3"> --}}
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fa fa-user-check"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{ $studentAcc }}</h3>
                                <span>Accept Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
