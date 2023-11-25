@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-header" style="background: #330274;color:#fff;font-weight:bold;">
                        <h1>Insert Category Details</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('subcategory.data.insert') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label for="title">
                                Insert a Blog Title
                            </label>
                            <input name="title" id="title" type="text" class="form-control" placeholder="------  title  -----">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        <br>


                            <label for="image">
                                Insert an Image
                            </label>
                            <input name="image" id="image" type="file" class="form-control" placeholder="------  image  -----">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        <br>



                            <label for="category">Select a Parent Category</label>
                            <select required name="category" id="category" class="form-control mb-5">
                                @foreach ($blogCategory as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        <br><br>



                            <label for="blog_details">Details About Post (Part - 1)</label>
                            <textarea placeholder="--- Detail Part 1 --" class="mt-2 form-control" id="blog_details" name="blog_details" id="blog_details" cols="30" rows="10"></textarea>
                            @error('blog_details')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror


                            <label for="video" class="mt-3">Vidio Link</label>
                            <input name="video" id="video" type="text" class="form-control" placeholder="--- Youtube Link ---">

                            <button class="btn w-100 my-3" style="background: #330274;color:#fff;font-weight:bold;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
