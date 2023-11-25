@extends('FrontEnd.layout.app')
@section('frontEnd-layour')
    <section id="course">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card my-5 p-5">
                        <table class="table-responsive table table-hover table-strip">
                             <tr>
                                <th>SN</th>
                                <th>Subject Name/ Course Code</th>
                             </tr>

                             @forelse ($allCourseRecords as $key=> $data)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $data->subject_name }}</td> 
                            @empty
                                    <h4>No subject found...</h4>
                                </tr>           
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection