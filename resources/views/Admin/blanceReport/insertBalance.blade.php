@extends('layouts.app')
@section('general-report')
    <div class="container my-5">
        <div class="row">
            <div class="col-7 mx-auto" >
                <div class="card">
                    <div class="card-body bg-success text-light py-5">
                        <h1>Insert Your Consumtion With Proper Avidance</h1>
                    </div>
                    <div class="row my-3">
                        <div class="col-6 mx-auto">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                               <strong>{{ $message }}</strong>
                            </div>
                            @endif 
                        </div>
                    </div>
                    <form action="{{ route('insert.cost') }}" method="POST">
                        @csrf
                        <div class="card p-5">
                            {{-- <div class="row">
                                <div class="col-lg-6">
                                    <label for="" class="font-weight-bold">Author Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="" class="font-weight-bold">Author Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div> --}}

                            {{--** TEXT AREA ** --}}
                            {{-- <label for="editor" class="font-weight-bold">Details</label>
                            <textarea name="details" id="editor" cols="30" rows="10"></textarea>
                            @if ($errors->has('details'))
                                <span class="text-danger" style="font-weight: bold;">{{ $errors->first('details') }}</span>
                            @endif --}}


                            {{--** TOTAL COST  **--}}
                            <label for="cost">Add Balance</label>

                            <input type="number" class="form-control mt-3" name="add_cost" placeholder="add amount">
                            {{-- @if ($errors->has('add_cost'))
                                <span class="text-danger" style="font-weight: bold;">{{ $errors->first('add_cost') }}</span>
                            @endif --}}

                            <label for="cost">your cost Balance</label>
                            <input type="number" class="form-control mt-3" name="cost" placeholder="your cost amount.">
                            {{-- @if ($errors->has('cost'))
                                <span class="text-danger" style="font-weight: bold;">{{ $errors->first('cost') }}</span>
                            @endif --}}
                            <button class="btn btn-primary w-100 mt-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- {{  QrCode::size(300)->generate(Request::url());  }} --}}
    </div>
@endsection

