@extends('frontend.layouts.index')

@section('content')

    {{-- Page Header with Breadcrumb --}}
    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('frontendDesing/assets/images/shapes/combined-circle-shape-2.png') }}" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>{{ $accreditation->name }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('accreditations') }}">Accreditations</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $accreditation->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>

    {{-- Main Accreditation Content --}}
    <div class="blog-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 pb-30">
                    <div class="blog-details-item desk-pad-left-20">
                        <article class="blog-details-box mb-30">

                            {{-- Image --}}
                            <div class="blog-post-image">
                                <img src="{{ asset('storage/' . $accreditation->image) }}" alt="{{ $accreditation->name }}">
                                <div class="blog-post-category">{{ $accreditation->name }}</div>
                            </div>

                            {{-- Description --}}
                            <div class="blog-post-details">
                                {!! $accreditation->description !!}
                            </div>

                            {{-- Optional: Social Share or Tags --}}
                            <div class="blog-action mt-4">
                                {{-- Optional future tag feature --}}
                                {{-- 
                                @if (!empty($tags) && count($tags))
                                    <p class="blog-action-tag"><i class="flaticon-tag"></i>
                                        @foreach($tags as $tag)
                                            <a href="{{ url('accreditations/tag/' . $tag->id) }}">{{ $tag->title_en }}</a>{{ !$loop->last ? ',' : '' }}
                                        @endforeach
                                    </p>
                                @endif 
                                --}}
                                <div class="blog-share">
                                    <p>Share Post:</p>
                                    <ul class="social-list">
                                        <li><a href="#"><img src="{{ asset('frontendDesing/assets/images/facebook.png') }}" alt="facebook"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontendDesing/assets/images/twitter.png') }}" alt="twitter"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontendDesing/assets/images/linkedin.png') }}" alt="linkedin"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontendDesing/assets/images/instagram.png') }}" alt="instagram"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontendDesing/assets/images/youtube.png') }}" alt="youtube"></a></li>
                                        <li><a href="#"><img src="{{ asset('frontendDesing/assets/images/skype.png') }}" alt="skype"></a></li>
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
