@extends('system.layouts.index') 
@section('content')

<style>
    a.sociall img { width: 25px; }
    .checkbox-inline.company_Card label { text-align: center; }
    .btn .badge {
        position: absolute;
        top: -1px;
        right: 0;
        color: #6993FF;
        border: 1px solid;
        padding: 7px 5px;
        border-radius: 50%;
    }
</style>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <h5 class="text-dark font-weight-bold my-1 mr-5">All Verifications</h5>
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item"><a href="#" class="text-muted">Verification</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-muted">All Verifications</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <input type="text" id="searchInput" class="form-control mr-3" placeholder="Search Verifications..." style="width: 250px;">
                <a href="{{ route('verifications.create') }}" class="btn btn-danger font-weight-bold py-3 px-6">
                    <i class="la la-plus"></i> Add Verification
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <div class="separator separator-dashed mt-8 mb-5"></div>
                            <div class="table-responsive">
                                <table id="verificationsTable" class="table table-bordered table-vertical-center text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Certification Name</th>
                                            <th>Certification Number</th>
                                            <th>Organization</th>
                                            <th>Stander</th>
                                            <th>Initial Date</th>
                                            <th>Issue Date</th>
                                            <th>End Date</th>
                                            <th>Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($verifications as $index => $verification)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $verification->certification_name }}</td>
                                                <td>{{ $verification->certification_number }}</td>
                                                <td>{{ $verification->organization_name }}</td>
                                                <td>{{ $verification->stander ?? '-' }}</td>
                                                <td>{{ $verification->initial_date }}</td>
                                                <td>{{ $verification->issue_date }}</td>
                                                <td>{{ $verification->end_date }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                                                            Control
                                                        </button>
                                                <div class="dropdown-menu">
                                                        <!-- PDF Download -->
                                                    <a class="dropdown-item" href="{{ route('verifications.pdf', $verification->id) }}" target="_blank">
                                                        Download PDF
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('verifications.edit', $verification->id) }}">Edit</a>

                                                    <!-- Trigger button -->
                                                    <button type="button" class="dropdown-item text-danger" data-toggle="modal" data-target="#deleteModal{{ $verification->id }}">
                                                        Delete
                                                    </button>
                                                </div>


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                {{ $verifications->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal{{ $verification->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $verification->id }}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="POST" action="{{ route('verifications.destroy', $verification->id) }}">
        @csrf
        @method('DELETE')
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this verification?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes, Delete</button>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('#verificationsTable tbody tr');

        searchInput.addEventListener('keyup', function () {
            const query = this.value.trim().toLowerCase();

            tableRows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const matches = Array.from(cells).some(td => td.textContent.toLowerCase().includes(query));
                row.style.display = matches ? '' : 'none';
            });
        });
    });
    
</script>
@endpush
