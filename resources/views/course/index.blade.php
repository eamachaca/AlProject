@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Sigla</th>
                    <th>Credito</th>
                    <th>Semestre</th>
                    <th>Acciones</th>
                </tr>

                @foreach ($course as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->acronym}}</td>
                        <td>{{$item->credit}}</td>
                        <td>{{$item->semester_id}}</td>
                        <td>
                            <a href="{{route('course.show' , $item->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('course.edit' , $item->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('course.destroy' , $item->id)}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            @if (session('eliminar'))
                <div class="alert alert-success mt-3">
                    {{session('eliminar')}}
                </div>
            @endif
            {{$course->render()}}
            <a href="{{route('course.create')}}" class="btn btn-primary">crear Materia</a>
        </div>
    </div>
@endsection
