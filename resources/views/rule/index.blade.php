@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>

                @foreach ($rule as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <a href="{{route('rule.show' , $item->id)}}" class="btn btn-primary">Ver</a>
                            <a href="{{route('rule.edit' , $item->id)}}" class="btn btn-warning">Editar</a>
                            <form action="{{route('rule.destroy' , $item->id)}}" method="POST" class="d-inline">
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
            {{$rule->render()}}
            <a href="{{route('rule.create')}}" class="btn btn-primary">crear Norma</a>
        </div>
    </div>
@endsection
