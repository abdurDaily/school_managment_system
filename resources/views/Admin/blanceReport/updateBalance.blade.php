@extends('layouts.app')
@section('general-report')
    
{{-- ** UPDATE BALANCE ** --}}
<div class="container">
    <div class="row">
            {{-- SUCCESS MESSAGE START --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            {{-- SUCCESS MESSAGE END --}}
        <div class="col-12">
            <div class="card p-5 table-responsive">
                <table class="table table-striped table-hover">
                     <tr style="background: rgb(3, 58, 236); color:#fff;">
                        <th>SN</th>
                        <th>Author</th>
                        <th>Email</th>
                        <th>Add Money</th>
                        <th>Cost Money</th>
                        <th>Total</th>
                        <th>Create At</th>
                        <th>Update At</th>
                        <th>Action</th>
                      </tr>

                      @forelse ($costSheet as $key => $cost )
                          <tr>
                            <td>{{ ++$key; }}</td>
                            <td>{{ $cost->user->name }}</td>
                            <td>{{ $cost->user->email }}</td>
                            <td>{{ $cost->add_amout == 0 ? '00 TK' : $cost->add_amout .'TK'}}</td>
                            <td>{{ $cost->cost_amout == 0 ? '00 TK' : $cost->cost_amout.'TK'}}</td>
                            <td style="background: rgb(72, 76, 88); color:#fff;">{{ $cost->cost_amout + $cost->add_amout == 0 ? '00TK' : $cost->cost_amout + $cost->add_amout . 'TK'}}</td>
                            <td>{{ $cost->created_at->format('d M, Y') }} </td>
                            <td>{{ $cost->updated_at->format('d M, Y') }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('cost.edit',$cost->id) }}" class="btn btn-danger btn-sm text-light">Edit</a>
                                    <a href="{{ route('delete.cost',$cost->id) }}"class="btn btn-primary btn-sm text-light">Delete</a>
                                </div>
                            </td>
                          </tr>
                      @empty
                          
                      @endforelse
                </table>

                <br>
                {{ $costSheet->links() }}

            </div>
        </div>
    </div>
</div>
@endsection


{{--*** PAGINATION *** --}}

@push('pagination')
    <style>
        .pagination .page-item {
            margin: 0 3px;
        }
        .pagination span{
           background: rgb(30, 7, 230) !important;
           color: #fff !important;
        }
    </style>
@endpush
