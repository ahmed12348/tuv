@extends('frontend.layouts.index')
@section('content')


    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>{{$service->title_en}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('services')}}">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$service->title_en}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <div class="blog-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 pb-30 offset-lg-2 col-sm-12">
                    <div class="blog-details-item desk-pad-left-20">
                        <article class="blog-details-box mb-30">
                            <div class="blog-post-image">
                                <img src="https://i.pinimg.com/originals/11/7c/76/117c767124295fcae39f7c4debc00883.jpg"
                                     alt="CERTIFICATION">
                                <div class="blog-post-category">{{$service->title_en}}</div>
                            </div>
                            <div class="blog-post-details">

                                {!! $service->description_en !!}
{{--                                <h2>CERTIFICATION & AUDITING</h2>--}}
{{--                                <p>TUV offers unique training programs with wide range of standard and customized trainings--}}
{{--                                    pertaining to each industry as per client expectations & requirements. We conduct both--}}
{{--                                    on line & on site trainings to different technicians, engineers, leaders and managers in--}}
{{--                                    a variety of sectors.--}}




{{--                                </p>--}}
{{--                                <p>  TUV provides nationally & internationally accepted certifications upon completion of the--}}
{{--                                    courses offered, which are highly competitive and committed to excellence.</p>--}}
{{--                                <blockquote class="blockquote">--}}
{{--                                    <div class="blockquote-inner">--}}
{{--                                        <p>“  TUV provides nationally & internationally accepted certifications upon completion of the--}}
{{--                                            courses offered, which are highly competitive and committed to excellence.”</p>--}}
{{--                                    </div>--}}
{{--                                </blockquote>--}}


                            </div>

                            <div class="blog-action">
                                <p class="blog-action-tag"><i class="flaticon-tag"></i>
                                    @foreach($tags as $tag)
                                    <a href="{{url('services/tag/'.$tag->id)}}">
                                        {{$tag->title_en}}
                                    </a>,



                                    @endforeach
                                </p>
                                <div class="blog-share">
                                    <p>Share Post:</p>
                                    <ul class="social-list">
                                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/facebook.png" alt="social"></a></li>
                                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/twitter.png" alt="social"></a></li>
                                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/linkedin.png" alt="social"></a></li>
                                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/instagram.png" alt="social"></a></li>
                                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/youtube.png" alt="social"></a></li>
                                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/skype.png" alt="social"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
