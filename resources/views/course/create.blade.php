@extends('welcome')

@section('content')
<div class="col-md-5">
    <h3 class="text-center mb-4">Agregar Materia</h3>

    <form action="{{route('course.store')}}" method="POST">
        @csrf

        <div class="form-group">
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Nombre de la materia" required>
        </div>

        @error('name')
            <div class="alert alert-danger">
                La materia es requerida
            </div>
        @enderror

        <div class="form-group">
        <input type="text" name="acronym" id="acronym" class="form-control" value="{{old('acronym')}}" placeholder="Sigla de la materia" required>
        </div>
        @error('acronym')
            <div class="alert alert-danger">
                La sigla es requerida
            </div>
        @enderror

        <div class="form-group">
            <input type="text" name="credit" id="credit" class="form-control" value="{{old('credit')}}" placeholder="Creditos de la materia" required>
            </div>
            @error('credit')
                <div class="alert alert-danger">
                    El credito es requerido
                </div>
            @enderror

        <div class="form-group">
            <select  type="text" name="semester_id" class="form-control" id="semesters" >
                @foreach($array as $value)
                <option value="{{$value->id}}">{{$value->description}}</option>
                @endforeach
              </select>
              @error('semester_id')
              <div class="alert alert-danger">
                  El semestre es requerido
              </div>
          @enderror
        </div>
           
        
        <button type="submit" class="btn btn-success btn-block">Agregar Materia</button>
    </form>

    @if (session('agregar'))
        <div class="alert alert-success mt-3">
            {{session('agregar')}}
        </div>
    @endif
</div>   

@endsection