@extends('frontend.layouts.index')
@section('content')

    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="about-section pt-100 pb-70">
        <div class="container-fluid desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="max-600 desk-mr-auto desk-pad-left-30">
                        <div class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                            <div class="overlay-text">
                                <h3 class="font-family-3">About</h3>
                            </div>
                            <h2><span>Chairman’s Message</span></h2>
                          {!! $setting->message_en !!}
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-1 pb-30">
                    <div class="about-image text-center  ">
                        <img src="{{asset('frontendDesing')}}/assets/images/about-group-study.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section pt-100 pb-70">
        <div class="container-fluid desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="max-800 desk-mr-auto desk-pad-left-30">
                        <div class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                            <div class="overlay-text">
                                <h3 class="font-family-3">About</h3>
                            </div>
                            <h2>About Us
                            </h2>
                          {!! $setting->about_en !!}
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="about-image text-center image-frame">
                        <img src="{{asset('frontendDesing')}}/assets/images/about-tuv2.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-section bg-off-white">
        <div class="container-fluid desk-plr-0">
            <div class="row desk-mlr-0 align-items-center">
                <div class="col-12 col-lg-6 desk-plr-0">
                    <div class="max-600 desk-ml-auto desk-pad-right-100 p-tb-100">
                        <div class="section-title section-title-left text-start">
                            <h2>Our <span>Mission</span>, <span>Vision</span> & Our Core Values
                            </h2>

                        </div>
                        <div class="faq-accordion">

                            <div class="faq-accordion-item faq-accordion-item-active">
                                <div class="faq-accordion-header faq-accordion-header-white">
                                    <h3 class="faq-accordion-title">Our Mission</h3>
                                </div>
                                <div class="faq-accordion-body">
                                    <div class="faq-accordion-body-inner">
                                       {!! $setting->our_mission_en !!}
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion-item">
                                <div class="faq-accordion-header faq-accordion-header-white">
                                    <h3 class="faq-accordion-title">Our Vision
                                    </h3>
                                </div>
                                <div class="faq-accordion-body">
                                    <div class="faq-accordion-body-inner">
                                        {!! $setting->our_vision_en !!}
                                    </div>
                                </div>
                            </div>
                            <div class="faq-accordion-item">
                                <div class="faq-accordion-header faq-accordion-header-white">
                                    <h3 class="faq-accordion-title">Our Core Values
                                    </h3>
                                </div>
                                <div class="faq-accordion-body">
                                    <div class="faq-accordion-body-inner">
                                        {!! $setting->our_quality_objective_en !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 desk-plr-0">
                    <div class="about-image mobile-mt-minus-20">
                        <img src="{{asset('frontendDesing')}}/assets/images/missionVisionValue.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="timeline-section p-tb-100">
        <div class="container">
            <div class="section-title">
                <h2>Key <span>Management</span> Team</h2>
            </div>
            <div class="timeline-content">
                @foreach($teams as $team)
                <div class="timeline-item">

                    <div class="timeline-item-image timeline-item-inner">
                        <div class="timeline-label">{{$team->name_en}}
                        </div>
                        <img src="{{asset('storage/'.$team->image)}}" alt="timeline">
                    </div>
                    <div class="timeline-item-text timeline-item-inner">
                        <h3>{{$team->position_en}}</h3>
                        <h6>{!!  $team->role_en !!}</h6>

                        {!! $team->description_en !!}
                    </div>
                                        {{-- <div class="timeline-item-text timeline-item-inner">
                        <h3>Certification Manager & Lead Auditor</h3>
                        <h6>With more than a decade of expertise in advancing compliance and excellence, Mr. Ahmed ensures the continuous enhancement of quality, safety, environmental, and risk management standards.</h6>

                        <p><strong>Auditing Excellence</strong><br>
                        Mr. Ahmed conducted hundreds of third-party audits for ISO 9001, ISO 14001, ISO 45001, ISO 41001 systems, along with food safety audits for ISO 22000, FSSC 22000, and Global G.A.P.
                        As a certified BRCGS Lead Auditor, he provides clear, actionable insights across both local and international landscapes.</p>

                        <p><strong>Sustainable & Manufacturing Insights</strong><br>
                        Mr Ahmed promotes sustainability with FSC COC audits and gap assessments according to national food safety guidelines. With over 15 years in manufacturing, he strengthened product quality and safety through rigorous internal audits, validations, and supplier evaluations.</p>

                        <p><strong>Consulting and Educator</strong><br>
                        Mr. Ahmed has successfully led gap assessments, system implementations and tailored enhancements across diverse sectors, earning a distinguished reputation for his expertise in quality management and food safety.
                        With years of experience in teaching and mentoring, he has empowered professionals with his knowledge and guidance.
                        Holding an MSc in Quality Management and a B.Sc. in Agriculture, complemented by international certifications, he brings a strong foundation and strategic insight to his work.</p>

                        <p><strong>Key Roles & Expertise</strong><br>
                        • Certification Manager at TUV Limited<br>
                        • Certified BRCGS Lead Auditor & Food Safety Specialist<br>
                        • Former Lead Auditor at TUV Austria<br>
                        • Former QA Deputy Manager at SEDICO Pharmaceutical<br>
                        • Former Production Specialist at MUVCO</p>
                    </div>

                </div>
                </div> --}}
                @endforeach
{{--                <div class="timeline-item">--}}
{{--                    <div class="timeline-item-text timeline-item-inner">--}}
{{--                        <h3>Technical & Certification Manager Lead Auditor </h3>--}}


{{--                        <p>Lead auditor / Technical & Certification Manager--}}
{{--                            (25+ Years of Professional Experience in TUV NORD)--}}
{{--                            Led Internal Audits & Certification in various companies in different industries within KSA--}}
{{--                            Lead Auditor Expert (ISO Standards)--}}
{{--                            Technical & Certification Expert--}}
{{--                            Training, Planning & Scheduling--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="timeline-item-image timeline-item-inner">--}}
{{--                        <div class="timeline-label">Mundeth Meetheen--}}
{{--                        </div>--}}
{{--                        <img src="{{asset('frontendDesing')}}/assets/images/team/02.jpg" alt="timeline">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="timeline-item">--}}
{{--                    <div class="timeline-item-image timeline-item-inner">--}}
{{--                        <div class="timeline-label">Haroon Iqbal--}}
{{--                        </div>--}}
{{--                        <img src="{{asset('frontendDesing')}}/assets/images/team/03.jpg" alt="timeline">--}}
{{--                    </div>--}}
{{--                    <div class="timeline-item-text timeline-item-inner">--}}
{{--                        <h3>Lead Auditor – Quality & Food Safety--}}
{{--                        </h3>--}}
{{--                        <p>Food Safety Auditor & Trainer--}}
{{--                            19 Years of experience in Certification body & food industry--}}
{{--                            Led Internal Audits & Certification in various companies in different industries within KSA--}}
{{--                            Lead Auditor Expert (ISO Standards)--}}
{{--                            Technical & Certification Expert--}}
{{--                            Training, Planning & Scheduling--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="timeline-item">--}}
{{--                    <div class="timeline-item-text timeline-item-inner">--}}
{{--                        <h3>Senior Auditor – Quality, Environment,--}}
{{--                            Health & Safety--}}
{{--                        </h3>--}}
{{--                        <p>QHSE Lead Auditor & Trainer--}}
{{--                            14 Years of total experience in various industries--}}
{{--                            Led Internal Audits & Certifications in various companies in different industries within KSA--}}
{{--                            Lead Auditor Expert (ISO Standards)--}}
{{--                            Technical & Certification Expert--}}
{{--                            Training, Planning & Scheduling--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="timeline-item-image timeline-item-inner">--}}
{{--                        <div class="timeline-label">Mohamed Ranees--}}
{{--                        </div>--}}
{{--                        <img src="{{asset('frontendDesing')}}/assets/images/team/04.jpg" alt="timeline">--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!--
    <div class="success-content-section pb-70">
        <div class="container">
            <div class="qa-item">
                <div class="qa-item-number"><span>1</span></div>
                <div class="qa-item-content">
                    <div class="qa-content-item qa-item-title desk-pad-right-30">
                        <h3>Which Kind of Opportunities is <br> Opened up to Me When I Take the Learning?</h3>
                    </div>
                    <div class="qa-content-item qa-item-desc">
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in manam aliquam quaerat voluptatem</p>
                    </div>
                </div>
            </div>
            <div class="qa-item">
                <div class="qa-item-number"><span>2</span></div>
                <div class="qa-item-content">
                    <div class="qa-content-item qa-item-title desk-pad-right-30">
                        <h3>What Makes Maxcoach Different from Others? <br> Is That the Equipment or the Tutor?</h3>
                    </div>
                    <div class="qa-content-item qa-item-desc">
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in manam aliquam quaerat voluptatem</p>
                        <ul>
                            <li>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut</li>
                            <li>Exercitation ullamco laboris nisi ut</li>
                            <li>Laboris nisi ut aliquip ex ea commodo quis nostrud exercitation ullamco laboris</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="qa-item">
                <div class="qa-item-number"><span>3</span></div>
                <div class="qa-item-content">
                    <div class="qa-content-item qa-item-title desk-pad-right-30">
                        <h3>Which Kind of Opportunities is Opened <br> up to Me When I Take the Lead?</h3>
                    </div>
                    <div class="qa-content-item qa-item-desc">
                        <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in manam aliquam quaerat voluptatem</p>
                        <ul>
                            <li>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut</li>
                            <li>Exercitation ullamco laboris nisi ut</li>
                            <li>Laboris nisi ut aliquip ex ea commodo quis nostrud exercitation ullamco laboris</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    -->
    <!--<div class="about-section bg-maincolor-light pt-100 pb-70 position-relative">
        <div class="record-animate-shapes">
            <div class="record-animate-shape animation-tab-none">
                <img src="assets/images/shapes/shape-10.png" alt="shape">
            </div>
            <div class="record-animate-shape animation-tab-none">
                <img src="assets/images/shapes/shape-11.png" alt="shape">
            </div>
        </div>
        <div class="container position-relative">
            <div class="record-grid">
                <div class="record-grid-item">
                    <div class="record-grid-item-inner">
                        <div class="record-item-number">
                            <div class="counter">200</div>
                            <span>+</span>
                        </div>
                        <div class="record-item-text">
                            <p>Certificates Finished</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner">
                        <div class="record-item-number">
                            <div class="counter">199</div>
                            <span>+</span>
                        </div>
                        <div class="record-item-text">
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner">
                        <div class="record-item-number">
                            <div class="counter">150</div>
                            <span>+</span>
                        </div>
                        <div class="record-item-text">
                            <p>trainee</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner">
                        <div class="record-item-number">
                            <div class="counter">20</div>
                            <span>+</span>
                        </div>
                        <div class="record-item-text">
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->



@endsection
