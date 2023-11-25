@extends('layouts.app')
@section('general-report')
    
{{-- ** UPDATE BALANCE ** --}}
<div class="container mt-5">
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card p-5">
                <div style="background: #1a05d6;color:#fff; padding:15px 10px; margin-bottom:10px;"">Update Cost Sheet</div>
                <form action="{{ route('update.cost',$costs->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="add_money">Insert Add Money</label>
                    <input type="text" name="add_money" class="form-control mb-2" value="{{ $costs->add_amout == 0 ? 0 :$costs->cost_amout }}">
                    
                    <label for="cost_money">Insert Cost Money</label>
                    <input type="text" name="cost_money" class="form-control mb-2" value="{{ $costs->cost_amout == 0 ? 0 :$costs->cost_amout }}">

                    <button class="btn btn-primary w-100">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

