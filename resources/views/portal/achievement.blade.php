@extends('layouts.app')

@section('content')
    <div>
        {{$achievement->title}}
    </div>
    <div>
        {{$achievement->area}}
    </div>
    <div>
        <img src="{{asset($achievement->image)}}" width="360" height="240">
    </div>
    <div>
        {{$achievement->content}}
    </div>
    <div>
        {{$achievement->date}}
    </div>

@endsection
