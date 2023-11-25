@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background: #030a74; color:#fff; padding:15px;">
                        <h1>Admit Student</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admit.student.database') }}" method="POST">
                        @csrf 

                        <label for="std_name" class="mb-3">Insert Student Name</label>
                        <input id="std_name" name="std_name" type="text" class="form-control" placeholder="---- Student Name ----">
                        @error('std_name')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <label for="std_id" class="mt-3">Insert Student Name</label>
                        <input id="std_id" name="std_id" type="text" class="form-control" placeholder="---- Student ID ( T-191060 ) ----">
                        @error('std_id')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <label for="batch_no" class="mt-3">Select a Batch No</label>
                        <select name="batch_no" id="batch_no" class="form-control">
                            <option  value="" selected disabled>Select a batch</option>
                            @foreach ($batchNo as $data)
                                <option value="{{ $data->id }}">{{ $data->batch_no }}</option>
                            @endforeach
                        </select>

                     

                        @error('batch_no')
                           <strong class="text-danger">{{ $message }}</strong>
                        @enderror

                        <button class="btn btn-primary w-100 mt-3">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('niceSelect2CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('niceSelect2')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    
    $(document).ready(function() {
    $('#batch_no').select2();
    $('#subject_id').select2();
});

</script>
@endpush