@extends('frontend.layouts.index')
@section('content')


    <header class="header-page">
        <div class="container">
            <div class="header-page-content desk-pad-right-30">
                <div class="course-badge">{{$training->iso}}</div>
                <h1>Quality Management System</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$training->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="course-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pb-30 order-lg-2">
                    <div class="summery-details-item sidebar-to-header">
                        <div class="summery-box">
                            <div class="summery-iframe">
                                <img src="{{asset('frontendDesing')}}/assets/images/courses/course-image-1.jpg"
                                     alt="course">
                            </div>
                            <div class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-equalizer"></i>Level</div>
                                        <div class="summery-option">{{$training->level_en}}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-instructor"></i>Trainer</div>
                                        <div class="summery-option">{{$training['trainer']->name_en ?? 'Not Available'}}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-online-learning-1"></i>Sessions</div>
                                        <div class="summery-option">{{$training->lesson_en}}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-reading-book-1"></i>Enrolled</div>
                                        <div class="summery-option">{{$training->enrolled_en}}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-key"></i>Validity</div>
                                        <div class="summery-option">{{$training->access_en}}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-globe"></i>Language</div>
                                        <div class="summery-option">{{$training->language_en}}</div>
                                    </div>
                                </div>
                                <div class="summery-material-list">
                                    <h4>Material Includes</h4>
                                    {!! $training->material_en !!}
                                </div>
                                <div class="summery-buttons">
                                    @auth

                                        <a href="#" id="JoinRequest" data-training_id="{{$training->id}}" class="btn main-btn">Join Request</a>
                                    @endauth
                                    @guest

                                        <a href="{{url('/login')}}" class="btn main-btn">Join Request</a>

                                    @endguest
                                </div>
                                <div class="summery-social-share">
                                    <ul class="social-list">
                                        @if(!is_null($social->facebook))
                                            <li><a href="{{url($social->facebook)}}"><img
                                                            src="{{url('frontendDesing')}}/assets/images/facebook.png" alt="social"></a>
                                            </li>
                                        @endif
                                        @if(!is_null($social->twitter))
                                            <li><a href="{{url($social->twitter)}}"><img
                                                            src="{{url('frontendDesing')}}/assets/images/twitter.png" alt="social"></a>
                                            </li>
                                        @endif
                                        @if(!is_null($social->linkedin))
                                            <li><a href="{{url($social->linkedin)}}"><img
                                                            src="{{url('frontendDesing')}}/assets/images/linkedin.png" alt="social"></a>
                                            </li>

                                        @endif
                                        @if(!is_null($social->instagram))
                                            <li><a href="{{url($social->instagram)}}"><img
                                                            src="{{url('frontendDesing')}}/assets/images/instagram.png"
                                                            alt="social"></a></li>
                                        @endif
                                        @if(!is_null($social->youtube))
                                            <li><a href="{{url($social->youtube)}}"><img
                                                            src="{{url('frontendDesing')}}/assets/images/youtube.png" alt="social"></a>
                                            </li>
                                        @endif
                                        @if(!is_null($social->skype))
                                            <li><a href="{{url($social->skype)}}"><img
                                                            src="{{url('frontendDesing')}}/assets/images/skype.png" alt="social"></a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <ul class="product-tab-list">
                            <li class="active" data-product-tab="1">Overview</li>
                            <li data-product-tab="2">Course Outline</li>
                            <li data-product-tab="3">Trainer</li>

                        </ul>
                        <div class="summery-info-details">
                            <div class="summery-info-details-item summery-info-details-item-active"
                                 data-summery-info-details="1">
                                <div class="summery-info-details-inner">
                                    <h3>Course Description</h3>
                                    {!! $training->description_en !!}

                                    <hr/>
                                    <h4>Course Objectives:</h4>
                                    {!! $training->objective_en !!}
                                    <hr/>

                                    <h4>Benefits of Implementing ISO 9001:2015:</h4>
                                    {!! $training->benefits_implement !!}
                                    <hr/>
                                    <h4>Who should attend:</h4>
                                    {!! $training->attend_en !!}
                                    <hr/>
                                    <h4>Organization Benefits:</h4>
                                    {!! $training->benefits_en !!}
                                    <hr/>
                                    <h5>Other than meeting customer and organization requirements, QMS will also help to:</h5>
                                    {!! $training->meeting_en !!}
                                    <hr/>

                                </div>
                            </div>
                            <div class="summery-info-details-item" data-summery-info-details="2">
                                <div class="summery-info-details-inner">
                                    @if(isset($training['courses']))
                                        @foreach($training['courses'] as $course)
                                            <h4>{{$course->title}}</h4>
                                            {{--                                    <small><i>Overview of Internal Auditing System </i></small>--}}
                                            {!!  $course->description!!}
                                        @endforeach
                                    @endif




                                </div>
                            </div>
                        <div class="summery-info-details-item" data-summery-info-details="3">
                            <div class="summery-info-details-inner">
                                <div class="summery-info-instructor">
                                    <div class="summery-info-instructor-thumb">
                                        @if(!empty($training['trainer']->image))
                                        S
                                           
                                        @else
                                            <img src="{{ asset('frontendDesing/assets/images/default-trainer.png') }}" alt="No Trainer Image">
                                        @endif
                                    </div>
                                    <div class="summery-info-instructor-details">
                                        <h3>{{ $training['trainer']->name_en ?? 'Trainer Name Not Available' }}</h3>
                                        <p>{!! $training['trainer']->description_en ?? 'No description available.' !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   {{-- <section class="course-section p-tb-100 bg-off-white">
        <div class="container">
            <div class="section-title-group">
                <div class="section-title section-title-shapeless">
                    <h2>Courses You <span>Might Like</span></h2>
                </div>
            </div>
            <div class="course-carousel swiper-container">
                <div class="swiper-wrapper">
                    <div class="course-carousel-item swiper-slide">
                        <div class="course-card">
                            <div class="course-card-thumb">
                                <a href="#"><img src="{{asset('frontendDesing')}}/assets/images/courses/course-image-2.jpg"
                                                 alt="course"></a>
                            </div>
                            <div class="course-card-content">

                                <h3><a href="#">Quality Management System
                                        – Medical devices</a></h3>
                            </div>
                            <ul class="course-filter-list">
                                <li class="course-filter-focus">ISO 13485
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="course-carousel-item swiper-slide">
                        <div class="course-card">
                            <div class="course-card-thumb">
                                <a href="#"><img src="{{asset('frontendDesing')}}/assets/images/courses/course-image-3.jpg"
                                                 alt="course"></a>
                            </div>
                            <div class="course-card-content">

                                <h3><a href="#">Quality Management System
                                        – Medical devices</a></h3>
                            </div>
                            <ul class="course-filter-list">
                                <li class="course-filter-focus">ISO 13485
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="course-carousel-item swiper-slide">
                        <div class="course-card">
                            <div class="course-card-thumb">
                                <a href="#"><img src="{{asset('frontendDesing')}}/assets/images/courses/course-image-4.jpg"
                                                 alt="course"></a>
                            </div>
                            <div class="course-card-content">

                                <h3><a href="#">Quality Management System
                                        – Medical devices</a></h3>
                            </div>
                            <ul class="course-filter-list">
                                <li class="course-filter-focus">ISO 13485
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-carousel-control">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

    </section>--}}
    @push('js')
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <script>
            $(document).ready(function () {
                $(document).on('click','#JoinRequest',function (m) {
                var training_id=    $(this).data('training_id');

                    $.ajax({
                        type: "POST",
                        url: '{{route('join.training')}}',
                         data:{'training_id':training_id},

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
                                toastr.success('Request Send Successfully .');

                            }
                        },
                        error:function (reject){
                            //  console.log(reject);

                            if(reject.status == 422){
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


@endsection
