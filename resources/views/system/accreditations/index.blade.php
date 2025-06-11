@extends('system.layouts.index')
@section('content')
    <style>
        a.sociall img {
            width: 25px;
        }

        .checkbox-inline.company_Card label {
            display: inline-block;
            text-align: center;
        }

        .checkbox-inline .checkbox span {
            margin: auto;
        }

        .btn .badge {
            position: absolute;
            top: -1px;
            right: 0;
            color: #6993FF;
            border: 1px solid;
            padding: 7px 5px;
            line-height: 0;
            border-radius: 50%;
        }
        
    </style>

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

                <!--begin::Info (Breadcrumb & Title)-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                                All Accreditations
                            </h5>
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">Accreditations</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">All Accreditations</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end::Info-->
            
                <!--begin::Toolbar (Search input added here)-->
                <div class="d-flex align-items-center">
                    <!-- Search Input -->
                    <input type="text" id="searchInput" class="form-control mr-3" placeholder="Search Accreditations..." style="width: 250px;">
                    
                    <!-- Add Button -->
                 
                <a href="{{ route('accreditations.create') }}" class="btn btn-danger font-weight-bold py-3 px-6">
                    <i class="la la-plus"></i> Add Accreditations
                </a>
                </div>
                <!--end::Toolbar-->
            
            </div>
            
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Dashboard-->

                <div class="row">

                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom">

                            <div class="card-body">

                    


                                <div class="separator separator-dashed mt-8 mb-5"></div>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                   
                                        <div class="table-responsive">
                                            <table id="accreditationsTable" class="table table-bordered table-vertical-center text-center">
                                           
                                                <thead>
                                                <tr>
                                                    <th class=" dt-center">No.</th>
                                                    <th>Accreditations Title</th>
                                                    {{-- <th>Certificate ISO</th>
                                                    <th>Certificate Symbol</th> --}}
                                                    <th class=" dt-center">Description</th>
                                                    <th class=" dt-center">Logo</th>
                                                    <th class=" dt-center">Control</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table" id="accreditationsTable">
                                                    @php use Illuminate\Support\Str; @endphp
                                                @foreach($accreditations as $index => $accreditation)
                                                    <tr id="t-12">
                                                        <td class=" dt-center">{{++$index}}</td>
                                                       
                                                        <td class="dt-center">{{ Str::limit($accreditation->title_en, 15, '...') }}</td>
                                                        <td class="dt-center">{!! Str::limit($accreditation->description_en, 15, '...') !!}</td>
                                                        {{-- <td class=" dt-center">{{$certificaion->iso}}</td>
                                                        <td class=" dt-center">{{$certificaion->symbol}}</td> --}}
                                                        <td class=" dt-center"><img src="{{asset('storage/'.$accreditation->image)}}"  style="width: 50px"></td>
                                                        <td class=" dt-center">
                                                            <div class="dropdown">
                                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Control
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        
                                        
                                        
                                                                    {{--                        <a class="dropdown-item"--}}
                                                                    {{--                           href="#">Edit</a>--}}
                                        
                                                                
                                                                    <a class="dropdown-item"
                                                                        href="{{route('accreditations.edit',$accreditation->id)}}">Edit</a>
                                                                    <a class="dropdown-item del_btn" id="del_btn" data-url="{{route('accreditations.destroy',$accreditation->id)}}" href="#" data-id="12">Delete</a>
                                        
                                        
                                                                </div>
                                                            </div>
                                                        </td>
                                        
                                        
                                        
                                                    </tr>
                                        
                                        
                                                @endforeach
                                        
                                                </tbody>
                                            </table>
                                        
                                            {{$accreditations->links()}}
                                        </div>
                                        
                                    </div>


                                </div>


                            </div>
                        </div>


                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->


        </div>
        <!--end::Container-->
        <!-- Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="CreatForm">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Accreditation Name *</label>
                                            <input type="text" name="title" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Description *</label>
                                            <textarea name="description" class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                         <div class="col-lg-12">
                                            <label>Logo *</label>
                                            <div class="image-input image-input-outline" id="kt_image_5">
                                                <div class="image-input-wrapper"
                                                     style="background-size: contain;
                                                                 background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                                </div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                       data-action="change" data-toggle="tooltip" title=""
                                                       data-original-title="Personal Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image"
                                                           accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                      data-action="cancel" data-toggle="tooltip"
                                                      title="Cancel avatar">
		<i class="ki ki-bold-close icon-xs text-muted"></i>
	</span>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="submit" class="btnSubmit btn btn-primary mr-2 spinner-white spinner-right">Save changes</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>



        <div class="modal fade" id="UpdatePartners" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <form class="UpdateForm"  data-url="">
                    @csrf
                    {{method_field('PUT')}}


                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <input type="hidden" name="id" id="id_s">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close close-model" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Accreditation Name *</label>
                                            <input type="text" name="title" class="form-control" id="certificate_title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Iso *</label>
                                            <input type="text" name="iso" class="form-control" id="certificate_iso">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Certificate Symbol *</label>
                                            <input type="text" name="symbol" class="form-control" id="certificate_symbol">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <div class="col-lg-12 col-md-9 col-sm-12">
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>Accreditation Description *</label>
                                            <textarea name="description" class="form-control" id="certificate_description" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-lg-6 col-md-9 col-sm-12">



                                    <div class="form-group row">

                                        <div class="col-lg-12">
                                            <label>Logo*</label>
                                            <div class="image-input image-input-outline" id="kt_image_5">
                                                <div class="image-input-wrapper"
                                                     style="background-size: contain;
                                                                 background-position: center; background-image: url('/SystemDesign/300_0.jpg')">
                                                </div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                       data-action="change" data-toggle="tooltip" title=""
                                                       data-original-title="Personal Image">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="image"
                                                           accept=".png, .jpg, .jpeg" multiple/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                      data-action="cancel" data-toggle="tooltip"
                                                      title="Cancel avatar">
		                                              <i class="ki ki-bold-close icon-xs text-muted"></i>
	                                              </span>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="" id="certificate_img" style="width:150px;height: 100px">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-light-primary font-weight-bold close-model" data-dismiss="modal">Close</button>
                            <button type="submit" id="btnSubmit" class="btn btn-primary mr-2 spinner-white spinner-right">Save changes</button>
                        </div>
                    </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



@endsection
@push('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".CreatForm").submit(function (m) {
                $.ajax({
                    type: "POST",
                    
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('.btnSubmit').addClass('spinner');
                    },
                    complete: function () {
                        $('.btnSubmit').removeClass('spinner');
                    },
                    success: function (response) {
                        if (response.errors) {
                            jQuery.each(response.errors, function (key, value) {
                                toastr.error(value);
                            });
                        } else {
                            toastr.success('Saved.');
                            location.reload();
                        }
                    },
                });
                m.preventDefault(); // avoid to execute the actual submit of the form momoomomomo.
            });
        });
    </script>
    <script>

        $(document).ready(function () {
            $(".del_btn").on('click', function (m) {
                var url =$(this).data('url');
                //alert(url);

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: "DELETE",
                            url: url,
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
                                    toastr.success('Delete.');
                                    location.reload();
                                }
                            },
                        });

                    }
                });
                m.preventDefault();
            });
        })
    </script>


    <script>

        $(document).ready(function () {
            $(".edit_btn").on('click', function (m) {
                var url =$(this).attr('href');

                $('#UpdatePartners').addClass('show');
                $('#UpdatePartners').css('display','block');

                        $.ajax({
                            type: "GET",
                            url: url,
                            processData: false,
                            contentType: false,

                            complete: function () {

                            },
                            success: function (response) {

                                $('#id_s').val(response.accreditation.id);
                                $('#certificate_title').val(response.accreditation.title);
                                $('#certificate_iso').val(response.accreditation.iso);
                                $('#certificate_symbol').val(response.accreditation.symbol);
                                $('#certificate_img').attr('src','https://tuv.com.sa/storage/'+response.accreditation.image);
                                $('#certificate_description').val(response.accreditation.description);




                            },
                        });
                m.preventDefault();
                });


        })
    </script>

    <script>

        $(document).ready(function () {
            $(".close-model").on('click', function (m) {
                $('#UpdatePartners').removeClass('show');
                $('#UpdatePartners').css('display','none');


            });


        })
    </script>
    <script>
        $(document).ready(function () {

            $(".UpdateForm").submit(function (m) {
                var id=$('#id_s').val();

                $.ajax({
                    type: "POST",
                    url: "{{url('/')}}/admin/accreditations/"+id,
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
                            toastr.success('Updated');
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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('#accreditationsTable tbody tr'); // Your table rows
    
        searchInput.addEventListener('keyup', function() {
            
            const query = this.value.trim().toLowerCase();
    
            tableRows.forEach(row => {
                const title = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
    
                if (title.includes(query) || description.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
    </script>
    

@endpush
