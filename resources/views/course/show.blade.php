@extends('welcome')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  Materia
                </div>
                <div class="panel-body">
                    <p><strong>Id: </strong>{{ $course->id }}</p>
                    <p><strong>Nombre: </strong>{{ $course->name }}</p>
                    <p><strong>Sigla: </strong>{{ $course->acronym }}</p>
                    <p><strong>Id_Semestre: </strong>{{ $course->semester_id}}</p>
                </div>
             </div>
        </div>
    </div>
</div>
@endsection