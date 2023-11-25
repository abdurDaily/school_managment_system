@extends('layouts.app')
@section('general-report')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-3 bg-info">
                    <h4>All Club List</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover strip">
                        <tr>
                            <td>SN</td>
                            <td>Club Name</td>
                            <td>President</td>
                            <td>Logo</td>
                            <td>Fb Profile</td>
                            <td>Website</td>
                            <td>Created at</td>
                            <td>Action</td>
                        </tr>

                        @forelse ($clubs as $key => $data)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $data->club_name }}</td>
                                <td>{{ $data->presedent_name }}</td>
                                <td>
                                    <img style="width: 100px" src="{{ $data->image }}" alt="">
                                </td>
                                <td>{{ Str::substr($data->fb_profile, 0, 15) }}</td>
                                <td>{{ $data->website }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="{{ route('club.list.update',$data->id) }}">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('club.list.delete', $data->id) }}">Delete</a>
                                    </div>
                                </td>

                            </tr>
                        @empty
                            <h4>No Club Data Found !</h4>
                        @endforelse

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
