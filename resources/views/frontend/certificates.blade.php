@extends('frontend.layouts.index')
@section('content')



    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{asset('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>Certificates</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Certificates</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>



    <section class="course-section pt-100 pb-70">
        <div class="container">

            <div class="row">
                @foreach($certifications as $certificate)
                    <div class="col-12 col-md-6 col-lg-4 pb-30">
                        <div class="course-card course-card-offwhite">
                            <div class="course-card-thumb">
                                @auth
                                    {{-- <a href="#" class="JoinRequestCertificate" data-id="{{$certificate->id}}"
                                       data-bs-toggle="modal" data-bs-target="#exampleModal"><img
                                                src="{{asset('storage/'.$certificate->image)}}"
                                                alt="course"></a> --}}
                                                   <a href="{{ route('single_certification', ['id' => $certificate->id]) }}">
                                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="course">
                                    </a>
                                @endauth
                                @guest
                                    {{-- <a href="{{url('/login')}}"><img src="{{asset('storage/'.$certificate->image)}}" alt="course"></a> --}}
                                    <a href="{{ route('single_certification', ['id' => $certificate->id]) }}">
                                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="course">
                                    </a>
                                @endguest

                            </div>
                            {{-- <div class="course-card-content">

                                <h3>
                                    @auth
                                        <a href="#" class="JoinRequestCertificate" data-id="{{$certificate->id}}"
                                           data-bs-toggle="modal"
                                           data-bs-target="#exampleModal">{{$certificate->title}}</a>
                                    @endauth
                                    @guest
                                        <a href="{{url('/login')}}" data-id="{{$certificate->id}}"
                                          >{{$certificate->title}}</a>

                                    @endguest
                                </h3>
                            </div> --}}
                            <ul class="course-filter-list">
                                <li class="course-filter-focus">{{$certificate->iso}}</li>

                            </ul>
                        </div>
                    </div>
                @endforeach


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Certification Query</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="checkout-form">
                                    <form id="RequestCertificate">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                        class="flaticon-agenda"></i></span>
                                                        </div>
                                                        <input type="text" name="Certificate" value="" disabled
                                                               class="certificate_name form-control disabled" required>
                                                        <input type="hidden" name="certificate_id" value=""
                                                               class="certificate_id form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                        class="flaticon-envelope"></i></span>
                                                        </div>
                                                        <input type="text" name="email" class="form-control" required
                                                               placeholder="Email Address*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                            class="flaticon-phone-call"></i></span>
                                                        </div>
                                                        <input type="text" name="phone" class="form-control" required
                                                               placeholder="Phone Number*">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                        </div>
                                                        <input type="text" name="first_name" class="form-control"
                                                               required
                                                               placeholder="First Name*">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                        </div>
                                                        <input type="text" name="last_name" class="form-control"
                                                               required
                                                               placeholder="Last Name*">
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                        <div class="col-sm-12">--}}
                                            {{--                                            <div class="form-group mb-20">--}}
                                            {{--                                                <div class="input-group">--}}
                                            {{--                                                    <input type="text" name="company_name" class="form-control"--}}
                                            {{--                                                           placeholder="Company Name">--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}

                                            <div class="col-sm-12">
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                        class="flaticon-envelope"></i></span>
                                                        </div>
                                                        <textarea name="notes" class="form-control" rows="5"
                                                                  placeholder="Notes*"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" id="btnSubmit" class="btn btn-primary">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!--<nav aria-label="Page navigation example" class="page-pagination">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="flaticon-left-arrow-1"></i></a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="flaticon-right-arrow"></i></a></li>
                    </ul>
                </nav>-->
            </div>
        </div>
    </section>

@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $(document).on('click', '.JoinRequestCertificate', function (m) {
                var id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    url: '{{route('certificate')}}',
                    data: {'id': id},

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
                            $('.certificate_name').val(response.certification.title_en);
                            $('.certificate_id').val(response.certification.id);


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


    <script>
        $(document).ready(function () {
            $("#RequestCertificate").submit(function (m) {
                $.ajax({
                    type: "POST",
                    url: '{{route('join.request.certificate')}}',
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
                            toastr.success('Saved.');

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


@endpush
