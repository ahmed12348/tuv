@extends('frontend.layouts.index')
@section('content')

<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
    </div>
    <div class="container">
        <div class="header-page-content">
            <h1>GET STARTED</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">GET STARTED</li>
                </ol>
            </nav>
        </div>
    </div>
</header>


<section class="about-section pt-100 pb-70">
    <div class="container desk-p-0">
        <div class="row align-items-center desk-mlr-0">
            <div class="col-12 col-lg-12 pb-30 desk-plr-0 order-lg-1 pb-30">
                <div class="about-image text-center  ">
                    <img src="{{asset('frontendDesing')}}/assets/images/getstarted.jpg" alt="get started ">
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
