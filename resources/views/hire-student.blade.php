<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:15 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Construction - Construction Company, Building Company Template</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    p,
    li,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 ,
    span,
    button,
    label,
    opt,
    select{
        font-family: 'Poppins'
    }
</style>

<body>
    <div class="p-5">
        <a class="wprt-button" href="#">
            Back
        </a>
    </div>
    <div style="padding: 50px" class="">
        <h1>Hire Student</h1>
        <form method="get" class="">
            <div class="row">
                <div class="col-md-6 d-flex flex-column mt-3">
                    <label class="form-label" for="role">Role</label>
                    <div class="d-flex">
                        <select class="form-control" name="role" id="role">
                            <option disabled selected>Select Role</option>
                            <option @selected($role == "mechanic") value="mechanic">Mechanic</option>
                            <option @selected($role == "operator") value="operator">Operator</option>
                        </select>
                        <button class="wprt-button small">Search</button>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column mt-3">
                    <label class="form-label" for="branch">Branch</label>
                    <div class="d-flex">
                        <select class="form-control" name="branch" id="branch">
                            <option disabled selected>Select Role</option>
                            @forelse ($branchs as $i => $item)
                                <option @selected($branch == $item->id) value="{{$item->id}}">{{$item->city}}</option>
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
        <div class="col-md-4 px-5 mt-3">
            <div class="card">
                <div class="card-img d-flex w-full mt-3">
                    <img class="m-auto d-block" style="border-radius: 100%" src="{{asset('assets/img/avatar.png')}}" alt="">
                </div>
                <div class="card-body">
                    <ul class="m-0">
                        <li>
                            Name: {{$item->name}}
                        </li>
                        <li>
                            Age: {{$item->age}} years old
                        </li>
                        <li>
                            Height: {{$item->height}} cm
                        </li>
                        <li>
                            Weight: {{$item->weight}} Kg
                        </li>
                    </ul>
                    <div class="mt-3 d-flex flex-column">
                        <span class="fw-bold">Experience:</span>
                        <p>{{$item->experience}}</p>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button onclick="handleHire('{{$item->id}}')" class="wprt-button small btn-hire-{{$item->id}}">Hire</button>
                        <button onclick="handleUnHire('{{$item->id}}')" class="btn btn-danger small btn-unhire-{{$item->id}} d-none">UnHire</button>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p>Siswa not found</p>
        @endforelse
        <div>
            {{
                $students->links("pagination::bootstrap-5")
            }}
        </div>

    </div>
    <div class="px-5 d-flex flex-row py-3 justify-content-end align-items-center gap-4 border-t">
        <span>Confirm to admin: </span>
        <div class="d-flex align-items-center gap-2">
            <button onclick="handleSendWhatsapp()" class="wprt-button small outline">Whatsapp</button>
            <button class="wprt-button small">Email</button>
        </div>
        <div class="d-flex">
            <button onclick="handleReset()" class="btn btn-danger">Reset</button>
        </div>
    </div>


    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
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
        handleCheckHire()

        function handleSendWhatsapp(){
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

        function handleReset()
        {
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
        function handleCheckHire()
        {
            let hiredStudent = JSON.parse(localStorage.getItem('hired_students')) || []
            let student = {{$students->pluck('id')->toJson()}}
            console.log({student})

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
        function handleUnHire(id){
            let hiredStudents = JSON.parse(localStorage.getItem('hired_students')) || [];
            let index = hiredStudents.indexOf(id);
            if (index > -1) {
                hiredStudents.splice(index, 1);
            }
            localStorage.setItem('hired_students', JSON.stringify(hiredStudents));
            console.log(localStorage.getItem("hired_students"));
            handleCheckHire()
        }
        function handleHire(id)
        {
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