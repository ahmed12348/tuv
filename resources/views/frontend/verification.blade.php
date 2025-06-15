@extends('frontend.layouts.index')

@section('content')

<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('frontendDesing/assets/images/shapes/combined-circle-shape-2.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="header-page-content text-center">
            <h1>Verify Certificate</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Verification</li>
                </ol>
            </nav>
        </div>
    </div>
</header>

<section class="pt-100 pb-70">
    <div class="container">

        {{-- Search Form --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="p-4 border rounded shadow-sm bg-light">
                    <form id="searchVerificationForm" class="d-flex justify-content-center align-items-center">
                        <input type="text" name="cert_number" id="cert_number"
                               class="form-control me-2"
                               placeholder="Enter Certification Number"
                               value="{{ $cert_number ?? '' }}" required>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Result Table --}}
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="resultArea" style="display: none;">
                    <h5 class="text-center mb-3">Verification Result:</h5>
                    <table class="table table-bordered text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Certification Name</th>
                                <th>Certification Number</th>
                                <th>Organization Name</th>
                                <th>Standard</th>
                                <th>Initial Date</th>
                                <th>Issue Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody id="resultBody"></tbody>
                    </table>
                </div>
                <div id="noResult" class="text-center text-danger fw-bold" style="display: none;">
                    No certification found.
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@push('js')
<script>
    $(document).ready(function () {
        $('#searchVerificationForm').on('submit', function (e) {
            e.preventDefault();
            let certNumber = $('#cert_number').val();

            $('#resultArea').hide();
            $('#noResult').hide();

            $.ajax({
                url: '{{ route("verifications.front.search") }}',
                method: 'GET',
                data: { cert_number: certNumber },
                success: function (response) {
                    if (response.verification) {
                        let v = response.verification;
                        $('#resultBody').html(`
                            <tr>
                                <td>${v.certification_name}</td>
                                <td>${v.certification_number}</td>
                                <td>${v.organization_name}</td>
                                <td>${v.stander}</td>
                                <td>${v.initial_date}</td>
                                <td>${v.issue_date}</td>
                                <td>${v.end_date}</td>
                            </tr>
                        `);
                        $('#resultArea').show();
                    } else {
                        $('#noResult').show();
                    }
                },
                error: function () {
                    alert('An error occurred. Please try again.');
                }
            });
        });

        // Trigger search if cert_number already filled (e.g., from barcode)
        if ($('#cert_number').val()) {
            $('#searchVerificationForm').submit();
        }
    });
</script>
@endpush
