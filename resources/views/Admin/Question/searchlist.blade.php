@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <div class="card">
                    <div class="card-header">Search Results</div>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                         <tr>
                            <th>SN</th>
                            <th>Semester</th>
                            <th>Subject Name</th>
                            <th>Created At</th>
                            <th>updated At</th>
                            <th>Action</th>
                         </tr>

                         @forelse ($searchResult as $key => $list )
                         <tr>
                            <td>{{ ++$key; }}</td>
                            <td>{{ $list->semester->semester }}</td>
                            <td>{{ $list->subject_name }}</td>
                            <td>{{ $list->created_at->format('d M, Y') }}</td>
                            <td>{{ $list->updated_at->format('d M, Y') }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('subject.edit',$list->id) }}" class="btn btn-danger btn-sm">Edit</a>
                                    <a href="" class="btn btn-primary btn-sm">Delete</a>
                                </div>
                            </td>
                         </tr>
                         @empty
                             <div class="empty bg-danger text-light p-5">
                                <h1>Nothing Found !</h1>
                             </div>
                         @endforelse


                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- SEARCHING --}}
@push('search')
<div class="search d-none d-sm-block">
    <form action="{{ route('search.subject') }}" method="GET" role="search">
        @csrf
        <input name="search" value="{{ Request::get('search') }}" type="search" class="search__input form-control border-transparent" placeholder="Search...">
        <i data-feather="search" class="search__icon dark-text-gray-300"></i> 
    </form>
</div>
@endpush