@extends('layouts.nav-admin')

@section('title', 'LandingPage')

@section('content')

    <style>
        #updateLandingPage .hero-section .form-label {
            position: relative;
            display: inline-block;
        }

        #updateLandingPage .hero-section .form-label img {
            width: 100%;
            height: 300px;
            transition: transform 0.3s;
        }

        #updateLandingPage .hero-section .form-label h3,
        #updateLandingPage span {
            position: absolute;
            bottom: 10px;
            left: 10px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        #updateLandingPage .hero-section .form-label:hover img {
            transform: scale(1.1);
            cursor: pointer;
        }

        #updateLandingPage .hero-section .form-label:hover h3,
        #updateLandingPage span {
            opacity: 1;
        }
    </style>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header mb-3">
                <div class="card px-3 py-4 mb-4 flex-md-row justify-content-between align-items-center">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dot mb-0">
                                <li class="breadcrumb-item active" aria-current="page">Landing Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="content card container-fluid pb-3">
                <form id="updateLandingPage" action="{{ route('admin.landingPages.update') }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row hero-section">
                        <div class="col-md-12">
                            <h2 class="form-label">Hero Image</h2>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="hero_section_image_1">
                                <img id="preview1" src="{{ asset($landingPage->hero_section_image_1??'assets/img/hero/hero1.jpg') }}"
                                    class="object-fit-cover" alt="hero image 1">
                                <div class="hover-content">
                                    <h3 class="text-primary">Hero Image 1</h3>
                                </div>
                            </label>
                            <input type="file" class="d-none" name="hero_section_image_1"
                                onchange="previewImage(event,'preview1')" id="hero_section_image_1">
                            @error('hero_section_image_1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="hero_section_image_2">
                                <img id="preview2" src="{{ asset($landingPage->hero_section_image_2??'assets/img/hero/hero2.jpg') }}"
                                    class="object-fit-cover" alt="hero image 2">
                                <h3 class="text-primary">Hero Image 2</h3>
                            </label>
                            <input type="file" class="d-none" name="hero_section_image_2" id="hero_section_image_2"
                                onchange="previewImage(event,'preview2')">
                            @error('hero_section_image_2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="">
                                <img id="preview3" src="{{ asset($landingPage->hero_section_image_3??'assets/img/hero/hero3.jpg') }}"
                                    class="object-fit-cover" alt="hero image 2">
                                <h3 class="text-primary">Hero Image 3</h3>
                            </label>
                            <input type="file" name="hero_section_image_3" id="hero_section_image_3" class="d-none"
                                onchange="previewImage(event,'preview3')">
                            @error('hero_section_image_3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="manpower_channelled" class="form-label">Manpower Channelled</label>
                        <input type="number" name="manpower_channelled" min="0" id="manpower_channelled"
                            class="form-control" value="{{ $landingPage->manpower_channelled }}"
                            oldvalue="{{ $landingPage->manpower_channelled }}">
                        @error('manpower_channelled')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="client" class="form-label">Client</label>
                        <input type="number" name="client" min="0" id="client" class="form-control"
                            value="{{ $landingPage->client }}" oldvalue="{{ $landingPage->client }}">
                        @error('client')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="youtube" class="form-label">Youtube</label>
                        <input type="text" name="youtube" id="youtube" class="form-control"
                            value="{{ $landingPage->youtube }}" oldvalue="{{ $landingPage->youtube }}">
                        @error('youtube')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control"
                            value="{{ $landingPage->instagram }}" oldvalue="{{ $landingPage->instagram }}">
                        @error('instagram')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control"
                            value="{{ $landingPage->facebook }}" oldvalue="{{ $landingPage->facebook }}">
                        @error('facebook')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="tiktok" class="form-label">Tiktok</label>
                        <input type="text" name="tiktok" id="tiktok" class="form-control"
                            value="{{ $landingPage->tiktok }}" oldvalue="{{ $landingPage->tiktok }}">
                        @error('tiktok')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" name="twitter" id="twitter" class="form-control"
                            value="{{ $landingPage->twitter }}" oldvalue="{{ $landingPage->twitter }}">
                        @error('twitter')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="operational_start_day" class="form-label">Hari Mulai Operasional</label>
                        <select name="operational_start_day" id="operational_start_day" class="form-select">
                            <option value="monday"
                                {{ $landingPage->operational_start_day === 'monday' ? 'selected' : '' }}>Senin</option>
                            <option value="tuesday"
                                {{ $landingPage->operational_start_day === 'tuesday' ? 'selected' : '' }}>Selasa</option>
                            <option value="wednesday"
                                {{ $landingPage->operational_start_day === 'wednesday' ? 'selected' : '' }}>Rabu</option>
                            <option value="thursday"
                                {{ $landingPage->operational_start_day === 'thursday' ? 'selected' : '' }}>Kamis</option>
                            <option value="friday"
                                {{ $landingPage->operational_start_day === 'friday' ? 'selected' : '' }}>Jumat</option>
                            <option value="saturday"
                                {{ $landingPage->operational_start_day === 'saturday' ? 'selected' : '' }}>Sabtu</option>
                            <option value="sunday"
                                {{ $landingPage->operational_start_day === 'sunday' ? 'selected' : '' }}>Minggu</option>
                        </select>
                        @error('operational_start_day')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="operational_end_day" class="form-label">Hari Selesai Operasional</label>
                        <select name="operational_end_day" id="operational_end_day" class="form-select">
                            <option value="monday" {{ $landingPage->operational_end_day === 'monday' ? 'selected' : '' }}>
                                Senin</option>
                            <option value="tuesday"
                                {{ $landingPage->operational_end_day === 'tuesday' ? 'selected' : '' }}>Selasa</option>
                            <option value="wednesday"
                                {{ $landingPage->operational_end_day === 'wednesday' ? 'selected' : '' }}>Rabu</option>
                            <option value="thursday"
                                {{ $landingPage->operational_end_day === 'thursday' ? 'selected' : '' }}>Kamis</option>
                            <option value="friday" {{ $landingPage->operational_end_day === 'friday' ? 'selected' : '' }}>
                                Jumat</option>
                            <option value="saturday"
                                {{ $landingPage->operational_end_day === 'saturday' ? 'selected' : '' }}>Sabtu</option>
                            <option value="sunday" {{ $landingPage->operational_end_day === 'sunday' ? 'selected' : '' }}>
                                Minggu</option>
                        </select>
                        @error('operational_end_day')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="operational_start_time" class="form-label">Waktu Mulai Operasional</label>
                        <input type="time" name="operational_start_time" id="operational_start_time"
                            class="form-control" value="{{ $landingPage->operational_start_time }}"
                            oldvalue="{{ $landingPage->operational_start_time }}">
                        @error('operational_start_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label for="operational_end_time" class="form-label">Waktu Selesai Operasional</label>
                        <input type="time" name="operational_end_time" id="operational_end_time" class="form-control"
                            value="{{ $landingPage->operational_end_time }}"
                            oldvalue="{{ $landingPage->operational_end_time }}">
                        @error('operational_end_time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function previewImage(event, id) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById(id);
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
