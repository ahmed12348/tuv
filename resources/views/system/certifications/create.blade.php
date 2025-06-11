@extends('system.layouts.index')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Add Certification</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/certifications') }}" class="text-muted">All Certifications</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/certifications/create') }}" class="text-muted">Add Certification</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">
        <div class="container">

            <form id="CreateForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-custom">
                            <div class="card-body">

                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <label>Title Ar *</label>
                                        <input type="text" name="title_ar" class="form-control" placeholder="Certification title Arabic" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <label>Title En *</label>
                                        <input type="text" name="title_en" class="form-control" placeholder="Certification title English" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label>Description Ar *</label>
                                        <textarea name="description_ar" class="form-control summernote" id="description_ar" placeholder="Description Ar"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label>Description En *</label>
                                        <textarea name="description_en" class="form-control summernote" id="description_en" placeholder="Description En"></textarea>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <label>Icon *</label>
                                        <input type="text" name="icon" class="form-control" placeholder="Enter icon class (e.g., flaticon-check)" />
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-lg-2 text-center">
                                        <label>Upload Image *</label>
                                        <div class="image-input image-input-outline" id="kt_image_5">
                                            <div class="image-input-wrapper"
                                                 style="background-size: contain; background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                            </div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                   data-action="change" data-toggle="tooltip" title="Upload Image">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="image_remove"/>
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                  data-action="cancel" data-toggle="tooltip" title="Cancel Image">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" id="btnSubmit" class="btn btn-primary mr-2 spinner-white spinner-right">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

@stop

@push('js')

<script>
    $(document).ready(function () {
        $("#CreateForm").submit(function (e) {
            e.preventDefault();

            // 🔥 Fix: Sync Summernote content with textarea
            $('.summernote').each(function () {
                $(this).val($(this).summernote('code'));
            });

            $.ajax({
                type: "POST",
                url: '{{ route('certifications.store') }}',
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
                        $.each(response.errors, function (key, value) {
                            toastr.error(value);
                        });
                    } else {
                        toastr.success('Certification saved successfully');
                        window.location = "{{ route('certifications.index') }}";
                    }
                },
                error: function (reject) {
                    if (reject.status === 422) {
                        let response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, value) {
                            toastr.error(value);
                        });
                    }
                }
            });
        });
    });


</script>
@endpush
