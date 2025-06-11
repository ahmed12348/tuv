@extends('frontend.layouts.index')
@section('content')

    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Regulation for logo use and mark</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Regulation for logo use and mark</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="about-section pt-100 pb-70">
        <div class="container desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-12 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="m ">
                        <div class="about-section-title section-title section-title-left section-title-shapeless position-relative" style="line-height: 30px">
{{--                            <div class="overlay-text">--}}
{{--                                <h3 class="font-family-3">Regulation for logo use and mark</h3>--}}
{{--                            </div>--}}
                            <h2><span>RULES AND REGULATIONS FOR USE OF Certification Mark</span></h2>
                             The certificates issued by TUV LIMITED remain the property of TUV LIMITED and must be returned when requested. <br/>
                            The certified client is authorized to use the certificate mark or its logo in advertising matter as per instruction given by TUV LIMITED at the time of issuing the certificate.<br/>
                            Use the appropriate layout according to your company’s certification(s), like in the following examples:<br/>
<span class="text-center" style="display: block;margin: 40px;">
    
               <img src="{{url('frontendDesing')}}/assets/images/logo.png?ver=1.1" alt="TUV limited" class="logo">
<br/>
    ISO 9001:2015<br/>
No.: 0000000

</span>
                            

                            Client, while using its certification, shall ensure that it,
                            <br/> (a)	Conforms to requirements of TUV LIMITED when referring to its certification status in communication media such as Internet, brochures or advertising or other documents.
                            <br/> (b)	Does not make or permit any misleading statement regarding its certification,
                            <br/> (c)	Does not use or permit the use of the certification document or any part thereof in a misleading manner,
                            <br/> (d)	Upon suspension or withdrawal of its certification, discontinues its use of all advertising matter that contains a reference to certification, as directed by TUV LIMITED
                            <br/> (e)	Amends all advertising matter when the scope of certification has been reduced,
                            <br/> (f)	Shall not use the certification information in a manner to imply that the product or service is certified. The certification mark or logo shall not be used on a laboratory test reports, calibration and inspection certificates and not applied to the product or product packaging as this could be interpreted as denoting product conformity.
                            <br/> (g)	Does not imply that certification applies to activities that are outside the scope of its certification,
                            <br/> (h)	Shall not use the certification in such a manner that would bring TUV LIMITED and /or the certification system into disrepute and lose public trust
                            <br/> (i)	Logos shall also not to be applied on visiting cards
                            <br/> (j)	Use of Accreditation Body (AB) logo will be in compliance with AB and IAF Logo regulations
                            <br/> If the certified client fails to comply with these regulations or uses the logos in any misleading manner, TUV LIMITED reserves the right to withdraw or cancel its certificate upon which action, the certified client shall immediately cease to use the logos and withdraw the existing stock of its stationery and other promotional brochures etc. bearing the logos, from further use.
                            <br/> Such action could include requests for correction and corrective action, suspension, withdrawal of certification, publication of the transgression and, if necessary, legal action.
                            <br/> k.  Communicating this policy to our staff, customers and interested parties.

                            <br/>Ahmed Sultan<br/>
                            General Manager Date: 01.05.2024<br/><br/> <br/>
                            <a class="btn main-btn text-nowrap" href="{{url('')}}/regulation-for-logo-use-and-mark.pdf">Download Regulation for logo use and mark</a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
