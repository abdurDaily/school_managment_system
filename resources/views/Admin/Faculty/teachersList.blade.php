@extends('layouts.app')
@section('report-table')
  <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>All Teachers List</h1>
                </div>


                <div class="card-body table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>SN</th>
                            <th>NAME</th>
                            <th>DASIGNATION</th>
                            <th>IMAGE</th>
                            <th>PHONE</th>
                            <th>EMAIL</th>
                            <th>WEVSITE</th>
                            <th>EDUCATION</th>
                            <th>REASEARCH</th>
                            <th>T.SUBJECTS</th>
                            <th>ACTION</th>
                        </tr>


                        @forelse ($allTeachersData as $key => $data)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{!! $data->designation !!}</td>
                                <td>
                                    <img width="80px" src="{{  $data->image  }}" alt="Image">
                                </td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{!! $data->website == null ? '<span class="text-danger">no data inserted!</span>' : $data->website  !!}</td>
                                <td>{!! $data->edu_info !!}</td>
                                <td>{!! $data->research == null ? '<span class="text-danger">no data inserted!</span>' : $data->research !!}</td>
                                <td>{!! $data->teaching_sub == null ? '<span class="text-danger">no data inserted!</span>' : $data->teaching_sub !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('teacher.list.update', $data->id) }}" class="btn btn-primary btn-sm ">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm ">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </table>
                </div>


            </div>
        </div>
    </div>
  </div>
@endsection