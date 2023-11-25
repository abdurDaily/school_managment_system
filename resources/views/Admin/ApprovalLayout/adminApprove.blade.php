@extends('layouts.app')
@section('general-report')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-5">
                    <form action="{{ route('approive.form') }}" method="POST">
                    @csrf
                   
                    <table class="table table-responsive table-striped table-bordered table-hover">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                               <strong>{{ $message }}</strong>
                            </div>
                        @endif 
                        <thead class="thead-dark">
                            <tr>
                                <th>SN</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @forelse ($allUsers as $key=> $user)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="approve_id[]" value="{{ $user->id }}" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                  </div>
                            </td>
                        </tr>
                        @empty
                        <div class="emty-msg py-5 bg-danger text-light">
                            <h1 class="text-center">No Requeest Found</h1>
                        </div>
                       @endforelse
                    </table>
                    <button class="btn btn-primary w-100 form-control my-3">submit</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection