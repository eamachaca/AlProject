@extends('layouts.app')

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
@section('content')
    <h2>{{$career->name}}</h2>
    <p>{{$career->acronym}}</p>

    <table class="margin-bottom-30 margin-top-26" style="width:100%">
        <tr>
            <th>Materia</th>
            <th>Pre-requisito</th>
        </tr>
        @foreach($plans as $plan)
            <tr>
                <td>{{$plan->course->name}}</td>
                <td>{{$plan->pre_requirement}}</td>
            </tr>
        @endforeach
    </table>
@endsection
