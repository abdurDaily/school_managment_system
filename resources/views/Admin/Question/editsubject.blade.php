@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background: #1b0261; color: #ffff";>
                        <h1>Edit Subject</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('subject.update',$subjects->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="semester">Select a Semester</label>
                            <select name="semester" id="semester" class="form-control mb-5">
                                <option value="" selected disabled>Select a Semester</option>
                                @foreach ($semester as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $subjects->semester_id ? 'selected' : ''}}>{{ $data->semester }}</option>
                                @endforeach
                            </select>
                            @error('semester')
                                <span class="error"><strong class="text-danger mt-2">{{ $message }}</strong></span>
                            @enderror
                            <br>


                            <label for="subject_name">insert course name with couse code </label>
                            <input name="subject_name" value="{{ $subjects->subject_name }}" id="subject_name" type="text" class="form-control mb-3" placeholder="--c programming (ETE-1101)--">
                            @error('subject_name')
                                <span class="error"><strong class="text-danger mt-2">{{ $message }}</strong></span>
                            @enderror
                            <button class="btn btn-primary w-100">submit</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection