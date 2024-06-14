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


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/img/logokecil.png') }}">
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


        @media (max-width: 768px) {
            .logo {
                width: 100px;
            }

            .check-student-hired {
                display: none;
            }
        }
    </style>

<body>
    <nav class="d-flex w-100 justify-content-between px-5 py-3 align-items-center "
        style="background-color: #212522; position: fixed;top: 0;z-index: 1;">
        {{-- <span> --}}
        <img width="150" class="logo" style="object-fit:cover"
            src="{{ asset('assets/admin/img/logo_UTS_terang.png') }}" alt="">
        {{-- </span> --}}
        <div class="d-flex gap-3">
            <div class="d-flex gap-3 align-items-center">
                <a class="" href="{{ route('get.changeLanguage', 'id') }}">
                    <img width="25" height="25" src="https://img.icons8.com/color/48/indonesia-circular.png"
                        alt="indonesia-circular" />
                </a>
                <a class="" href="{{ route('get.changeLanguage', 'en') }}">
                    <img width="25" height="25" src="https://img.icons8.com/color/48/great-britain-circular.png"
                        alt="great-britain-circular" />
                </a>
            </div>
            <button onclick="showModal()" id="checkHired" data-bs-toggle="modal" data-bs-target="#modalStudent"
                class="btn btn-secondary py-3 d-flex justify-content-center align-items-center gap-2">
                <span class="check-student-hired">{{ __('Check Student Hired') }}</span>
                <div id="totalStudent" class="bg-white rounded-circle p-1 text-secondary"
                    style="width: 20px; height: 20px">0</div>
            </button>
            <button onclick="handleLogout()">Logout</button>
        </div>
    </nav>



    @yield('content')



    <div class="modal" id="modalStudent" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('List Student Hired') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center notfound">No data available</p>
                    <table class="table table-striped-columns table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Role') }}</th>
                                <th scope="col">{{ __('Branch/Site') }}</th>
                                <th scope="col">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="listStudent table-group-divider">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="button" onclick="handleDownload()" class="btn btn-primary"> <i
                            class="fa fa-file"></i> {{ __('Download') }}</button>
                    <button type="button" onclick="handleSendWhatsapp()" class="btn btn-success"> <i
                            class="fa fa-whatsapp"></i> {{ __('Send') }} Whatsapp</button>
                    <button type="button" onclick="handleSendEmail()" class="btn btn-warning text-white"> <i
                            class="fa fa-send"></i> {{ __('Send') }} Email</button>
                </div>
            </div>
        </div>
    </div>


    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js'></script>
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
    <script src="https://cdn.sheetjs.com/xlsx-0.20.2/package/dist/xlsx.full.min.js"></script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('chekHired')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })

        function handleDownload() {
            const hiredStudent = JSON.parse(localStorage.getItem('hired_students')) || [];
            $.ajax({
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    studentsId: hiredStudent
                },
                url: "{{ route('hiredStudent.data') }}",
                success: function(response) {
                    let data = [
                        [{
                            v: "No",
                            s: {
                                alignment: {
                                    horizontal: "left",
                                    vertical: "center",
                                    textRotation: 0,
                                    wrapText: true,
                                    indent: 0
                                },
                                font: {
                                    bold: true,
                                    color: {
                                        argb: "FFFFFFFF"
                                    },
                                    name: "Calibri",
                                    sz: 12,
                                    family: 2,
                                    scheme: "minor"
                                },
                                fill: {
                                    fgColor: {
                                        rgb: "00B050"
                                    },
                                    patternType: "solid",
                                    bgColor: {
                                        indexed: 64
                                    }
                                },
                                border: {
                                    top: {
                                        style: "thin",
                                        color: {
                                            auto: 1
                                        }
                                    },
                                    bottom: {
                                        style: "thin",
                                        color: {
                                            auto: 1
                                        }
                                    },
                                    left: {
                                        style: "thin",
                                        color: {
                                            auto: 1
                                        }
                                    },
                                    right: {
                                        style: "thin",
                                        color: {
                                            auto: 1
                                        }
                                    }
                                },
                                alignment: {
                                    horizontal: "center",
                                    vertical: "center",
                                    textRotation: 0,
                                    wrapText: true,
                                    indent: 0
                                },
                                numFmt: "@",
                                protection: {
                                    locked: 0,
                                    hidden: 0
                                }
                            },
                            t: "s"
                        }, {
                            v: "Name",
                            s: {
                                fill: {
                                    fgColor: {
                                        rgb: "00B050"
                                    },
                                    bgColor: {
                                        rgb: "D9D9D9"
                                    }
                                }
                            },
                            t: "s"
                        }, {
                            v: "Role",
                            s: {
                                fill: {
                                    fgColor: {
                                        rgb: "00B050"
                                    },
                                    bgColor: {
                                        rgb: "D9D9D9"
                                    }
                                }
                            },
                            t: "s"
                        }, {
                            v: "Branch/Site",
                            s: {
                                fill: {
                                    fgColor: {
                                        rgb: "00B050"
                                    },
                                    bgColor: {
                                        rgb: "D9D9D9"
                                    }
                                }
                            },
                            t: "s"
                        }]
                    ];
                    $.each(response, function(index, student) {
                        data.push([{
                                v: index + 1,
                                s: {
                                    alignment: {
                                        horizontal: "left",
                                        vertical: "center",
                                        textRotation: 0,
                                        wrapText: true,
                                        indent: 0
                                    },
                                    font: {
                                        bold: false,
                                        color: {
                                            argb: "FFFFFFFF"
                                        },
                                        name: "Calibri",
                                        sz: 11,
                                        family: 2,
                                        scheme: "minor"
                                    },
                                    border: {
                                        top: {
                                            style: "thin",
                                            color: {
                                                auto: 1
                                            }
                                        },
                                        bottom: {
                                            style: "thin",
                                            color: {
                                                auto: 1
                                            }
                                        },
                                        left: {
                                            style: "thin",
                                            color: {
                                                auto: 1
                                            }
                                        },
                                        right: {
                                            style: "thin",
                                            color: {
                                                auto: 1
                                            }
                                        }
                                    },
                                    alignment: {
                                        horizontal: "center",
                                        vertical: "center",
                                        textRotation: 0,
                                        wrapText: true,
                                        indent: 0
                                    },
                                    numFmt: "@",
                                    protection: {
                                        locked: 0,
                                        hidden: 0
                                    }
                                },
                                t: "s"
                            },
                            student.name,
                            student.role,
                            student.branch.city
                        ]);
                    })
                    var ws = XLSX.utils.aoa_to_sheet(data);
                    ws['!cols'] = [{}, {
                        wpx: 250
                    }, {
                        wpx: 250
                    }, {
                        wpx: 250
                    }];
                    var wb = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb, ws, "Hired Students");
                    XLSX.writeFile(wb, "hired-students.xlsx");
                    console.log(data)
                },
                error: function(xhr, status, error) {
                    swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'An error occurred!' + error,
                    })
                }
            })
        }


        function showModal() {
            const hiredStudent = JSON.parse(localStorage.getItem('hired_students')) || [];

            $("#modalStudent .modal-body .spinner-border").remove();
            $(".listStudent").empty();
            if (hiredStudent.length > 0) {
                $(".notfound").addClass("d-none");
                $.ajax({
                    method: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        studentsId: hiredStudent
                    },
                    url: "{{ route('hiredStudent.data') }}",
                    beforeSend: function() {
                        $("#modalStudent .modal-body").append(
                            `<div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>`
                        )
                    },
                    success: function(response) {
                        const students = response;
                        $("#modalStudent .modal-body .table").removeClass("d-none");
                        students.forEach(function(student, index) {
                            $(".listStudent").append(`
                            <tr>
                                <td>${index + 1}</td>
                                <td>${student.name}</td>
                                <td>${student.role}</td>
                                <td>${student.branch.city}</td>
                                <td class="text-center">
                                    <button class="btn btn-danger" onclick="handleUnHire('${student.id}')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        `);
                        });
                        $("#modalStudent .modal-body .spinner-border").remove();
                    },
                    error: function(xhr, status, error) {

                    }
                })
            } else {
                $("#modalStudent .modal-body .table").addClass("d-none");
                $(".notfound").removeClass("d-none");
            }
        }



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
                            window.open(response.url, '_blank');
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

            $("#totalStudent").text(hiredStudent.length);
            showModal()

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
            // console.log(localStorage.getItem("hired_students"));
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

    @yield('script')

</body>

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:41 GMT -->

</html>
