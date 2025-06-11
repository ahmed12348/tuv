@extends('frontend.layouts.index')
@section('content')
<header class="header-page">
    <div class="header-page-shape header-page-shape-top">
        <img src="{{url('/frontendDesing')}}/assets/images/shapes/circle-dot-shape.png" alt="shape">
    </div>
    <div class="container">
        <div class="header-page-content">
            <h1>Profile</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
            <div class="header-button-group">
                <div class="header-button-item">
                    <a href="{{url('profile/edit')}}" class="btn main-btn">EDIT ACCOUNT <i class="flaticon-edit"></i></a>
                </div>
                <div class="header-button-item">
                    <a href="{{url('/logout')}}" class="btn main-btn btn-thirdcolor">LOGOUT <i class="flaticon-sign-out"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="profile-section pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 pb-30">
                <div class="profile-content-item max-585 desk-pad-right-20 desk-ml-auto">
                    <div class="profile-desc">
                        <h3>{{auth()->user()->name}}</h3>
                     <p><a href="{{url('profile/edit')}}">Update biography</a></p>
                    </div>
                    <div class="profile-contact-list">
                        <h4>Contact:</h4>
                        <ul>
                            <li>Mobile: <a href="tel:001-800-388-80-90">{{auth()->user()->phone}}</a></li>

                            <li>Mail: <a href="#">{{auth()->user()->email}}</span></a></li>
                        </ul>
                    </div>
{{--                    <ul class="social-list">--}}
{{--                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/facebook.png" alt="social"></a></li>--}}
{{--                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/twitter.png" alt="social"></a></li>--}}
{{--                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/linkedin.png" alt="social"></a></li>--}}
{{--                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/instagram.png" alt="social"></a></li>--}}
{{--                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/youtube.png" alt="social"></a></li>--}}
{{--                        <li><a href="#"><img src="{{asset('frontendDesing')}}/assets/images/skype.png" alt="social"></a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
            <div class="col-12 col-lg-6 pb-30">
                <div class="profile-content-item text-center">
                    <div class="profile-content-image">

                        @if(is_null(auth()->user()->image))
                            <img src="{{url('/frontendDesing')}}/assets/images/male.jfif" alt="avatar">

                        @else
                            <img src="{{url('storage/'.auth()->user()->image)}}" alt="avatar">

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="profile-action-information">
            <div class="profile-information-header">
                <ul class="profile-information-tab">
                    <li class="active" data-profile-information-tab="1">Dashboard</li>

                </ul>
            </div>
            <div class="profile-information-details">
                <div class="profile-information-details-item active" data-profile-information-details="1">
                    <div class="profile-information-dashboard">
                        <ul class="profile-dashboard-tab">

                            <li class="active"  data-profile-dashboard-tab="2">certificate</li>
                            <li data-profile-dashboard-tab="3">Trainings</li>
                        </ul>
                        <div class="profile-dashboard-details">
{{--                            <div class="profile-dashboard-details-item active" data-profile-dashboard-details="1">--}}
{{--                                <div class="profile-table">--}}
{{--                                    <table>--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>Course</th>--}}
{{--                                            <th>Date</th>--}}
{{--                                            <th>Quiz</th>--}}
{{--                                            <th>Progress</th>--}}
{{--                                            <th>Interval</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>Database & SQL for Computer Science</td>--}}
{{--                                            <td>Dec 23, 2020</td>--}}
{{--                                            <td>SQL Test</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>0%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-success">--}}
{{--                                                        Completed--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>10:03</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Introduction to Photoshop for Beginners</td>--}}
{{--                                            <td>Dec 17, 2020</td>--}}
{{--                                            <td>Photoshop</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>12%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-danger">In--}}
{{--                                                        Progress--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>-----</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Academic Listening and Note-taking</td>--}}
{{--                                            <td>Dec 12, 2020</td>--}}
{{--                                            <td>HTML, CSS</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>50%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-danger">In--}}
{{--                                                        Progress--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>12:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Leadership Learning from Jexi</td>--}}
{{--                                            <td>Dec 10, 2020</td>--}}
{{--                                            <td>Marketing</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>100%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-success">--}}
{{--                                                        Completed--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>1:00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Introduction to Adobe XD for Beginners</td>--}}
{{--                                            <td>Dec 5, 2020</td>--}}
{{--                                            <td>Photoshop</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>45%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-danger">In--}}
{{--                                                        Progress--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>-----</td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="profile-dashboard-details-item active" data-profile-dashboard-details="2">
                                <div class="profile-table">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Certificate Name</th>
                                            <th>Symbol</th>
                                            <th>Iso</th>
                                            <th>image</th>
                                            <th>status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                      @foreach($user['certifications'] as $certificate)
                                        <tr>
                                            <td>{{$certificate->title}}</td>
                                            <td>{{$certificate->symbol}}</td>
                                            <td>{{$certificate->iso}}</td>
                                            <td><img src="{{asset('storage/'.$certificate->image)}}" style="width:150px;height: 150px"></td>
                                            @if($certificate->pivot->status==1)
                                            <td> <a href="{{url('user/show/certificate/pdf/'.$certificate->pivot->id)}}">Complete</a></td>
                                            @else
                                                <td>Pending</td>
                                            @endif
                                        </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="profile-dashboard-details-item" data-profile-dashboard-details="3">
                                <div class="profile-table">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Trainer Name</th>
                                            <th>Trainer Role</th>
                                            <th>Training Title</th>

                                            <th>Iso</th>
                                            <th>Image</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user['trainings'] as $training)
                                        <tr>
                                            <td>{{$training['trainer']['name_en']}}</td>
                                            <td>{{$training['trainer']['role_en']}}</td>
                                            <td>{{$training->title_en}}</td>

                                            <td>{{ $training->iso }}</td>
                                            <td><img src="{{asset('storage/'.$training->image)}}" style="width:50px;height: 50px"></td>

                                        </tr>
                                      @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
{{--                            <div class="profile-dashboard-details-item" data-profile-dashboard-details="4">--}}
{{--                                <div class="profile-table">--}}
{{--                                    <table>--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th>Course</th>--}}
{{--                                            <th>Date</th>--}}
{{--                                            <th>Quiz</th>--}}
{{--                                            <th>Progress</th>--}}
{{--                                            <th>Interval</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>Database & SQL for Computer Science</td>--}}
{{--                                            <td>Dec 23, 2020</td>--}}
{{--                                            <td>SQL Test</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>100%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-focus">--}}
{{--                                                        Completed--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>10:03</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Leadership Learning from Jexi</td>--}}
{{--                                            <td>Dec 10, 2020</td>--}}
{{--                                            <td>Marketing</td>--}}
{{--                                            <td>--}}
{{--                                                <div class="profile-table-progress">--}}
{{--                                                    <span>100%</span>--}}
{{--                                                    <div class="profile-progress-badge profile-progress-badge-focus">--}}
{{--                                                        Completed--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td>1:00</td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
{{--                <div class="profile-information-details-item" data-profile-information-details="2">--}}
{{--                    <div class="profile-table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Quiz</th>--}}
{{--                                <th>Date</th>--}}
{{--                                <th>Result</th>--}}
{{--                                <th>Passing Mark</th>--}}
{{--                                <th>Total</th>--}}
{{--                                <th>status</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>SQL Test</td>--}}
{{--                                <td>Dec 23, 2020</td>--}}
{{--                                <td>95</td>--}}
{{--                                <td>35</td>--}}
{{--                                <td>100</td>--}}
{{--                                <td>--}}
{{--                                    <div class="profile-table-progress">--}}
{{--                                        <div class="profile-progress-badge profile-progress-badge-success">Passed</div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Photoshop</td>--}}
{{--                                <td>Dec 17, 2020</td>--}}
{{--                                <td>25</td>--}}
{{--                                <td>35</td>--}}
{{--                                <td>100</td>--}}
{{--                                <td>--}}
{{--                                    <div class="profile-table-progress">--}}
{{--                                        <div class="profile-progress-badge profile-progress-badge-danger">Failed</div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>HTML, CSS</td>--}}
{{--                                <td>Dec 12, 2020</td>--}}
{{--                                <td>32</td>--}}
{{--                                <td>35</td>--}}
{{--                                <td>100</td>--}}
{{--                                <td>--}}
{{--                                    <div class="profile-table-progress">--}}
{{--                                        <div class="profile-progress-badge profile-progress-badge-danger">Failed</div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>Marketing</td>--}}
{{--                                <td>Dec 10, 2020</td>--}}
{{--                                <td>80</td>--}}
{{--                                <td>35</td>--}}
{{--                                <td>100</td>--}}
{{--                                <td>--}}
{{--                                    <div class="profile-table-progress">--}}
{{--                                        <div class="profile-progress-badge profile-progress-badge-success">Passed</div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="profile-information-details-item" data-profile-information-details="3">--}}
{{--                    <div class="profile-table">--}}
{{--                        <table>--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Product</th>--}}
{{--                                <th>ID</th>--}}
{{--                                <th>Order Date</th>--}}
{{--                                <th>Price</th>--}}
{{--                                <th>Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="product-table-info">--}}
{{--                                        <div class="product-table-thumb">--}}
{{--                                            <img src="{{asset('frontendDesing')}}/assets/images/products/product-1.jpg" alt="product">--}}
{{--                                        </div>--}}
{{--                                        <span>Marketing Book</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>JE-001-001</td>--}}
{{--                                <td>Dec 12, 2020</td>--}}
{{--                                <td>$50.00</td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{asset('frontendDesing')}}/single-product.html" class="btn main-btn">VIEW DETAILS</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div class="product-table-info">--}}
{{--                                        <div class="product-table-thumb">--}}
{{--                                            <img src="{{asset('frontendDesing')}}/assets/images/products/product-2.jpg" alt="product">--}}
{{--                                        </div>--}}
{{--                                        <span>Life Coaching</span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td>JE-001-002</td>--}}
{{--                                <td>Dec 10, 2020</td>--}}
{{--                                <td>$24.00</td>--}}
{{--                                <td>--}}
{{--                                    <a href="single-product.html" class="btn main-btn">VIEW DETAILS</a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
@endsection

