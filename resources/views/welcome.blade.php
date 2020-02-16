@extends('layouts.app')
@section('content')

    @guest
    @include('layouts.portal')
    @endguest
@endsection
