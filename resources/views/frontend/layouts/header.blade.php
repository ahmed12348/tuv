<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="description" content="TUV limited specializes in providing a tailored end to end services to all of its clients from local and foreign companies within the Kingdom of Saudi Arabia.">
<meta name="keywords" content="Certification, Industrial Services, Auditing, Training, Third Party Inspection Services, Vendor / Source Inspection, HSE & Sustainability">
<meta name="author" content="TUV limited">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<title>TUV limited</title>
<meta property="og:type" content="article"/>
<meta property="og:title" content="TUV limited"/>
<meta property="og:description" content="TÜV specializes in providing a tailored end to end services to all of its clients from local and foreign companies within the Kingdom of Saudi Arabia."/>
<meta property="og:image" content="assets/images/ogimage.jpg"/>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />

<link rel="icon" href="{{url('frontendDesing')}}/assets/images/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/bootstrap.min.css?v=1" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/bootstrap-reboot.min.css?v=1" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/animate.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/swiper-bundle.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/meanmenu.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/magnific-popup.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/main.min.css?v=1" type="text/css" media="all"/>
<link rel='stylesheet' href='{{url('frontendDesing')}}/assets/css/boxicons.min.css' type="text/css" media="all"/>
<link rel='stylesheet' href='{{url('frontendDesing')}}/assets/css/flaticon.css' type="text/css" media="all"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel='stylesheet' href='{{url('frontendDesing')}}/assets/css/settings.css' type="text/css" media="all"/>
<link rel='stylesheet' href='{{url('frontendDesing')}}/assets/css/layers.css' type="text/css" media="all"/>
<link rel='stylesheet' href='{{url('frontendDesing')}}/assets/css/navigation.css' type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/style.css?ver=1.1" type="text/css" media="all"/>
<link rel="stylesheet" href="{{url('frontendDesing')}}/assets/css/responsive.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<div class="preloader bg-blue">
    <div class="preloader-wrapper">
        <img src="{{url('frontendDesing')}}/assets/images/loader.gif" alt="logo" class="logo">
        <h3>Loading</h3>
    </div>
</div>


<div class="navbar-area">

    <div class="mobile-nav">
        <a href="#" class="mobile-brand">
            <img src="{{url('frontendDesing')}}/assets/images/logo.png?ver=1.1" alt="TUV limited" class="logo">
        </a>
        <div class="navbar-option">
            <div class="navbar-option-item navbar-option-dots dropdown">
                <button type="button" id="dot" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-menu"></i>
                </button>
                <ul class="dropdown-menu navbar-dots-dropdown">
{{--                    <!-- <li class="dropdown-item">--}}
{{--                         <div class="navbar-option-item navbar-option-language dropdown language-option">--}}
{{--                             <button class="dropdown-toggle" type="button" id="language3" data-bs-toggle="dropdown"--}}
{{--                                     aria-haspopup="true" aria-expanded="false">--}}
{{--                                 <i class="flaticon-worldwide"></i>--}}
{{--                                 <span class="lang-name"></span>--}}
{{--                             </button>--}}
{{--                             <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language3">--}}
{{--                                 <a class="dropdown-item" href="#">--}}
{{--                                     <img src="assets/images/usa.png" alt="flag">--}}
{{--                                     English--}}
{{--                                 </a>--}}

{{--                                 <a class="dropdown-item" href="#">--}}
{{--                                     <img src="assets/images/uae.png" alt="flag">--}}
{{--                                     العربيّة--}}
{{--                                 </a>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </li>-->--}}
                    <li class="dropdown-item">
                        <div class="navbar-option-item navbar-option-cart">
                            <div class="navbar-option-item navbar-option-search dropdown">
                                <button type="button" id="search1" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i class="flaticon-search"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="search1">
                                    <form method="GET" action="{{route('search.certificate')}}">
                                        <input type="text" class="form-control"  name="search" placeholder="Search result">

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button type="submit">
                                                    <div class="input-group-text">
                                                        <i class="flaticon-search"></i>
                                                    </div>
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
            <div class="navbar-option-item navbar-option-language dropdown mobile-hide language-option">
                <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-worldwide"></i>
                    <span class="lang-name"></span>
                </button>
                <!--   <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                       <a class="dropdown-item" href="#">
                           <img src="assets/images/usa.png" alt="flag">
                           English
                       </a>

                       <a class="dropdown-item" href="#">
                           <img src="assets/images/uae.png" alt="flag">
                           العربيّة
                       </a>
                   </div>-->
            </div>
            <div class="navbar-option-item navbar-option-search dropdown mobile-hide">
                <button type="button" id="search" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-search"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="search">
                    <form method="GET" action="{{route('search.certificate')}}">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit">
                                <div class="input-group-text">
                                    <i class="flaticon-search"></i>
                                </div>
                                </button>
                            </div>
                            <input type="text" class="form-control" name="search" placeholder="Search result">
                        </div>
                    </form>
                </div>
            </div>

            <div class="navbar-option-item navbar-option-account">
                <a href="#"><i class="flaticon-user"></i></a>
            </div>
        </div>
    </div>

    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="{{url('frontendDesing')}}/assets/images/logo.png" alt="logo" class="logo">
                </a>
                <div class="navbar-search">
                    <form method="GET" action="{{route('search.certificate')}}">
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <button type="submit">
                                        <i class="flaticon-search"></i>
                                    </button>

                                </div>
                            </div>
                            <input type="text"  name="search" class="form-control" placeholder="Search result">
                        </div>
                    </form>
                </div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link {{url()->current() == url('/') ? 'active' : ''}}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('about/us')}}" class="nav-link {{url()->current() == url('about/us') ? 'active' : ''}}">About Us</a>
                            </li>

                            <!-- Our Services with dropdown -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Our Services</a>
                                <ul class="dropdown-menu">
                                    {{-- <li class="nav-item">
                                        <a href="{{url('/services')}}" class="nav-link {{url()->current() == url('/services') ? 'active' : ''}}">Overview</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{url('certifications')}}" class="nav-link {{url()->current() == url('certifications') ? 'active' : ''}}">Certificates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/trainings')}}" class="nav-link {{url()->current() == url('/trainings') ? 'active' : ''}}">Training</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/')}}#accreditations" class="nav-link">Our Accreditations</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link {{url()->current() == url('/certificate-verification') ? 'active' : ''}}">Certificate Verification</a>
                            </li>

                            <!-- Our Terms with dropdown -->
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Our Terms</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{url('')}}/TUV-Ltd.-P-02-Certification_General_Procedure[1].pdf" class="nav-link">Certification General Procedure</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('')}}/TUV-Ltd.-P-09_Procedure[1].pdf" class="nav-link">Procedure</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('')}}/impartiality-confidentiality-policy" class="nav-link">Impartiality & Confidentiality Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('')}}/regulation-for-logo-use-and-mark" class="nav-link">Regulation for Logo Use and Mark</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('contact/us')}}" class="nav-link {{url()->current() == url('contact/us') ? 'active' : ''}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                <div class="navbar-option">
                    <!-- <div class="nnavbar-option-item navbar-option-language dropdown language-option">
                         <button class="dropdown-toggle" type="button" id="language2" data-bs-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                             <i class="flaticon-worldwide"></i>
                             <span class="lang-name"></span>
                         </button>
                         <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language2">
                             <a class="dropdown-item" href="#">
                                 <img src="assets/images/usa.png" alt="flag">
                                 English
                             </a>

                             <a class="dropdown-item" href="#">
                                 <img src="assets/images/uae.png" alt="flag">
                                 العربيّة
                             </a>
                         </div>
                     </div>-->

                    <div class="navbar-option-item navbar-option-authentication">
                        @guest
                        <a href="{{url('/login')}}" class="btn main-btn text-nowrap">LOGIN / SIGNUP</a>
                        @endguest
                        @auth
                                <a href="{{url('/profile')}}" class="btn main-btn text-nowrap">Account</a>

                            @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</head>
<body>
