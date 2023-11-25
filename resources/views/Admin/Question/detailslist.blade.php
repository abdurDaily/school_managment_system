@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                     </div>
                    @endif
                                    @if ($message = Session::get('error-column'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{ $message }}</strong> 
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="{{ asset('fonts_icon/circle-xmark-solid.svg') }}"  alt=""></button>
                                        </div>
                                    @endif

                    <div class="card-header" style="background: #041d61;color:#fff;padding:15px 20px;">
                        <h1>Previous Year Question's List </h1>

                        {{-- * SUCCESS MESSAGE * --}}
                        {{-- @if ($message = Session::get('success'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif --}}

                        @hasSection('success')
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>SN</th>
                                <th>Subject</th>
                                <th>Question's
                                @if ($message = Session::get('error'))

                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><img src="{{ asset('fonts_icon/circle-xmark-solid.svg') }}"  alt=""></button>
                                </div>
                                @endif

                                </th>
                                <th>Created_at</th>
                                <th>Action</th>
                            </tr>

                            @forelse ($details as $key => $data)
                                <tr>
                                    <td>{{ ++$key; }}</td>
                                    <td>{{ $data->subject_name }}</td>
                                    <td>

                                    {{-- ** BOOTSTRAP ACCORDION FOR PDF ** --}}
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            
                                           
                                                <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $data->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                  Previous Question's
                                                    </button>
                                                </h2>
                                                @forelse ($data->detailsInfo as $detail)
                                                <div id="flush-collapse{{ $data->id }}" style="background: #f2e9e9; padding:5px;" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        @if (isset($detail->sessions ))
                                                        <a target="_blank" href="{!! asset('storage/Questions/'.$detail->image) !!}"> <strong>Download</strong> <span class="text-danger">{{ $detail->sessions }}</span> <strong>PDF</strong>
                                                            <a class="btn btn-danger btn-sm" href="{{ route('question.update',$detail->id) }}"><span class="badge badge-light">Delete</span></a>
                                                        </a>

                                                        
                                                       
                                                        @endif
                                                    </div>
                                                </div> 
                                                @empty
                                                    <h1 class="text-danger mt-3">Not Upload Yeat!</h1>
                                                @endforelse
   
                                                </div>
   
                                          </div>
                                    </td>
                                    <td>{{ $data->created_at->format('d M, Y') }} </td>
                                  <td>
                                    <div class="btn-group">
                                        <a href="" id="dlt-btn"></a>
                                        <a class="dlt-btn btn btn-sm btn-danger" href="{{ route('delete.question.column',$data->id) }}">Delete</a>
                                    </div>
                                  </td>
                                </tr>
                            @empty
                                <h1>no record found !</h1>
                            @endforelse

                        </table>
                        <br>
                        {{ $details->links() }}
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection


{{--*** PAGINATION *** --}}

@push('pagination')
    <style>
        .pagination .page-item {
            margin: 0 3px;
        }
        .pagination span{
           background: rgb(30, 7, 230) !important;
           color: #fff !important;
        }
    </style>
@endpush

{{-- SEARCHING --}}
@push('search')
<div class="search d-none d-sm-block">
    <form action="{{ route('search.question') }}" method="GET" role="search">
        @csrf
        <input name="search" value="{{ Request::get('search') }}" type="search" class="search__input form-control border-transparent" placeholder="Search...">
        <i data-feather="search" class="search__icon dark-text-gray-300"></i> 
    </form>
</div>
@endpush



@push('niceSelect2CSS')
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.min.css
" rel="stylesheet">
@endpush
@push('sweetAleart2')
@include('sweetalert::alert')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.16/dist/sweetalert2.all.min.js
"></script>

<script>

    $('.dlt-btn').on('click',function(e){

        e.preventDefault();
        
        Swal.fire({
        title: 'Are you sure?',
        text: "all record relevent this subject will be deleted",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = $(this).attr('href')
        }
        })
    })
</script>
@endpush