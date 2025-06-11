@extends('frontend.layouts.index')
@section('content')



    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Our Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>






    <section class="help-section pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="row">

                @foreach($services as $service)
                <div class="col-12 col-sm-6 col-lg-4 pb-30">
                    <div class="help-card help-card-center">
                        @if($service->description_en == null )
                            <a href="javascript:void(0)">
                              @else
                                    <a href="{{url('services/'.$service->id)}}">
                                @endif
                            <div class="help-card-thumb">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <div class="help-card-content">
                                <h3>{{$service->title_en}}

                                </h3>

                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-12 col-sm-6 col-lg-4 pb-30">--}}
{{--                    <div class="help-card help-card-center">--}}
{{--                        <a href="?page=technical_inspection_services">--}}
{{--                            <div class="help-card-thumb">--}}
{{--                                <i class="flaticon-satisfaction"></i>--}}
{{--                            </div>--}}
{{--                            <div class="help-card-content">--}}
{{--                                <h3>TECHNICAL INSPECTION--}}
{{--                                </h3>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-6 col-lg-4 pb-30">--}}
{{--                    <div class="help-card help-card-center">--}}
{{--                        <a href="javascript:void(0)">--}}
{{--                            <div class="help-card-thumb">--}}
{{--                                <i class="flaticon-instructions"></i>--}}
{{--                            </div>--}}
{{--                            <div class="help-card-content">--}}
{{--                                <h3>PRODUCT CERTIFICATION--}}
{{--                                </h3>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-6 col-lg-4 pb-30">--}}
{{--                    <div class="help-card help-card-center">--}}
{{--                        <a href="?page=training_service">--}}
{{--                            <div class="help-card-thumb">--}}
{{--                                <i class="flaticon-learn"></i>--}}
{{--                            </div>--}}
{{--                            <div class="help-card-content">--}}
{{--                                <h3>TRAINING SERVICES--}}
{{--                                </h3>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-6 col-lg-4 pb-30">--}}
{{--                    <div class="help-card help-card-center">--}}
{{--                        <a href="javascript:void(0)">--}}
{{--                            <div class="help-card-thumb">--}}
{{--                                <i class="flaticon-learn"></i>--}}
{{--                            </div>--}}
{{--                            <div class="help-card-content">--}}
{{--                                <h3>TECHNICAL SUPPORT SERVICES--}}


{{--                                </h3>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-6 col-lg-4 pb-30">--}}
{{--                    <div class="help-card help-card-center">--}}
{{--                        <a href="?page=hse_service">--}}
{{--                            <div class="help-card-thumb">--}}
{{--                                <i class="flaticon-learn"></i>--}}
{{--                            </div>--}}
{{--                            <div class="help-card-content">--}}
{{--                                <h3>HSE SERVICES </h3>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

@endsection
