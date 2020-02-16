@extends('layouts.app')
@section('content')
    <h3 class="text-center mb-3 pt-3">Editar la norma {{$rule->id}}</h3>
    <form action="{{route('rule.update' , $rule->id)}}" method="POST">
        @method('PUT')
        @csrf

        <div class="form-group">
            <input type="text" name="title" id="title" value="{{$rule->title}}" class="form-control">
        </div>

        <div class="form-group">
            <input type="text" name="description" id="description" value="{{$rule->description}}" class="form-control">
        </div>

        <div class="form-group">
            <select type="text" name="portal_id" class="form-control" id="portals">
                @foreach($array as $value)
                    <option value="{{$value->id}}">{{$value->title}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning btn-block">Editar norma</button>
    </form>
    @if (session('update'))
        <div class="alert alert-success mt-3">
            {{session('update')}}
        </div>
    @endif
@endsection
