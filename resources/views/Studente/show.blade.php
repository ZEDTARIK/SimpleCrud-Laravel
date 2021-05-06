@extends('shared.layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">Student N° : <strong>{{ $student->id}}</strong></div>
            <div class="panel-body">
                <div class="well well-sm">FullName Student :<strong>{{ $student->FirstName}} {{ $student->LastName}} </strong></div>
                <div class="well well-sm">Email : <strong>{{ $student->Email}} </strong></div>
                <div class="well well-sm">Parrent :<strong>{{ $student->ParrentFullName}} </strong></div>
                <div class="well well-sm">Address Student :<strong>{{ $student->Address}} </strong></div>

                <div class="center">
                    <a href="{{'/student'}}" class="btn btn-primary"> <- Back</a>
                </div>

            </div>
          </div>
    </div>
</div>

@endsection
