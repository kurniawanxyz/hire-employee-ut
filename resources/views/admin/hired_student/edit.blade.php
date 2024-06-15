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
                                        href="{{ route('admin.hired-students.index') }}">{{ __('Hire Students data') }}</a>
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
                                    value="no"
                                    {{ old('recruit', $student->hasRecruit == 0 ? 'no' : '') == 'no' ? 'checked' : '' }}>
                                <label class="form-check-label" for="recruit1">
                                    Not hire yet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="recruit" id="recruit2"
                                    value="yes"
                                    {{ old('recruit', $student->hasRecruit == 1 ? 'yes' : '') == 'yes' ? 'checked' : '' }}>
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
                                placeholder="Enter name place birth student"
                                value="{{ old('date_birth', $student->date_birth) }}">
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
                                placeholder="Enter experience student PS"
                                value="{{ old('exp_ojt_ps', $student->ojt->preventive_maintenance) }}">
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
                                placeholder="Enter experience student R&I"
                                value="{{ old('exp_ojt_ri', $student->ojt->remove_and_install) }}">
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
                                placeholder="Enter experience student TS"
                                value="{{ old('exp_ojt_ts', $student->ojt->machine_troubleshooting) }}">
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
                                class="form-control @error('us_rank_1') is-invalid @enderror" placeholder="Enter rank 1"
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
                                class="form-control @error('us_rank_2') is-invalid @enderror" placeholder="Enter rank 2"
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
                                class="form-control @error('us_rank_3') is-invalid @enderror" placeholder="Enter rank 3"
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
                                class="form-control @error('us_rank_4') is-invalid @enderror" placeholder="Enter rank 4"
                                value="{{ old('us_rank_4', $student->specialization->rank_4) }}">
                            @error('us_rank_4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="container">
                        <h3 class="h4 text-center mt-2">Scores Unit Spesialization</h3>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_scania">PS Scania</label>
                                    <input type="number" name="ps_scania" id="ps_scania"
                                        class="form-control @error('ps_scania') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Scania" value="{{ old('ps_scania') }}">
                                    @error('ps_scania')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_scania">R&I Scania</label>
                                    <input type="number" name="ri_scania" id="ri_scania"
                                        class="form-control @error('ri_scania') is-invalid @enderror"
                                        placeholder="Remove and Install Scania" value="{{ old('ri_scania') }}">
                                    @error('ri_scania')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_scania">TS Scania</label>
                                    <input type="number" name="ts_scania" id="ts_scania"
                                        class="form-control @error('ts_scania') is-invalid @enderror"
                                        placeholder="Troubleshooting Scania" value="{{ old('ts_scania') }}">
                                    @error('ts_scania')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_scania">Unit Scania</label>
                                    <input type="number" name="unit_scania" id="unit_scania"
                                        class="form-control @error('unit_scania') is-invalid @enderror"
                                        placeholder="Unit Scania" value="{{ old('unit_scania') }}">
                                    @error('unit_scania')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_ud">PS UD</label>
                                    <input type="number" name="ps_ud" id="ps_ud"
                                        class="form-control @error('ps_ud') is-invalid @enderror"
                                        placeholder="Preventive Maintenance UD" value="{{ old('ps_ud') }}">
                                    @error('ps_ud')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_ud">R&I UD</label>
                                    <input type="number" name="ri_ud" id="ri_ud"
                                        class="form-control @error('ri_ud') is-invalid @enderror"
                                        placeholder="Remove and Install UD" value="{{ old('ri_ud') }}">
                                    @error('ri_ud')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_ud">TS UD</label>
                                    <input type="number" name="ts_ud" id="ts_ud"
                                        class="form-control @error('ts_ud') is-invalid @enderror"
                                        placeholder="Troubleshooting UD" value="{{ old('ts_ud') }}">
                                    @error('ts_ud')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_ud">Unit UD</label>
                                    <input type="number" name="unit_ud" id="unit_ud"
                                        class="form-control @error('unit_ud') is-invalid @enderror" placeholder="Unit UD"
                                        value="{{ old('unit_ud') }}">
                                    @error('unit_ud')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_hd">PS HD</label>
                                    <input type="number" name="ps_hd" id="ps_hd"
                                        class="form-control @error('ps_hd') is-invalid @enderror"
                                        placeholder="Preventive Maintenance HD" value="{{ old('ps_hd') }}">
                                    @error('ps_hd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_hd">R&I HD</label>
                                    <input type="number" name="ri_hd" id="ri_hd"
                                        class="form-control @error('ri_hd') is-invalid @enderror"
                                        placeholder="Remove and Install HD" value="{{ old('ri_hd') }}">
                                    @error('ri_hd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_hd">TS HD</label>
                                    <input type="number" name="ts_hd" id="ts_hd"
                                        class="form-control @error('ts_hd') is-invalid @enderror"
                                        placeholder="Troubleshooting HD" value="{{ old('ts_hd') }}">
                                    @error('ts_hd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_hd">Unit HD</label>
                                    <input type="number" name="unit_hd" id="unit_hd"
                                        class="form-control @error('unit_hd') is-invalid @enderror" placeholder="Unit HD"
                                        value="{{ old('unit_hd') }}">
                                    @error('unit_hd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_pc_small">PS PC Small</label>
                                    <input type="number" name="ps_pc_small" id="ps_pc_small"
                                        class="form-control @error('ps_pc_small') is-invalid @enderror"
                                        placeholder="Preventive Maintenance PC Small" value="{{ old('ps_pc_small') }}">
                                    @error('ps_pc_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_pc_small">R&I PC Small</label>
                                    <input type="number" name="ri_pc_small" id="ri_pc_small"
                                        class="form-control @error('ri_pc_small') is-invalid @enderror"
                                        placeholder="Remove and Install PC Small" value="{{ old('ri_pc_small') }}">
                                    @error('ri_pc_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_pc_small">TS PC Small</label>
                                    <input type="number" name="ts_pc_small" id="ts_pc_small"
                                        class="form-control @error('ts_pc_small') is-invalid @enderror"
                                        placeholder="Troubleshooting PC Small" value="{{ old('ts_pc_small') }}">
                                    @error('ts_pc_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_pc_small">Unit PC Small</label>
                                    <input type="number" name="unit_pc_small" id="unit_pc_small"
                                        class="form-control @error('unit_pc_small') is-invalid @enderror"
                                        placeholder="Unit PC Small" value="{{ old('unit_pc_small') }}">
                                    @error('unit_pc_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_pc_big">PS PC Big</label>
                                    <input type="number" name="ps_pc_big" id="ps_pc_big"
                                        class="form-control @error('ps_pc_big') is-invalid @enderror"
                                        placeholder="Preventive Maintenance PC Big" value="{{ old('ps_pc_big') }}">
                                    @error('ps_pc_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_pc_big">R&I PC Big</label>
                                    <input type="number" name="ri_pc_big" id="ri_pc_big"
                                        class="form-control @error('ri_pc_big') is-invalid @enderror"
                                        placeholder="Remove and Install PC Big" value="{{ old('ri_pc_big') }}">
                                    @error('ri_pc_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_pc_big">TS PC Big</label>
                                    <input type="number" name="ts_pc_big" id="ts_pc_big"
                                        class="form-control @error('ts_pc_big') is-invalid @enderror"
                                        placeholder="Troubleshooting PC Big" value="{{ old('ts_pc_big') }}">
                                    @error('ts_pc_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_pc_big">Unit PC Big</label>
                                    <input type="number" name="unit_pc_big" id="unit_pc_big"
                                        class="form-control @error('unit_pc_big') is-invalid @enderror"
                                        placeholder="Unit PC Big" value="{{ old('unit_pc_big') }}">
                                    @error('unit_pc_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_sbd">PS SBD</label>
                                    <input type="number" name="ps_sbd" id="ps_sbd"
                                        class="form-control @error('ps_sbd') is-invalid @enderror"
                                        placeholder="Preventive Maintenance SBD" value="{{ old('ps_sbd') }}">
                                    @error('ps_sbd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_sbd">R&I SBD</label>
                                    <input type="number" name="ri_sbd" id="ri_sbd"
                                        class="form-control @error('ri_sbd') is-invalid @enderror"
                                        placeholder="Remove and Install SBD" value="{{ old('ri_sbd') }}">
                                    @error('ri_sbd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_sbd">TS SBD</label>
                                    <input type="number" name="ts_sbd" id="ts_sbd"
                                        class="form-control @error('ts_sbd') is-invalid @enderror"
                                        placeholder="Troubleshooting SBD" value="{{ old('ts_sbd') }}">
                                    @error('ts_sbd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_sbd">Unit SBD</label>
                                    <input type="number" name="unit_sbd" id="unit_sbd"
                                        class="form-control @error('unit_sbd') is-invalid @enderror"
                                        placeholder="Unit SBD" value="{{ old('unit_sbd') }}">
                                    @error('unit_sbd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_grader">PS Grader</label>
                                    <input type="number" name="ps_grader" id="ps_grader"
                                        class="form-control @error('ps_grader') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Grader" value="{{ old('ps_grader') }}">
                                    @error('ps_grader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_grader">R&I Grader</label>
                                    <input type="number" name="ri_grader" id="ri_grader"
                                        class="form-control @error('ri_grader') is-invalid @enderror"
                                        placeholder="Remove and Install Grader" value="{{ old('ri_grader') }}">
                                    @error('ri_grader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_grader">TS Grader</label>
                                    <input type="number" name="ts_grader" id="ts_grader"
                                        class="form-control @error('ts_grader') is-invalid @enderror"
                                        placeholder="Troubleshooting Grader" value="{{ old('ts_grader') }}">
                                    @error('ts_grader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_grader">Unit Grader</label>
                                    <input type="number" name="unit_grader" id="unit_grader"
                                        class="form-control @error('unit_grader') is-invalid @enderror"
                                        placeholder="Unit Grader" value="{{ old('unit_grader') }}">
                                    @error('unit_grader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_bulldozer_small">PS Bulldozer Small</label>
                                    <input type="number" name="ps_bulldozer_small" id="ps_bulldozer_small"
                                        class="form-control @error('ps_bulldozer_small') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Bulldozer Small"
                                        value="{{ old('ps_bulldozer_small') }}">
                                    @error('ps_bulldozer_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_bulldozer_small">R&I Bulldozer Small</label>
                                    <input type="number" name="ri_bulldozer_small" id="ri_bulldozer_small"
                                        class="form-control @error('ri_bulldozer_small') is-invalid @enderror"
                                        placeholder="Remove and Install Bulldozer Small"
                                        value="{{ old('ri_bulldozer_small') }}">
                                    @error('ri_bulldozer_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_bulldozer_small">TS Bulldozer Small</label>
                                    <input type="number" name="ts_bulldozer_small" id="ts_bulldozer_small"
                                        class="form-control @error('ts_bulldozer_small') is-invalid @enderror"
                                        placeholder="Troubleshooting Bulldozer Small"
                                        value="{{ old('ts_bulldozer_small') }}">
                                    @error('ts_bulldozer_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_bulldozer_small">Unit Bulldozer Small</label>
                                    <input type="number" name="unit_bulldozer_small" id="unit_bulldozer_small"
                                        class="form-control @error('unit_bulldozer_small') is-invalid @enderror"
                                        placeholder="Unit Bulldozer Small" value="{{ old('unit_bulldozer_small') }}">
                                    @error('unit_bulldozer_small')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_bulldozer_big">PS Bulldozer Big</label>
                                    <input type="number" name="ps_bulldozer_big" id="ps_bulldozer_big"
                                        class="form-control @error('ps_bulldozer_big') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Bulldozer Big"
                                        value="{{ old('ps_bulldozer_big') }}">
                                    @error('ps_bulldozer_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_bulldozer_big">R&I Bulldozer Big</label>
                                    <input type="number" name="ri_bulldozer_big" id="ri_bulldozer_big"
                                        class="form-control @error('ri_bulldozer_big') is-invalid @enderror"
                                        placeholder="Remove and Install Bulldozer Big"
                                        value="{{ old('ri_bulldozer_big') }}">
                                    @error('ri_bulldozer_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_bulldozer_big">TS Bulldozer Big</label>
                                    <input type="number" name="ts_bulldozer_big" id="ts_bulldozer_big"
                                        class="form-control @error('ts_bulldozer_big') is-invalid @enderror"
                                        placeholder="Troubleshooting Bulldozer Big"
                                        value="{{ old('ts_bulldozer_big') }}">
                                    @error('ts_bulldozer_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_bulldozer_big">Unit Bulldozer Big</label>
                                    <input type="number" name="unit_bulldozer_big" id="unit_bulldozer_big"
                                        class="form-control @error('unit_bulldozer_big') is-invalid @enderror"
                                        placeholder="Unit Bulldozer Big" value="{{ old('unit_bulldozer_big') }}">
                                    @error('unit_bulldozer_big')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_bomag">PS Bomag</label>
                                    <input type="number" name="ps_bomag" id="ps_bomag"
                                        class="form-control @error('ps_bomag') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Bomag" value="{{ old('ps_bomag') }}">
                                    @error('ps_bomag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_bomag">R&I Bomag</label>
                                    <input type="number" name="ri_bomag" id="ri_bomag"
                                        class="form-control @error('ri_bomag') is-invalid @enderror"
                                        placeholder="Remove and Install Bomag" value="{{ old('ri_bomag') }}">
                                    @error('ri_bomag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_bomag">TS Bomag</label>
                                    <input type="number" name="ts_bomag" id="ts_bomag"
                                        class="form-control @error('ts_bomag') is-invalid @enderror"
                                        placeholder="Troubleshooting Bomag" value="{{ old('ts_bomag') }}">
                                    @error('ts_bomag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_bomag">Unit Bomag</label>
                                    <input type="number" name="unit_bomag" id="unit_bomag"
                                        class="form-control @error('unit_bomag') is-invalid @enderror"
                                        placeholder="Unit Bomag" value="{{ old('unit_bomag') }}">
                                    @error('unit_bomag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_tadano">PS Tadano</label>
                                    <input type="number" name="ps_tadano" id="ps_tadano"
                                        class="form-control @error('ps_tadano') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Tadano" value="{{ old('ps_tadano') }}">
                                    @error('ps_tadano')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_tadano">R&I Tadano</label>
                                    <input type="number" name="ri_tadano" id="ri_tadano"
                                        class="form-control @error('ri_tadano') is-invalid @enderror"
                                        placeholder="Remove and Install Tadano" value="{{ old('ri_tadano') }}">
                                    @error('ri_tadano')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_tadano">TS Tadano</label>
                                    <input type="number" name="ts_tadano" id="ts_tadano"
                                        class="form-control @error('ts_tadano') is-invalid @enderror"
                                        placeholder="Troubleshooting Tadano" value="{{ old('ts_tadano') }}">
                                    @error('ts_tadano')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_tadano">Unit Bomag</label>
                                    <input type="number" name="unit_tadano" id="unit_tadano"
                                        class="form-control @error('unit_tadano') is-invalid @enderror"
                                        placeholder="Unit Tadano" value="{{ old('unit_tadano') }}">
                                    @error('unit_tadano')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ps_wheel_loader">PS Wheel Loader</label>
                                    <input type="number" name="ps_wheel_loader" id="ps_wheel_loader"
                                        class="form-control @error('ps_wheel_loader') is-invalid @enderror"
                                        placeholder="Preventive Maintenance Wheel Loader"
                                        value="{{ old('ps_wheel_loader') }}">
                                    @error('ps_wheel_loader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ri_wheel_loader">R&I Wheel Loader</label>
                                    <input type="number" name="ri_wheel_loader" id="ri_wheel_loader"
                                        class="form-control @error('ri_wheel_loader') is-invalid @enderror"
                                        placeholder="Remove and Install Wheel Loader"
                                        value="{{ old('ri_wheel_loader') }}">
                                    @error('ri_wheel_loader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ts_wheel_loader">TS Wheel Loader</label>
                                    <input type="number" name="ts_wheel_loader" id="ts_wheel_loader"
                                        class="form-control @error('ts_wheel_loader') is-invalid @enderror"
                                        placeholder="Troubleshooting Wheel Loader" value="{{ old('ts_wheel_loader') }}">
                                    @error('ts_wheel_loader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="unit_wheel_loader">Unit Bomag</label>
                                    <input type="number" name="unit_wheel_loader" id="unit_wheel_loader"
                                        class="form-control @error('unit_wheel_loader') is-invalid @enderror"
                                        placeholder="Unit Wheel Loader" value="{{ old('unit_wheel_loader') }}">
                                    @error('unit_wheel_loader')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h3 class="h4 text-center mt-2">INSANI</h3>
                        <div class="row">
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="integritas">Integritas</label>
                                    <input type="number" name="integritas" id="integritas"
                                        class="form-control @error('integritas') is-invalid @enderror"
                                        placeholder="Integritas Student" value="{{ old('integritas') }}">
                                    @error('integritas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="santun">Santun</label>
                                    <input type="number" name="santun" id="santun"
                                        class="form-control @error('santun') is-invalid @enderror"
                                        placeholder="Santun Stundet" value="{{ old('santun') }}">
                                    @error('santun')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="ahli">Ahli</label>
                                    <input type="number" name="ahli" id="ahli"
                                        class="form-control @error('ahli') is-invalid @enderror"
                                        placeholder="Ahli Student" value="{{ old('ahli') }}">
                                    @error('ahli')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 px-3">
                                <div class="my-3">
                                    <label class="form-label" for="berani">Berani</label>
                                    <input type="number" name="berani" id="berani"
                                        class="form-control @error('berani') is-invalid @enderror"
                                        placeholder="Berani student" value="{{ old('berani') }}">
                                    @error('berani')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="h4 text-center mt-2">Final Presentation</h3>
                    <div class="col-md-6 px-3">
                        <div>
                            <label class="form-label" for="presentation_title_ps">Presentation Title PS</label>
                            <input type="text" name="presentation_title_ps" id="presentation_title_ps"
                                class="form-control @error('presentation_title_ps') is-invalid @enderror"
                                placeholder="Enter name of presentation" value="{{ old('presentation_title_ps') }}">
                            @error('presentation_title_ps')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="presentation_ps_score">Presentation PS Score</label>
                            <input type="number" name="presentation_ps_score" id="presentation_ps_score"
                                class="form-control @error('presentation_ps_score') is-invalid @enderror"
                                placeholder="Enter PS presentation Score" value="{{ old('presentation_ps_score') }}">
                            @error('presentation_ps_score')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div>
                            <label class="form-label" for="presentation_title_ts">Presentation Title TS</label>
                            <input type="text" name="presentation_title_ts" id="presentation_title_ts"
                                class="form-control @error('presentation_title_ts') is-invalid @enderror"
                                placeholder="Enter name of presentation" value="{{ old('presentation_title_ts') }}">
                            @error('presentation_title_ts')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="presentation_ts_score">Presentation TS Score</label>
                            <input type="number" name="presentation_ts_score" id="presentation_ts_score"
                                class="form-control @error('presentation_ts_score') is-invalid @enderror"
                                placeholder="Enter TS presentation Score" value="{{ old('presentation_ts_score') }}">
                            @error('presentation_ts_score')
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
