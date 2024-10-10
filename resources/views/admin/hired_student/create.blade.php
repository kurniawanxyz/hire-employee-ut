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
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <form action="{{ route('admin.hired-students.store') }}" method="POST" class="row"
                    enctype="multipart/form-data">
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
                            <label class="form-label" for="nis">NIS</label>
                            <input type="text" name="nis" id="nis"
                                class="form-control @error('nis') is-invalid @enderror" placeholder="Enter name for student"
                                value="{{ old('nis') }}">
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
                                placeholder="Enter name for student" value="{{ old('school_origin') }}">
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
                                placeholder="Enter name for student" value="{{ old('name') }}">
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
                                placeholder="Enter name for student" value="{{ old('email') }}">
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
                                    <option value="{{ $item->id }}"
                                        {{ old('branch') == $item->id ? 'selected' : '' }}>
                                        {{ $item->city }}</option>
                                @endforeach
                            </select>
                            @error('branch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="batch">Batch</label>
                            <input type="number" name="batch" id="batch"
                                class="form-control @error('batch') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('batch') }}">
                            @error('batch')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="place_birth">Place Birth</label>
                            <input type="text" name="place_birth" id="place_birth"
                                class="form-control @error('place_birth') is-invalid @enderror"
                                placeholder="Enter name place birth student" value="{{ old('place_birth') }}">
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
                                placeholder="Enter name place birth student" value="{{ old('major') }}">
                            @error('major')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="date_birth">Date Birth</label>
                            <input type="date" name="date_birth" id="date_birth"
                                class="form-control @error('date_birth') is-invalid @enderror"
                                placeholder="Enter name place birth student" value="{{ old('date_birth') }}">
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
                            <select name="role" id="branch"
                                class="form-select @error('role') is-invalid @enderror">
                                <option disabled selected>--Choose role--</option>
                                <option value="mechanic" {{ old('role') == 'mechanic' ? 'selected' : '' }}>
                                    mechanic</option>
                                <option value="operator" {{ old('role') == 'operator' ? 'selected' : '' }}>
                                    operator</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label mt-2" for="bmi">BMI</label>
                            <input type="number" name="bmi" id="bmi"
                                class="form-control @error('bmi') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('bmi') }}">
                            @error('bmi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="my-3 px-3 d-flex justify-content-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="recruit" id="recruit1" value="no"
                                {{ old('recruit', 'no') == 'no' ? 'checked' : '' }}>
                            <label class="form-check-label" for="recruit1">
                                Not hire yet
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="recruit" id="recruit2" value="yes"
                                {{ old('recruit', 'no') == 'yes' ? 'checked' : '' }}>
                            <label class="form-check-label" for="recruit2">
                                already recruited
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <div class="my-3">
                            <label class="form-label" for="avg_theory">Average Theory</label>
                            <input type="text" name="avg_theory" id="avg_theory"
                                class="form-control @error('avg_theory') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('avg_theory') }}">
                            @error('avg_theory')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="ojt_location">OJT Location</label>
                            <input type="text" name="ojt_location" id="ojt_location"
                                class="form-control @error('ojt_location') is-invalid @enderror"
                                placeholder="Enter name for student" value="{{ old('ojt_location') }}">
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
                                placeholder="Enter experience student PS" value="{{ old('exp_ojt_ps') }}">
                            @error('exp_ojt_ps')
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
                                placeholder="Enter name for student" value="{{ old('avg_practice') }}">
                            @error('ojt_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="exp_ojt_ri">Experience OJT R&I</label>
                            <input type="number" name="exp_ojt_ri" id="exp_ojt_ri"
                                class="form-control @error('exp_ojt_ri') is-invalid @enderror"
                                placeholder="Enter experience student R&I" value="{{ old('exp_ojt_ri') }}">
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
                                placeholder="Enter experience student TS" value="{{ old('exp_ojt_ts') }}">
                            @error('exp_ojt_ts')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="container">
                        <h3 class="h4 text-center mt-2">Scores Unit Spesialization</h3>
                        @foreach (config('app.unit') as $item)
                            <div class="row">
                                <div class="col-md-3 px-3">
                                    <div class="my-3">
                                        <label class="form-label" for="{{ $item[1] }}">PS
                                            {{ $item[0] }}</label>
                                        <input type="number" name="{{ $item[1] }}" id="{{ $item[1] }}"
                                            class="form-control @error($item[1]) is-invalid @enderror"
                                            placeholder="Preventive Maintenance {{ $item[0] }}"
                                            value="{{ old($item[1]) }}">
                                        @error($item[1])
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 px-3">
                                    <div class="my-3">
                                        <label class="form-label" for="{{ $item[2] }}">R&I
                                            {{ $item[0] }}</label>
                                        <input type="number" name="{{ $item[2] }}" id="{{ $item[2] }}"
                                            class="form-control @error($item[2]) is-invalid @enderror"
                                            placeholder="Remove and Install {{ $item[0] }}"
                                            value="{{ old($item[2]) }}">
                                        @error($item[2])
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 px-3">
                                    <div class="my-3">
                                        <label class="form-label" for="{{ $item[3] }}">TS
                                            {{ $item[0] }}</label>
                                        <input type="number" name="{{ $item[3] }}" id="{{ $item[3] }}"
                                            class="form-control @error($item[3]) is-invalid @enderror"
                                            placeholder="Troubleshooting {{ $item[0] }}"
                                            value="{{ old($item[3]) }}">
                                        @error($item[3])
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 px-3">
                                    <div class="my-3">
                                        <label class="form-label" for="{{ $item[4] }}">Unit
                                            {{ $item[0] }}</label>
                                        <input type="number" name="{{ $item[4] }}" id="{{ $item[0] }}"
                                            class="form-control @error($item[4]) is-invalid @enderror"
                                            placeholder="Unit {{ $item[0] }}" value="{{ old($item[4]) }}">
                                        @error($item[4])
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
