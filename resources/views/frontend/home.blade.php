@extends('frontend.layouts.index')
@section('content')


    <header class="header-bg-four">
        <div class="container-fluid p-0">
            <div class="header-carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="header-carousel-item header-carousel-first-slide swiper-slide"
                         style="background-image: url(frontendDesing/assets/images/slider22.jpg);">
                        <div class="row m-0">
                            <div class="col-12 col-lg-10 col-xl-11 p-0">
                                <div class="header-content header-carousel-content header-content-full">
                                    <div class="header-content-text">
                                        <small><i class="flaticon-open-book"></i>CERTIFICATES PLATFORM</small>
                                        <h1><span>Certification</span> & <span>Training</span>
                                            from<span> TUV </span>are in your hands</h1>
                                        <p>We believe everyone
                                            has the capacity to be creative. Training is the way to develop your own
                                            potential.</p>
                                    </div>
                                    <div class="header-button-group">
                                        <div class="header-button-item">
                                            <a href="{{route('training_process_page')}}" class="btn main-btn">GET
                                                STARTED NOW 
                                                <i class="flaticon-edit"></i></a>
                                        </div>
                                        <div class="header-button-item">
                                            {{-- <a href="{{url('certifications')}}" class="btn main-btn btn-white">FIND
                                                Certificates <i
                                                        class="flaticon-online-learning"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-carousel-item header-carousel-second-slide swiper-slide"
                         style="background-image: url(frontendDesing/assets/images/slider211.jpg);">
                        <div class="row m-0">
                            <div class="col-12 col-lg-10 col-xl-11 p-0">
                                <div class="header-content header-carousel-content header-content-full">
                                    <div class="header-content-text">
                                        <small><i class="flaticon-open-book"></i>KEEP LEARNING</small>
                                        <h1>Use Your <span>Device</span>
                                            & Start <span>Learning</span></h1>
                                        <p>We believe everyone
                                            has the capacity to be creative. Training is the way to develop your own
                                            potential.</p>
                                    </div>
                                    <div class="header-button-group">
                                        <div class="header-button-item">
                                            <a href="{{url('about/us')}}" class="btn main-btn">GET
                                                STARTED NOW <i
                                                        class="flaticon-edit"></i></a>
                                        </div>
                                        <div class="header-button-item">
                                            {{-- <a href="{{url('certifications')}}" class="btn main-btn btn-white">FIND
                                                Certificates <i
                                                        class="flaticon-online-learning"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </header>


    <section class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 pb-30">

                    <div class="section-title">
                        <h2 class="text-center">About <span>TUV</span></h2>
                        <p style="text-align: justify;">TUV Limited Established in Saudi Arabia since 2017, TUV Limited operates internationally as a reliable partner in safety, technology, quality, education, and food safety. Our headquarters are situated in Riyadh, with branch offices in Dammam. We hold a leading position in the Saudi Market in the sector of Management Systems Certification and Inspections. With a world-class reputation for integrity and partner satisfaction, we are committed to our partners and the community.
                        <br/>
                        TUV Limited is a diverse and dynamic organization with global partners to maximize its services solutions. We specialize in providing a tailored end-to-end service to all of our clients from local and foreign companies within the Kingdom of Saudi Arabia. We are registered and licensed to deliver quality services in the field of Management System Trainings and Certification based on ISO and other international Standards.
                        
                        
                        </p>
                    </div>
                    <div class="section-button-group">
                        <div class="section-button-item">
                            <a href="{{url('about/us')}}" class="btn main-btn">MORE About Us  <i class="flaticon-edit"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 offset-lg-1 pb-30">
                    <div class="about-image-content">
                        <div class="about-bg-shapes">
                            <div class="about-bg-shape-item">
                                <img src="{{url('frontendDesing')}}/assets/images/shapes/vertical-zigzag-line.png"
                                     alt="shape">
                            </div>
                        </div>
                        <div class="about-shape-items">
                            <div class="about-shape-item animation-tab-none">
                                <img src="{{url('frontendDesing')}}/assets/images/shapes/square-dotted-shape.png"
                                     alt="shape">
                            </div>
                        </div>
                        <div class="about-image-text">
                            <div class="about-text-state">15</div>
                            <p><span>Years</span> of Experience " in Inspection !</p>
                        </div>
                        <div class="about-image-grid">
                            <div class="about-image-item">
                                <img src="{{url('frontendDesing')}}/assets/images/about-image-1.jpg" alt="about">
                            </div>
                            <div class="about-image-item">
                                <img src="{{url('frontendDesing')}}/assets/images/about-image-2.jpg" alt="about">
                            </div>
                            <div class="about-image-item">
                                <img src="{{url('frontendDesing')}}/assets/images/about-issmage-3.jpg" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="help-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="row">
                @php
                    use Illuminate\Support\Str;
                @endphp
                @foreach($services as $service)
                <div class="col-12 col-sm-6 col-lg-4 pb-30">
                    <div class="help-card help-card-center">
                         @if(Str::contains($service->title_en, 'CERTIFI'))
                            <a href="{{ url('certifications') }}">
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

    <section class="course-section p-tb-100 position-relative bg-off-white">
        <div class="course-animation-items">
            <div class="course-animation-item animation-tab-none">
                <img src="{{url('frontendDesing')}}/assets/images/shapes/curve-lines-shape.png" alt="shape">
            </div>
            <div class="course-animation-item animation-tab-none">
                <img src="{{url('frontendDesing')}}/assets/images/shapes/cloud-shape.png" alt="shape">
            </div>
        </div>
  
    </section>

    <section id="accreditations" class="partner-section p-tb-100">
        <div  class="container">
            <div class="tab-border-top tab-pt-50">
                <div class="section-title">
                    <h2><span>Our Accreditations </span>
                    </h2>
                </div>
                <div class="partner-carousel-two swiper-container">
                    <div class="swiper-wrapper">

               @foreach($accreditations as $accreditation)
                    <a href="{{ route('single_accreditation', $accreditation->id) }}" 
                    class="accreditation-item swiper-slide text-center" 
                    style="text-decoration: none; color: inherit;">

                        <div class="accreditation-icon mb-2">
                            <img src="{{ asset('storage/' . $accreditation->image) }}" 
                                alt="{{ $accreditation->name }}"
                                style="width: 130px; height: 130px; object-fit: cover; border-radius: 70%; border: 2px solid #ddd;">
                        </div>

                        <div class="accreditation-name" style="font-weight: 600; font-size: 1rem;">
                            {{ $accreditation->name }}
                        </div>
                    </a>
                @endforeach

                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-2.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-3.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-4.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-5.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-6.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-7.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-8.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/partners/partner-9.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--

    <section class="video-section pb-100 overflow-hidden">
        <div class="container">
            <div class="video-bg pt-100 bg-off-white">
                <div class="video-bg-shapes">
                    <div class="video-bg-shape-item">
                        <img src="{{url('frontendDesing')}}/assets/images/shapes/line-area-shape.png" alt="shape">
                    </div>
                </div>
                <div class="video-animation-items">
                    <div class="video-animation-item animation-tab-none">
                        <img src="{{url('frontendDesing')}}/assets/images/shapes/circle-dot-shape.png" alt="shape">
                    </div>
                    <div class="video-animation-item animation-tab-none">
                        <img src="{{url('frontendDesing')}}/assets/images/shapes/curve-lines-shape.png" alt="shape">
                    </div>
                </div>
                <div class="section-title">
                    <h2>Watch <span>The Video</span></h2>
                </div>
            </div>
            <div class="video-content">
                <img src="{{url('frontendDesing')}}/profile/books/image/profile/1.jpg" alt="vide">
                <div class="video-button">
                    <a href="https://www.youtube.com/watch?v=5cab7ARWJSA" id="video-popup"><i
                                class="flaticon-play-button"></i></a>
                </div>
                <div class="content-animation-shapes">
                    <div class="content-animation-shape animation-tab-none">
                        <img src="{{url('frontendDesing')}}/assets/images/shapes/combined-circle-shape.png" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}

    <section class="partner-section p-tb-100">
        <div class="container">
            <div class="tab-border-top tab-pt-50">
                <div class="section-title">
                    <h2>Major <span>Clients</span></h2>
                </div>
                <div class="partner-carousel swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($clients as $client)
                            <div class="partner-item swiper-slide">
                                <div><img src="{{asset('storage/'.$client->image)}}"
                                                                  alt="partner"></div>
                            </div>
                        @endforeach
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-2.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-3.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-4.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-5.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-6.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-7.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-8.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="partner-item swiper-slide">--}}
                        {{--                            <a href="javascript:void(0)"><img src="{{url('frontendDesing')}}/assets/images/clients/partner-res-9.jpg" alt="partner"></a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--

    <div class="instagram-section">
        <div class="instagram-carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-1.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-2.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-3.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-4.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-5.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-6.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
                <div class="instagram-carousel-item instagram-carousel-item-secondcolor swiper-slide">
                    <a href="javascript:void(0)">
                        <img src="{{url('frontendDesing')}}/assets/images/instagram/instagram-slider-7.jpg"
                             alt="instagram">
                        <div class="instagram-hover">
                            <i class="flaticon-instagram"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

--}}


@endsection


@push('js')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.JoinRequestCertificate', function (m) {
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    url: '{{route('certificate')}}',
                    data: {'id': id},

                    beforeSend: function () {
                        $('#JoinRequest').addClass('spinner');
                    },
                    complete: function () {
                        $('#JoinRequest').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {
                            $('.certificate_name').val(response.certification.title_en);
                            $('.certificate_id').val(response.certification.id);


                        }
                    },
                    error: function (reject) {
                        //  console.log(reject);

                        if (reject.status == 422) {
                            var reponse = $.parseJSON(reject.responseText);
                            jQuery.each(reponse.errors, function (key, value) {

                                toastr.error(value);
                            });
                        }
                    }
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });

        });
    </script>


    <script>
        $(document).ready(function () {
            $("#RequestCertificate").submit(function (m) {
                $.ajax({
                    type: "POST",
                    url: '{{route('join.request.certificate')}}',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#btnSubmit').addClass('spinner');
                    },
                    complete: function () {
                        $('#btnSubmit').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {
                            toastr.success('Saved.');

                        }
                    },
                    error: function (reject) {
                        //  console.log(reject);

                        if (reject.status == 422) {
                            var reponse = $.parseJSON(reject.responseText);
                            jQuery.each(reponse.errors, function (key, value) {

                                toastr.error(value);
                            });
                        }
                    }
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });

        });
    </script>


@endpush
