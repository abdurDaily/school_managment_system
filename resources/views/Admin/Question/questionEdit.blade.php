@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background: #2c09c9; color:#fff;padding:15px 10px">
                        <h1>Update Question</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method('put')
                            <label for="semester">Select a Semester</label>
                            <select name="semester" id="semester" class="form-control mb-3">
                                <option value="" selected disabled>Select a Semester</option>
                                @foreach ($semester as $semester)
                                    <option value="{{ $semester->id }} {{ $semester->id == $subject->semester_id ? 'selected' : '' }}">{{ $semester->semester }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('semester'))
                              <span class="text-danger">{{ $errors->first('semester') }}</span> <br>   
                            @endif



                            <label for="subjects">Select a Subject</label>
                            <select name="subjects" id="subjects" class="form-control">
                                <option selected disabled>Select a Subject</option>
                            </select>
                            @if ($errors->has('subjects'))
                              <span class="text-danger">{{ $errors->first('subjects') }}</span> <br>   
                            @endif


                            
                            <label for="sessions">Write Sessions Name & Year --(Autumn-2022)--</label>
                            <input name="sessions" id="sessions" type="text" class="form-control my-3" placeholder="--(Autumn-2022)--">
                            @if ($errors->has('sessions'))
                                <span class="text-danger">{{ $errors->first('sessions') }}</span> <br>   
                            @endif


                            <label for="pdf_file" class="mt-5">Insert a previous year question.(PDF) </label>
                            <input type="file" name="pdf_file" class="form-control mt-3" id="pdf_file">
                            @if ($errors->has('pdf_file'))
                                <span class="text-danger">{{ $errors->first('pdf_file') }}</span> <br>   
                            @endif
                            <button class="btn btn-primary w-100 mt-3">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('ajax')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
            $('#semester').on('change', function(){
                // alert('ok?')

                let semesterId = $(this).val()
                //console.log($semesterId)
                $.ajax({
                    url: `{{ route('select.subject') }}`,
                    method: 'GET',
                    data:{
                       id:semesterId
                    },
                    success: function(res){
                      let subject =JSON.parse(res)
                      let options = [];
                    //   console.log(subject)

                    subject.forEach(subjectResult => {
                        console.table(subjectResult)
                        let option = `<option value="${subjectResult.id}">${subjectResult.subject_name}</option>`
                        options.push(option)
                    });
                    $('#subjects').html(options)
                    },

                });
            })
        </script>
    @endpush
@endsection
