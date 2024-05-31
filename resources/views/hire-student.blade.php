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
    button{
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
                            <option value="mechanic">Mechanic</option>
                            <option value="operator">Operator</option>
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
                                <option value="{{$item->id}}">{{$item->city}}</option>
                            @empty
                                
                            @endforelse
                        </select>
                        <button class="wprt-button small">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row px-5 justify-content-between mb-5">
        @forelse ($students as $item )
        <div class="col-md-3 px-4">
            <div class="card">
                <div class="card-img d-flex w-full mt-3">
                    <img class="m-auto d-block" style="border-radius: 100%" src="{{asset('assets/img/avatar.png')}}" alt="">
                </div>
                <div class="card-body">
                    <ul class="m-0">
                        <li>
                            Name: Adi Kurniawan
                        </li>
                        <li>
                            Age: 18 years old
                        </li>
                        <li>
                            Heigh: 160 cm
                        </li>
                        <li>
                            Weight: 45 Kg
                        </li>
                    </ul>
                    <div class="mt-3 d-flex flex-column">
                        <span class="fw-bold">Experience:</span>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia itaque obcaecati debitis voluptates ducimus tenetur est alias voluptate facilis excepturi?</p>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button class="wprt-button small">Hire</button>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <p>Siswa not found</p> 
        @endforelse
       
    </div>
    <div class="px-5 d-flex flex-row py-3 justify-content-end align-items-center gap-4 border-t">
        <span>Confirm to admin: </span>
        <div class="d-flex align-items-center gap-2">
            <button class="wprt-button small outline">Whatsapp</button>
            <button class="wprt-button small">Email</button>
        </div>
    </div>
    <a id="scroll-top"></a>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/animsition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fitText.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flexslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vegas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/cube.portfolio.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

</body>

<!-- Mirrored from themes247.net/html5/construction-template/demo/home-3-hero-slideshow.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 19:04:41 GMT -->

</html>
