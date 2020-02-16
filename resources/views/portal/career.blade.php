@extends('layouts.app')

@section('content')
    <div>
        {{$career->name}}
    </div>
    <div>
        {{$career->acronym}}
    </div>
    <div>
        {{$career->welcome}}
    </div>
    <div>
        {{$career->vision}}
    </div>
    <div>
        {{$career->director}}
    </div>
    <div>
        {{$career->portal->title}}
    </div>


    <div class="margin-top-26">
        <a href="{{route('home_study',$career->id)}}">Plan de Estudio</a>
    </div>
@endsection
