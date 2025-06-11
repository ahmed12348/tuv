@extends('system.layouts.index')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Add Accreditation</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ route('accreditations.index') }}" class="text-muted">All Accreditations</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="text-muted">Add Accreditation</span>
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
                <div class="card card-custom">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Title Ar *</label>
                                <input type="text" name="title_ar" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Title En *</label>
                                <input type="text" name="title_en" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Description Ar *</label>
                                <textarea name="description_ar" class="form-control summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Description En *</label>
                                <textarea name="description_en" class="form-control summernote"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-9">
                                <label>Icon *</label>
                                <input type="text" name="icon" class="form-control" placeholder="e.g., flaticon-check" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-2 text-center">
                                <label>Upload Image *</label>
                                <input type="file" name="image" accept="image/*" required />
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('accreditations.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#CreateForm').submit(function (e) {
            e.preventDefault();

            $('.summernote').each(function () {
                $(this).val($(this).summernote('code'));
            });

            $.ajax({
                type: 'POST',
                url: '{{ route('accreditations.store') }}',
                data: new FormData(this),
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#btnSubmit').addClass('spinner');
                },
                complete: function () {
                    $('#btnSubmit').removeClass('spinner');
                },
                success: function (response) {
                    toastr.success('Accreditation created successfully');
                    window.location.href = "{{ route('accreditations.index') }}";
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        $.each(xhr.responseJSON.errors, function (key, value) {
                            toastr.error(value);
                        });
                    }
                }
            });
        });
    });
</script>
@endpush
