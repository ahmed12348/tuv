@extends('system.layouts.index')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Edit Verification</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="{{ route('verifications.index') }}" class="text-muted">All Verifications</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="text-muted">Edit Verification</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <form id="UpdateForm" method="POST" enctype="multipart/form-data" data-url="{{ route('verifications.update', $verification->id) }}">
                @csrf
                @method('PUT')
                <div class="card card-custom">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Certification Name *</label>
                            <input type="text" name="certification_name" class="form-control" value="{{ $verification->certification_name }}" required minlength="8" maxlength="100">
                        </div>

                        <div class="form-group">
                            <label>Certification Number *</label>
                            <input type="text" name="certification_number" class="form-control" value="{{ $verification->certification_number }}" required minlength="14" maxlength="15">
                        </div>

                        <div class="form-group">
                            <label>Organization Name *</label>
                            <input type="text" name="organization_name" class="form-control" value="{{ $verification->organization_name }}" required minlength="8" maxlength="100">
                        </div>

                        <div class="form-group">
                            <label>Company Name *</label>
                            <input type="text" name="company_name" class="form-control" value="{{ $verification->company_name }}" required>
                        </div>

                        <div class="form-group">
                            <label>Company Address *</label>
                            <input type="text" name="company_address" class="form-control" value="{{ $verification->company_address }}" required>
                        </div>

                        <div class="form-group">
                            <label>Certification Type (e.g., ISO 9001:2015) *</label>
                            <input type="text" name="certification_type" class="form-control" value="{{ $verification->certification_type }}" required>
                        </div>

                        <div class="form-group">
                            <label>Certification Scope *</label>
                            <textarea name="certification_scope" rows="4" class="form-control" required>{{ $verification->certification_scope }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Stander (optional)</label>
                            <input type="number" name="stander" class="form-control" value="{{ $verification->stander }}">
                        </div>

                        <div class="form-group">
                            <label>Initial Date *</label>
                            <input type="date" name="initial_date" class="form-control" value="{{ $verification->initial_date }}" required>
                        </div>

                        <div class="form-group">
                            <label>Issue Date *</label>
                            <input type="date" name="issue_date" class="form-control" value="{{ $verification->issue_date }}" required>
                        </div>

                        <div class="form-group">
                            <label>End Date *</label>
                            <input type="date" name="end_date" class="form-control" value="{{ $verification->end_date }}" required>
                        </div>

                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('verifications.index') }}" class="btn btn-secondary">Cancel</a>
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
        $("#UpdateForm").submit(function (e) {
            e.preventDefault();
            var url = $(this).data('url');

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('button[type=submit]').addClass('spinner');
                },
                complete: function () {
                    $('button[type=submit]').removeClass('spinner');
                },
                success: function (response) {
                    toastr.success('Verification updated successfully');
                    window.location.href = "{{ route('verifications.index') }}";
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
