@extends('layouts.app')
@section('general-report')
    <div class="container h-100 my-5">
        <form action="{{ route('club.insert') }}" method="POST" enctype="multipart/form-data">
            <div class="row">
              @csrf
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <input name="image_upload" type="file" class="form-control mb-2 profile_input" id="image_upload" hidden>
                    <label for="image_upload">
                        <img class="img-fluid profile_img" src="https://thumbs.dreamstime.com/b/person-gray-photo-placeholder-man-shirt-white-background-person-gray-photo-placeholder-man-132818487.jpg" alt="">
                        @if ($errors->has('image_upload'))
                           <span class="text-danger" style="font-weight: bold;">{{ $errors->first('image_upload') }}</span>
                        @endif 
                    </label> 
                </div>


                <div class="col-lg-8">
                    <label for="name">New Club Name</label> <br>
                    <input type="text" id="name" class="form-control mb-3" name="name" placeholder="enter a new club name">
                    @if ($errors->has('name'))
                      <span class="text-danger" style="font-weight: bold;">{{ $errors->first('name') }}</span>
                    @endif 
                    <br>
                    
                    <label for="presedent_name">Preseden Name</label>
                    <input type="text" id="presedent_name" class="form-control mb-3" name="presedent_name" placeholder="enter club presedent name">
                    @error('presedent_name')
                        <span class="text-danger" style="font-weight: bold;">{{ $message }}</span>
                    @enderror
                    <br>
                    
                    <label for="designation">Designation</label>
                    <input type="text" id="designation" class="form-control mb-3" name="designation" placeholder="enter a designation">
                    @error('designation')
                        <span class="text-danger" style="font-weight: bold;">{{ $message }}</span>
                    @enderror
                    <br>    

                    
                    <label for="fb_profile">Fb Profile</label>
                    <input type="text" id="fb_profile" class="form-control mb-3" name="fb_profile" placeholder="enter a fb_profile">
                    @error('fb_profile')
                        <span class="text-danger" style="font-weight: bold;">{{ $message }}</span>
                    @enderror
                    <br>

                    
                    <label for="website">Website Link</label>
                    <input type="text" id="website" class="form-control mb-3" name="website" placeholder="enter your website link">


                </div>

                <button class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('niceSelect2')

    <script>
        let input = document.querySelector('.profile_input')
        let img = document.querySelector('.profile_img');

        input.addEventListener('change', (e) => {
            img.src = URL.createObjectURL(e.target.files[0]) 
        })

    </script>
@endpush