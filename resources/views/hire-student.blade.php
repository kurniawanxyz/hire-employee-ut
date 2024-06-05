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
        <h1 class="t">Hire Student</h1>
        <form method="get" class="">
            <div class="row">
                <div class="col-md-6 d-flex flex-column mt-3">
                    <label class="form-label" for="role">Role</label>
                    <div class="d-flex">
                        <select class="form-control" name="role" id="role">
                            <option disabled selected>Select Role</option>
                            <option @selected($role == 'mechanic') value="mechanic">Mechanic</option>
                            <option @selected($role == 'operator') value="operator">Operator</option>
                        </select>
                        <button class="wprt-button small">Search</button>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-3">
                    <label class="form-label" for="branch">Branch</label>
                    <div class="d-flex">
                        <select class="form-control" name="branch" id="branch">
                            <option disabled selected>Select Branch</option>
                            @forelse ($branchs as $i => $item)
                                <option @selected($branch == $item->id) value="{{ $item->id }}">{{ $item->city }}
                                </option>
                                @empty
                            @endforelse
                        </select>
                        <button class="wprt-button small">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row px-5 justify-content-start mb-5">
        @forelse ($students as $item)
            <div class="col-md-4 px-5 mt-5">
                <div class="card mx-5">
                    <div class="card-img d-flex w-full mt-3">
                    <img class="m-auto d-block object-fit-cover" style="border-radius: 100%; object-fit: cover; object-position: top;width: 200px; height: 200px;"
                    src="{{$item->photo}}" alt="Foto {{ $item->name }}">
                    </div>
                    <span class="text-center fw-bold mt-3" style="font-size: 15px">{{$item->name}}</span>
                    <div class="card-body">
                        {{-- <ul class="m-0">
                            <li>
                                Name: {{ $item->name }}
                            </li>

                            @php
                                $age = \Carbon\Carbon::createFromFormat('d/m/Y', $item->date_birth)->age;
                            @endphp
                            <li>
                                Age: {{$age}} years old
                            </li>
                            <li>
                                Height: {{ $item->height?? 170 }} cm
                            </li>
                            <li>
                                Weight: {{ $item->weight??50 }} Kg
                            </li>
                        </ul> --}}
                        {{-- <div class="mt-3 d-flex flex-column">
                            <span class="fw-bold">Spesialization:</span>
                            @php
                                $hasSpecialization = ($item->specialization->rank_1 == "-") &&
                                    ($item->specialization->rank_2 == "-") &&
                                    ($item->specialization->rank_3 == "-") &&
                                    ($item->specialization->rank_4 == "-");
                            @endphp
                            @if (!$hasSpecialization)
                            <div>
                                @if ($item->specialization->rank_1 != "-")
                                    <span class="badge bg-warning" style="font-size: 1.25em">{{ $item->specialization->rank_1 }}</span>
                                @endif
                                @if ($item->specialization->rank_2 != "-")
                                    <span class="badge bg-warning" style="font-size: 1.25em">{{ $item->specialization->rank_2 }}</span>
                                @endif
                                @if ($item->specialization->rank_3 != "-")
                                    <span class="badge bg-warning" style="font-size: 1.25em">{{ $item->specialization->rank_3 }}</span>
                                @endif
                                @if ($item->specialization->rank_4 != "-")
                                    <span class="badge bg-warning" style="font-size: 1.25em">{{ $item->specialization->rank_4 }}</span>
                                @endif
                            </div>
                            @else
                                <p>Belum memiliki spesialisasi</p>
                            @endif
                        </div> --}}
                        <div class="mt-3 d-flex justify-content-end gap-2 px-5">
                            <div class="col-6">
                                <button onclick="window.location.href = '{{ route('hriedStudent.show', $item->id) }}'" class="wprt-button small outline w-100 text-center">Detail</button>
                            </div>
                            <div class="col-6">
                                <button onclick="handleHire('{{ $item->id }}')"
                                    class="wprt-button small btn-hire-{{ $item->id }} w-100">Hire</button>
                                <button onclick="handleUnHire('{{ $item->id }}')"
                                    class="btn btn-danger small btn-unhire-{{ $item->id }} d-none w-100">UnHire</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>Siswa not found</p>
        @endforelse
        <div>
            {{ $students->links("pagination::bootstrap-5") }}
        </div>

    </div>
    <div class="px-5 d-flex flex-row py-3 justify-content-end align-items-center gap-4 border-t">
        <span>Confirm to admin: </span>
        <div class="d-flex align-items-center gap-2">
            <button onclick="handleSendWhatsapp()" class="wprt-button small outline">Whatsapp</button>
            <button onclick="hadleSendEmail()" class="wprt-button small">Email</button>
        </div>
        <div class="d-flex">
            <button onclick="handleReset()" class="btn btn-danger">Reset</button>
        </div>
    </div>


    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src = "https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" ></script>
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

    <script>




       function matchCustom(params, data) {
    // If there are no search terms, return all of the data
    if ($.trim(params.term) === '') {
      return data;
    }

    // Do not display the item if there is no 'text' property
    if (typeof data.text === 'undefined') {
      return null;
    }

    // `params.term` should be the term that is used for searching
    // `data.text` is the text that is displayed for the data object
    if (data.text.indexOf(params.term) > -1) {
      var modifiedData = $.extend({}, data, true);
      modifiedData.text += ' (matched)';

      // You can return modified objects from here
      // This includes matching the `children` how you want in nested data sets
      return modifiedData;
    }

    // Return `null` if the term should not be displayed
    return null;
}
        $("#branch").select2({
            matcher: matchCustom
        })
        $("#role").select2({
        })

        handleCheckHire()
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

        function handleSendEmail() {
            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure you want to send an email?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Send!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url: "{{ route('hiredstudent.sendEmail') }}",
                        data: {
                            students: JSON.parse(localStorage.getItem('hired_students')) || [],
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Email has been sent',
                                text: 'Email has been sent',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'An error occurred!',
                            })
                        }
                    })
                }
            });
        }

        function handleSendWhatsapp() {
            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure you want to send a WhatsApp message?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Send!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'WhatsApp message has been sent',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $.ajax({
                        method: "POST",
                        url: "{{ route('hiredstudent.sendWhatsApp') }}",
                        data: {
                            students: JSON.parse(localStorage.getItem('hired_students')) || [],
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            window.location.href = response.url;
                        },
                        error: function(xhr, status, error) {
                            console.error('Error sending WhatsApp message');
                        }
                    });
                }
            });
        }
        function handleReset() {
            Swal.fire({
                title: 'Confirmation',
                text: 'Are you sure you want to delete the hired student data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    localStorage.removeItem('hired_students');
                    handleCheckHire();
                }
            });
        }

        function handleCheckHire() {
            let hiredStudent = JSON.parse(localStorage.getItem('hired_students')) || []
            let student = @json($students->pluck('id'))

            let notHiredStudent = student.filter(id => !hiredStudent.includes(id));
            notHiredStudent.forEach(id => {
                let btnHire = $('.btn-hire-' + id)
                let btnUnHire = $('.btn-unhire-' + id)
                btnHire.removeClass('d-none')
                btnUnHire.addClass('d-none')
            });

            $.each(hiredStudent, function(key, value) {
                let btnHire = $('.btn-hire-' + value)
                let btnUnHire = $('.btn-unhire-' + value)
                btnHire.addClass('d-none')
                btnUnHire.removeClass('d-none')
            })
        }

        function handleUnHire(id) {
            let hiredStudents = JSON.parse(localStorage.getItem('hired_students')) || [];
            let index = hiredStudents.indexOf(id);
            if (index > -1) {
                hiredStudents.splice(index, 1);
            }
            localStorage.setItem('hired_students', JSON.stringify(hiredStudents));
            console.log(localStorage.getItem("hired_students"));
            handleCheckHire()
        }

        function handleHire(id) {
            let hiredStudents = JSON.parse(localStorage.getItem('hired_students')) || [];
            hiredStudents.push(id);
            localStorage.setItem('hired_students', JSON.stringify(hiredStudents));
            console.log(localStorage.getItem("hired_students"));
            handleCheckHire()
        }
    </script>

</body>

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:41 GMT -->

</html>
