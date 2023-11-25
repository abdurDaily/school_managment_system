@extends('layouts.app')
@section('report-table')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header py-4" style="background: #1a047c; color:#fff;">
                        <h1>Attendance Search For PDF</h1>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('attendance.pdf.data') }}" method="GET">
                            @csrf 
        
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subject_id" class="mt-3">Select a Batch No</label>
                                    <select required name="subject_id" id="subject_id" class="form-control">
                                        <option  value="" selected disabled>Select a batch</option>
                                        @foreach ($subjectId as $subjectData)
                                            <option value="{{ $subjectData->id }}">{{ $subjectData->subject_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subject_id')
                                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
        
        
                                </div>
                                <div class="col-6">
                                    <label for="batch_id" class="mt-3">Select a Batch No</label>
                                    <select required name="batch_id" id="batch_id" class="form-control">
                                        <option  value="" selected disabled>Select a batch</option>
                                        @foreach ($batchId as $batchData)
                                            <option value="{{ $batchData->id }}">{{ $batchData->batch_no }}</option>
                                        @endforeach
                                    </select>
                                    @error('batch_id')
                                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                                    @enderror
                                </div>
                            </div>
                        
                            <button class="btn btn-primary w-100 mt-5">Submit</button>
                         </form>
                    </div>
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
            $('#subject_id').select2();
            $('#batch_id').select2();
        });
    </script>
@endpush