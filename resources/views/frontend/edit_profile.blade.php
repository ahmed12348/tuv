@extends('frontend.layouts.index')
@section('content')



    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{url('/frontendDesing')}}/assets/images/shapes/shape-17.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Edit Account</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="event-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pb-30 order-lg-2">
                    <div class="summery-details-item">
                        <div class="summery-box">
                            <div class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-calendar"></i>Name</div>
                                        <div class="summery-option">{{auth()->user()->name}}</div>
                                    </div>

                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-phone-call"></i>Phone</div>
                                        <div class="summery-option"><a href="tel:001-800-388-80-90">{{auth()->user()->phone}}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label"><i class="flaticon-envelope"></i>Email</div>
                                        <div class="summery-option"><a href="#">{{auth()->user()->email}}</span></a></div>
                                    </div>

                                </div>
                                <div class="summery-buttons">
                                    <a href="{{url('/logout')}}" class="btn main-btn">SIGN OUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <div class="summery-info-details">
                            <div class="account-info">
                                <form id="EditProfile" enctype="multipart/form-data">
                                    @csrf
                                    <div class="account-setting-item account-setting-avatar">
                                        <div class="sub-section-title">
                                            <h3 class="sub-section-title-heading">Avatar</h3>
                                        </div>
                                        <div class="account-avatar-info">
                                            <div class="account-avatar-thumb">
                                                @if(is_null(auth()->user()->image))
                                                    <img src="{{url('/frontendDesing')}}/assets/images/male.jfif" alt="avatar">

                                                @else
                                                    <img src="{{url('storage/'.auth()->user()->image)}}" alt="avatar">

                                                @endif


                                            </div>
                                            <ul class="account-avatar-action">
                                                <li>
                                                    <style>
                                                        input[type="file"] {
                                                            display: none;
                                                        }

                                                    </style>

                                                    <label for="file-upload" class="custom-file-upload btn main-btn btn-small">
                                                        Upload
                                                    </label>
                                                    <input id="file-upload" type="file" name="image"/>


                                                </li>

                                                <li><button class="btn main-btn btn-secondcolor btn-small">Remove</button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="account-setting-item">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                        </div>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{auth()->user()->name}}" required placeholder="First Name*">
                                                    </div>
                                                </div>
                                            </div>
{{--                                            <div class="col-sm-12 col-md-6 col-lg-6">--}}
{{--                                                <div class="form-group mb-20">--}}
{{--                                                    <div class="input-group">--}}
{{--                                                        <div class="input-group-prepend">--}}
{{--                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>--}}
{{--                                                        </div>--}}
{{--                                                        <input type="text" name="last_name" id="last_name" class="form-control" {{auth()->user()->name}} required placeholder="Last Name*">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                                        </div>
                                                        <input type="text" name="email" id="email" value="{{auth()->user()->email}}" class="form-control" required placeholder="Email*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-phone-call"></i></span>
                                                        </div>
                                                        <input type="text" name="phone" id="phone" value="{{auth()->user()->phone}}" class="form-control" required placeholder="Phone*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-setting-item account-setting-avatar">
                                        <div class="sub-section-title">
                                            <h3 class="sub-section-title-heading">Change Password</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-password"></i></span>
                                                        </div>
                                                        <input type="password" name="cur_password" id="cur_password" class="form-control"  placeholder="Current Password*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-password"></i></span>
                                                        </div>
                                                        <input id="password" type="password" class="form-control" name="new_password"  autocomplete="new-password" placeholder="New Password*">

{{--                                                        <input type="password" name="new_password" id="new_password"   autocomplete="new-password"  class="form-control" placeholder="New Password*" />--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-password"></i></span>
                                                        </div>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Confirm Password*">

                                                        {{--                                                        <input type="password" name="confirm_password" id="confirm_password"  class="form-control"  autocomplete="new-password" placeholder="Confirm New Password*" />--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-setting-item account-setting-button">
                                        <button type="submit" id="btnSubmit" class="btn main-btn btn-small">SAVE CHANGES</button>
                                        <button class="btn main-btn btn-secondcolor btn-small">CANCEL</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('js')




    <script>
        $(document).ready(function () {
            $("#EditProfile").submit(function (m) {
                $.ajax({
                    type: "POST",
                    url: '{{route('edit.profile')}}',
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
                            toastr.success('Updated User Info Successfully.');
                            location.reload();

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
