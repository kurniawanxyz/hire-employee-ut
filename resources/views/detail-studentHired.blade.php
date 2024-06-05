<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:15 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Hire Students</title>
    <meta name="description"
        content="Template built for Construction Company, Building Services, Architecture, Engineering, Cleaning Service and other Construction related services">
    <meta name="keywords"
        content=" architecture, builder, building, building company, cleaning services, construction, construction business, construction company">
    <meta name="author" content="blogwp.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/icon/apple-touch-icon-158-precomposed.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        p,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        button,
        label,
        opt,
        select {
            font-family: 'Poppins'
        }

        .navigation {
            position: sticky;
            top: 0;
        }
    </style>

<body>
    <nav class="d-flex w-100 justify-content-between px-5 py-3 align-items-center "
        style="background-color: #212522; position: fixed;top: 0;z-index: 10000000;">
        <h1 style="color: white;margin: 0;">UTSchool</h1>
        <button onclick="handleLogout()">Logout</button>
    </nav>
    <div style="padding: 50px" class="mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="">Student Information</h1>
            <a href="{{ route('hiredStudent.index') }}" class="wprt-button small">Back</a>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex flex-column gap-2 justify-content-between">
                <div class="card h-100">
                    <img src="{{ $student->photo }}" class="student-photo mx-auto d-block card-img-top"
                        style="object-fit: cover;width: 320px;height: 320px; object-position: top" alt="Student Photo">
                </div>
                <div class="badge bg-warning p-3" style="font-size: 15px">
                    {{ $student->role }}
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-6">
                            <h5 class="card-title fw-bold">Student Information</h5>
                            <ul class="list-group list-group-flush" style="font-size: 11px">
                                <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>
                                <li class="list-group-item"><strong>Place and Date of Birth:</strong>
                                    {{ $student->place_birth }},
                                    {{ \Carbon\Carbon::createFromFormat('d/m/Y', $student->date_birth)->isoFormat('D MMMM Y') }}
                                </li>
                                <li class="list-group-item"><strong>NIS:</strong> {{ $student->nis }}</li>
                                <li class="list-group-item"><strong>Major:</strong> {{ $student->major }}</li>
                                <li class="list-group-item"><strong>School:</strong> {{ $student->school_origin }}</li>
                                <li class="list-group-item"><strong>Branch:</strong> {{ $student->branch->city }}</li>
                                <li class="list-group-item"><strong>Height:</strong> {{ $student->height ?? 170 }} cm
                                </li>
                                <li class="list-group-item"><strong>Weight:</strong> {{ $student->weight ?? 50 }} Kg
                                </li>
                                <li class="list-group-item"><strong>Branch:</strong> {{ $student->branch->city }}</li>
                                <li class="list-group-item"><strong>Ojt location:</strong>
                                    {{ $student->specialization->ojt_location }}</li>
                            </ul>
                            <div class="d-flex flex-column mt-3">
                                <h5 class="fw-bold">Unit Spesialization:</h5>
                                @php
                                    $hasSpecialization =
                                        $student->specialization->rank_1 == '-' &&
                                        $student->specialization->rank_2 == '-' &&
                                        $student->specialization->rank_3 == '-' &&
                                        $student->specialization->rank_4 == '-';
                                @endphp
                                @if (!$hasSpecialization)
                                    <div>
                                        @if ($student->specialization->rank_1 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_1 }}</span>
                                        @endif
                                        @if ($student->specialization->rank_2 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_2 }}</span>
                                        @endif
                                        @if ($student->specialization->rank_3 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_3 }}</span>
                                        @endif
                                        @if ($student->specialization->rank_4 != '-')
                                            <span class="badge bg-warning"
                                                style="font-size: 1.25em">{{ $student->specialization->rank_4 }}</span>
                                        @endif
                                    </div>
                                @else
                                    <p>Belum memiliki spesialisasi</p>
                                @endif
                            </div>
                            <div class="mt-4">
                                <h5 class="fw-bold">Experience</h5>
                                <p class="fs-6">{{ $student->experience }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <canvas id="canvas1"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/animsition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fitText.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vegas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cube.portfolio.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function handleLogout() {
            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure you want to logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url: "{{ route('logout') }}",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            window.location.href = "/"
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'An error occurred!',
                                footer: '<a href>Why am I experiencing this issue?</a>'
                            })
                        }
                    })
                }
            });
        }

        const point = @json($pointExperience)

        const data = {
            labels: [
                "PS",
                "R&I",
                "TS"
            ],
            datasets: [{
                label: 'OJT EXPERIENCE',
                data: point,
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgb(255, 99, 132)',
                pointBackgroundColor: 'rgb(255, 99, 132)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgb(255, 99, 132)'
            }]
        };
        const config = {
            type: 'radar',
            data: data,
            options: {
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            },
        };
        const canvas1 = $("#canvas1");
        new Chart(canvas1, config);
    </script>

</body>

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:41 GMT -->

</html>
