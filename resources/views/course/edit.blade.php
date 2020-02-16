@extends('welcome')
@section('content')
<h3 class="text-center mb-3 pt-3">Editar la materia {{$course->id}}</h3>

<form action="{{route('course.update' , $course->id)}}" method="POST">
    @method('PUT')
    @csrf

    <div class="form-group">
        <input type="text" name="name" id="name" value="{{$course->name}}" class="form-control">
    </div>

    <div class="form-group">
        <input type="text" name="acronym" id="acronym" value="{{$course->acronym}}" class="form-control">
    </div>

    <div class="form-group">
        <input type="text" name="credit" id="credit" value="{{$course->credit}}" class="form-control">
    </div>

    <div class="form-group">
        <select  type="text" name="semester_id" class="form-control" id="semesters" >
            @foreach($array as $value)
            <option value="{{$value->id}}">{{$value->description}}</option>
            @endforeach
          </select>
    </div>
    <button type="submit" class="btn btn-warning btn-block">Editar nota</button>
</form>
@if (session('update'))
    <div class="alert alert-success mt-3">
        {{session('update')}}
    </div>
@endif
@endsection