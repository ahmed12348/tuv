@extends('frontend.layouts.index')
@section('content')


    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{url('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Training</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Training</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="about-section pt-100 pb-20">
        <div class="container desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-10 pb-30 desk-plr-0 order-lg-1 pb-30">
                    <div class="max-1000 desk-mr-auto desk-pad-left-30">
                        <div class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                            <div class="overlay-text">
                                <h3 class="font-family-3">License</h3>
                            </div>
                            <h2>Our TVTC License</span></h2>
                            <p style="text-align: justify;">
                                The FNRCO Services Company is licensed by Technical and Vocational Training Corporation (TVTC) to provide trainings in different programs.
                                Arabic details will taken from the Certificate


                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-2 pb-30 desk-plr-20 order-lg-2 pb-30 desk-pll-20">
                    <div class="about-image text-center  ">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/TVTC_identity.svg/1200px-TVTC_identity.svg.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="course-section pt-20 pb-70">
        <div class="container">

            <div class="row">
                @foreach($trainings as $training)
                <div class="col-12 col-md-6 col-lg-4 pb-30">
                    <div class="course-card course-card-offwhite">
                        <div class="course-card-thumb">
                            <a href="{{url('trainings/'.$training->id)}}"><img src="{{asset('storage/'.$training->image)}}"
                                                                 alt="course"></a>
                        </div>
                        <div class="course-card-content">

                            <h3><a href="{{url('trainings/'.$training->id)}}">{{$training->title_en}}</a>
                            </h3>
                        </div>
                        <ul class="course-filter-list">
                            <li class="course-filter-focus">{{$training->iso}}</li>

                        </ul>
                    </div>
                </div>
                @endforeach


            </div>




            <nav aria-label="Page navigation example" class="page-pagination">
                <ul class="pagination">
{{--                    <li class="page-item disabled"><a class="page-link" href="#"><i class="flaticon-left-arrow-1"></i></a></li>--}}

                  {{$trainings->links()}}
{{--                    <li class="page-item"><a class="page-link" href="#"><i class="flaticon-right-arrow"></i></a></li>--}}
                </ul>
            </nav>
        </div>
    </section>


@endsection
