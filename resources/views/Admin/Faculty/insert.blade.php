@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row" ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background: #042a92;color:#fff;padding:15px;">
                        <h1>Insert Teacher Profile</h1>
                    </div>
                    
                    <form action="{{ route('faculty.insert.data') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name">Teacher Name: </label>
                                <input name="name" id="name" type="text" class="form-control mb-3 mt-2" placeholder="---- Teacher Name ----">
                                 @error('name')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="designation">Teacher Designation: </label>
                                <input name="designation" id="designation" type="text" class="form-control mb-3 mt-2" placeholder="---- Teacher Designation ----">
                                @error('designation')
                                  <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>
                        {{-- IMAGE --}}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Upload Your Image</label>
                                <input name="image" id="image" type="file"  class="form-control mb-3">
                                 @error('image')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                            </div>
                        </div>

                        {{-- CONTACT INFO --}}
                        <div class="row my-5 bg-light">
                            <div class="col-md-4">
                                <label for="phone">Phone Number</label>
                                <input name="phone" id="phone" type="number" class="mb-3 form-control"  placeholder="--- phone number --- ">
                                @error('phone')
                                  <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="email">Email</label>
                                <input name="email" id="email" type="email" class="mb-3 form-control"  placeholder="--- email number --- ">
                                @error('email')
                                  <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="website">Website Link</label>
                                <input name="website" id="website" type="text" class="mb-3 form-control"  placeholder="--- website link --- ">
                            </div>
                        </div>

                        <label for="edu_info">About Teacher Educational Info.</label>
                        <textarea name="edu_info" id="editor" cols="30" rows="10"></textarea>
                        @error('edu_info')
                                  <strong class="text-danger">{{ $message }}</strong> <br>
                        @enderror

                        

                        {{-- bIOGRAPHY  --}}
                        <label for="bio">About Teacher Biography</label>
                        <textarea class="mb-3" name="bio" id="bio" cols="30" rows="10"></textarea> 

                        {{-- RESEARCH AREA --}}
                        <label for="research">Research area List</label>
                        <textarea class="mb-3" name="research" id="research" cols="30" rows="10"></textarea>

                        {{-- TEACHING SUBJECT LIST  --}}
                        <label for="teaching">Teaching Area List</label>
                        <textarea class="mb-3" name="teaching" id="teaching" cols="30" rows="10"></textarea>

                    </div>
                    <button class="btn btn-primary w-100">submit</button>
                   </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@push('ckeditor')
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#bio' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#research' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '#teaching' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endpush