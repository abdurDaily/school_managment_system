@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"style="background: #041d61;color:#fff;padding:15px 20px;">
                        <h1>Previous Year Question's List </h1>
                        {{-- * SUCCESS MESSAGE * --}}
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
                                <th>Semester</th>
                                <th>Subject</th>
                                <th>Action</th>
                                <th>Created_at</th>
                            </tr>

                            @forelse ($detailsInfo as $key => $data)
                                <tr>
                                    <td>{{ ++$key; }}</td>
                                    <td>{{ $data->subject->subject_name }}</td>
                                    <td>

                                    {{-- ** BOOTSTRAP ACCORDION FOR PDF ** --}}
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            
                                           
                                                <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $data->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                  {{ $data->sessions }}
                                                    </button>
                                                </h2>
                                                {{-- @foreach ($data->detailsInfo as $detail)  --}}
                                                <div id="flush-collapse{{ $data->id }}" style="background: #f2e9e9; padding:5px;" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <a target="_blank" href="{!! asset('storage/Questions/'.$data->image) !!}"> <strong>Download</strong> <span class="text-danger">{{ $data->sessions }}</span> <strong>PDF</strong> </a>
                                                    </div>
                                                </div>
                                                {{-- @endforeach --}}
                                                </div>
   
                                          </div>
                                    </td>
                                    <td>{{ $data->created_at->format('d M, Y') }} </td>
                                  <td>
                                    <div class="btn-group">
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </div>
                                  </td>
                                </tr>
                            @empty
                                <h1>no record found !</h1>
                            @endforelse

                        </table>




                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection


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