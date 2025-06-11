<!-- Modal -->

<footer>
    <div class="footer-upper pt-100 pb-80 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-content-item">
                        <div class="footer-logo">
                            <a href="#"><img src="{{url('frontendDesing')}}/assets/images/logo-3-white.png" alt="logo"></a>
                        </div>
                        <div class="footer-details footer-address-info">
                            <div class="footer-address-info-item">
                                <h4>Call Us</h4>
                                <p class="footer-contact-number"><a href="tel:001-800-388-80-90">
                                        {{$contact->phone}}</a></p>
                            </div>
                            <div class="footer-address-info-item">
                                <p class="footer-email"><a
                                            href="#"><span>{{$contact->email}}</span></a>
                                </p>
                            </div>
                            <div class="footer-address-info-item">
                                <p class="footer-availability"><span>{{$contact->time_en}}</p>
                            </div>
                            <div class="footer-address-info-item">
                                <p class="footer-physical-address">{{$contact->address_en}}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="footer-right pl-80">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3>Links</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        @foreach($trainings as $trainer)
                                            <li><a href="{{url('trainings/'.$trainer->id)}}">{{$trainer->title_en}}</a>
                                            </li>
                                        @endforeach
                                        {{--                                        <li><a href="#">Environnemental Management System</a></li>--}}
                                        {{--                                        <li><a href="#">Food Safety Management System</a></li>--}}
                                        {{--                                        <li><a href="#">Energy Management System</a></li>--}}
                                        {{--                                        <li><a href="#">IT Service Management System</a></li>--}}
                                        {{--                                        <li><a href="#">HACCP</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3>Information</h3>
                                    </div>
                                    <ul class="footer-details footer-list">

                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('about/us')}}">About Us</a></li>
                                        <li><a href="{{url('services')}}">Services</a></li>
                                        <li><a href="{{url('certifications')}}">Certificates</a></li>
                                        <li><a href="{{url('trainings')}}">Training</a></li>
                                        <li><a href="{{url('contact/us')}}">Contact Us</a></li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-5">
                                <div class="footer-content-list footer-content-item desk-pad-left-30">
                                    <div class="footer-content-title">
                                        <h3>Sign Up for Our Newsletter</h3>
                                    </div>
                                    <div class="footer-details">
                                        <p>We look forward to telling you more about our services for your business
                                        </p>
                                        <div class="footer-newsletter-form">
                                            <form class="newsletter-form" id="subscribe">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="email" placeholder="Your e-mail"
                                                               class="form-control" name="email" id="emails"
                                                               type="email" name="EMAIL" required
                                                               autocomplete="off">
                                                        <button type="'submit" id="btnsubmit" class="btn main-btn"
                                                                type="submit">SUBSCRIBE
                                                        </button>
                                                    </div>
                                                    <div id="validator-newsletter" class="form-result"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower bg-off-white">
        <div class="background-shapes">
            <div class="background-shape-item">
                <img src="{{url('frontendDesing')}}/assets/images/shapes/curved-line.png" alt="line">
            </div>
            <div class="background-shape-item">
                <img src="{{url('frontendDesing')}}/assets/images/shapes/half-circle-shape.png" alt="line">
            </div>
            <div class="background-shape-item">
                <img src="{{url('frontendDesing')}}/assets/images/shapes/animate-shape-1.png" alt="line">
            </div>
        </div>
        <div class="container">
            <div class="footer-lower-grid">
                <div class="footer-lower-item footer-lower-info">
                    <div class="footer-copyright-text">
                        <p>Copyright ©2024
                        </p>
                    </div>
                </div>
                <div class="footer-lower-item">
                    <ul class="social-list">
                        @if(!is_null($social->facebook))
                            <li><a href="{{url($social->facebook)}}"><img
                                            src="{{url('frontendDesing')}}/assets/images/facebook.png" alt="social"></a>
                            </li>
                        @endif
                        @if(!is_null($social->twitter))
                            <li><a href="{{url($social->twitter)}}"><img
                                            src="https://seeklogo.com/images/T/twitter-x-logo-19D2657BAA-seeklogo.com.png?v=638258862870000000" alt="social"></a>
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
                                            src="https://i.pinimg.com/736x/33/7f/27/337f27be6bfddfcb5ecc9b95b1d3ac2b.jpg" alt="social"></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="scroll-top" id="scrolltop">
    <div class="scroll-top-inner">
        <span><i class="flaticon-up-arrow"></i></span>
    </div>
</div>


<script src="{{url('frontendDesing')}}/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/bootstrap.bundle.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/jquery.magnific-popup.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/swiper-bundle.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/jquery.waypoints.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/moment.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/main.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/jquery-ui.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/isotope.pkgd.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{url('frontendDesing')}}/assets/js/extensions/revolution.extension.video.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/jquery.ajaxchimp.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/form-validator.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/contact-form-script.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/jquery.meanmenu.min.js"></script>

<script src="{{url('frontendDesing')}}/assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function () {
        $("#subscribe").submit(function (m) {
            $.ajax({
                type: "POST",
                url: '{{route('join.subscribe')}}',
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
                        toastr.success('SubScribe Successfully.');

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

@stack('js')

</body>
</html>
