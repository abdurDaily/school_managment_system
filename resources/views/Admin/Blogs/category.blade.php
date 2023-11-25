@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-header" style="background: #330274;color:#fff;font-weight:bold;">
                        <h1>Insert Category For Blogs</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('category.data.insert') }}" method="POST">
                            @csrf

                            <label for="category">
                                Insert a Category
                            </label>
                            <input name="category" id="category" type="text" class="form-control mt-3" placeholder="------Category-----">
                            @error('category')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        


                            <button class="btn w-100 my-3" style="background: #330274;color:#fff;font-weight:bold;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection