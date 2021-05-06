@extends('shared.layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">List Students</div>
            <div class="panel-body">

                <table class="table table-hover table-striped table-bordered table-sm-responsive">
                    <thead>
                        <th>#</th>
                        <th>Student</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th></th>
                    </thead>
                    @foreach($students as $student)
                    <tbody>
                        <tr>
                            <td><span class="badge">{{ $student->id }}</span></td>
                            <td scope="row">{{ $student->FirstName}} {{ $student->LastName}}</td>
                            <td>{{ $student->Email}}</td>
                            <td>{{ $student->Address}}</td>
                            <td>
                                <a href="{{'/student/'.$student->id }}" class="btn btn-sm btn-primary">Show</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>
          </div>
    </div>
</div>

@endsection
