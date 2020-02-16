@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Role
                    </div>
                    <div class="panel-body">
                        <form action="{{route('rule.store')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}"
                                       placeholder="Nombre de la norma" required>
                            </div>

                            @error('title')
                            <div class="alert alert-danger">
                                La norma es requerida
                            </div>
                            @enderror

                            <div class="form-group">
                                <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}"
                                       placeholder="descripcion de la norma" required>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">
                                La descripcion es requerida
                            </div>
                            @enderror


                            <div class="form-group">
                                <select type="text" name="portal_id" class="form-control" id="portals">
                                    @foreach($array as $value)
                                        <option value="{{$value->id}}">{{$value->title}}</option>
                                    @endforeach
                                </select>
                                @error('portal_id')
                                <div class="alert alert-danger">
                                    El portal es requerido
                                </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-success btn-block">Agregar Norma</button>
                        </form>
                    </div>

                    @if (session('agregar'))
                        <div class="alert alert-success mt-3">
                            {{session('agregar')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
