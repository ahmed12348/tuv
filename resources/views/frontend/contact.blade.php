@extends('frontend.layouts.index')
@section('content')


    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>



    <section class="contact-information-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 pb-30">
                    <div class="contact-information-item">
                        <div class="section-title section-title-shapeless section-title-left text-start">
                            <h2>You’re Welcome To Contact Us</h2>
                        </div>
                        <div class="contact-options">
                            <div class="contact-option-item">
                                <div class="contact-option-icon"><i class="flaticon-phone-call"></i></div>
                                <div class="contact-option-details">
                                    <p>Mobile: <a href="tel:+966 9200-078-92">{{$contact->phone}}</a></p>
                                    <!--    <p>Hotline: <a href="tel:+966 9200-078-92">+966 9200-078-92</a></p>-->
                                    <p>Email: <a
                                            href="#"><span>{{$contact->email}}</span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-option-item">
                                <div class="contact-option-icon"><i class="flaticon-network"></i></div>
                                <div class="contact-option-details">
                                    <p>{{$contact->address_en}}
                                    </p>
                                </div>
                            </div>
                            <div class="contact-option-item">
                                <div class="contact-option-icon"><i class="flaticon-clock"></i></div>
                                <div class="contact-option-details">
                                    <p>{{$contact->time_hour_en}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 pb-30">
                    <div class="contact-information-item">
                        <div class="contact-information-image">
                            <img src="{{asset('frontendDesing')}}/assets/images/contact.jpg" alt="contact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Regional Office</span>Location</h2>
            </div>
            <div class="row">

                @foreach($branches as $branch)
                <div class="col-12 col-md-6 col-lg-4 pb-30">
                    <div class="career-card">
                        <div class="career-card-title text-center">
                            <i style="font-size: 3em; margin-bottom: 10px; color: #315f9e" class="fas fa-map-marked-alt"></i>
                            <h3>{{$branch->name_en}}

                            </h3>
                            <h4></h4>
                            <h5>{{$branch->address_en}}

                            </h5>
                        </div>
                        <!--<div class="career-card-brief">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>-->
                        <a href="{{$branch->url}}" target="_blank" class="btn main-btn">Map Location</a>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-12 col-md-6 col-lg-4 pb-30">--}}
{{--                    <div class="career-card">--}}
{{--                        <div class="career-card-title text-center">--}}
{{--                            <i style="font-size: 3em; margin-bottom: 10px; color: #315f9e" class="fas fa-map-marked-alt"></i>--}}
{{--                            <h3>DAMMAM BRANCH OFFICE</h3>--}}
{{--                            <h4></h4>--}}
{{--                            <h5>Ash Shulah, Dammam 34621, Saudi Arabia</h5>--}}
{{--                        </div>--}}
{{--                        <!--<div class="career-card-brief">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                                labore et dolore magna aliqua.</p>--}}
{{--                        </div>-->--}}
{{--                        <a href="https://goo.gl/maps/ExRktbRMAyChcVSu8" target="_blank" class="btn main-btn">Map Location</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6 col-lg-4 pb-30">--}}
{{--                    <div class="career-card">--}}
{{--                        <div class="career-card-title text-center">--}}
{{--                            <i style="font-size: 3em; margin-bottom: 10px; color: #315f9e" class="fas fa-map-marked-alt"></i>--}}
{{--                            <h3>JUBAIL BRANCH OFFICE</h3>--}}
{{--                            <h4></h4>--}}
{{--                            <h5>4th Floor, M.B. Group Building Compound  Jubail City, Saudi Arabia--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                        <!--<div class="career-card-brief">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                                labore et dolore magna aliqua.</p>--}}
{{--                        </div>-->--}}
{{--                        <a href="https://goo.gl/maps/RZ6t1DktbzLhGpuf7" target="_blank" class="btn main-btn">Map Location</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
{{--            <div class="row">--}}
{{--                <div class="col-12 col-md-6 col-lg-4 pb-30">--}}
{{--                    <div class="career-card">--}}
{{--                        <div class="career-card-title text-center">--}}
{{--                            <i style="font-size: 3em; margin-bottom: 10px; color: #315f9e" class="fas fa-map-marked-alt"></i>--}}
{{--                            <h3>JEDDAH BRANCH OFFICE--}}
{{--                            </h3>--}}
{{--                            <h4></h4>--}}
{{--                            <h5>Al Faisaliah District, Magri Al Sail Street, Al Jawhara,  Jeddah, Saudi Arabia--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                        <!--<div class="career-card-brief">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                                labore et dolore magna aliqua.</p>--}}
{{--                        </div>-->--}}
{{--                        <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x3e2f06cbfd87f731:0xcdcd43bba8e803a1?source=g.page.share" target="_blank" class="btn main-btn">Map Location</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6 col-lg-4 pb-30">--}}
{{--                    <div class="career-card">--}}
{{--                        <div class="career-card-title text-center">--}}
{{--                            <i style="font-size: 3em; margin-bottom: 10px; color: #315f9e" class="fas fa-map-marked-alt"></i>--}}
{{--                            <h3>JIZAN BRANCH OFFICE--}}
{{--                            </h3>--}}
{{--                            <h4></h4>--}}
{{--                            <h5>Jizan, Saudi Arabia--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                        <!--<div class="career-card-brief">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                                labore et dolore magna aliqua.</p>--}}
{{--                        </div>-->--}}
{{--                        <a href="#" target="_blank" class="btn main-btn disabled">Map Location</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-6 col-lg-4 pb-30">--}}
{{--                    <div class="career-card">--}}
{{--                        <div class="career-card-title text-center">--}}
{{--                            <i style="font-size: 3em; margin-bottom: 10px; color: #315f9e" class="fas fa-map-marked-alt"></i>--}}
{{--                            <h3>TABUK BRANCH OFFICE--}}
{{--                            </h3>--}}
{{--                            <h4></h4>--}}
{{--                            <h5>2795 King Saud Rd, Alaziziyah Alqadimah,--}}
{{--                                Tabuk, Saudi Arabia--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                        <!--<div class="career-card-brief">--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
{{--                                labore et dolore magna aliqua.</p>--}}
{{--                        </div>-->--}}
{{--                        <a href="#" target="_blank" class="btn main-btn disabled">Map Location</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>
    </section>

    <section class="contact-form-section pb-100">
        <div class="container">
            <div class="contact-form-box">
                <div class="sub-section-title text-center">
                    <h3 class="sub-section-title-heading">Leave A Message</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>
                </div>
                <form class="contact-form" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group mb-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                    </div>
                                    <input type="text" name="First_name" id="First_name" class="form-control" placeholder="Name*"
                                           required data-error="Please enter your name"/>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group mb-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                    </div>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email*"
                                           required data-error="Please enter your email"/>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group mb-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-phone-call"></i></span>
                                    </div>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone*"
                                           required data-error="Please enter your phone number"/>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="form-group mb-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-book"></i></span>
                                    </div>
                                    <input type="text" name="subject" id="subject" class="form-control"
                                           placeholder="Subject*" required data-error="Please enter your subject"/>
                                </div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group mb-20">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                    </div>
                                    <textarea name="message" class="form-control" id="message" rows="6"
                                              placeholder="Your Comment*"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 text-center">
                             <div class="input-checkbox mb-20">
                                 <input type="checkbox" id="contact1">
                                 <label for="contact1">Accept <a href="terms-service.html">Terms of Service</a> and <a
                                             href="privacy-policy-2.html">Privacy Policy</a></label>
                             </div>
                         </div>-->
                        <div class="col-12 col-md-12 col-lg-12 text-center">
                            <button class="btn main-btn" id="btnSubmit" type="submit">SEND A MESSAGE</button>
                            <!-- <div id="msgSubmit"></div>-->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <div class="map-section">
        <div class="map-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.3294204579306!2d46.74022858501773!3d24.681200158497287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f06cbfd87f731%3A0xcdcd43bba8e803a1!2z2KfZhNmI2LfZhtmK2Kkg2KfZhNij2YjZhNmJ!5e0!3m2!1sar!2seg!4v1625031876151!5m2!1sar!2seg"></iframe>
        </div>
    </div>


@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $("#contactForm").submit(function (m) {
                $.ajax({
                    type: "POST",
                    url: '{{route('save.message')}}',
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
                            toastr.success('Message Send Successfully.');
                            $('#contactForm').trigger("reset");

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
