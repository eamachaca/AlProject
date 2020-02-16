@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>Norma</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Id: </strong>{{ $rule->id }}</p>
                        <p><strong>Titulo: </strong>{{ $rule->title }}</p>
                        <p><strong>Descripcion: </strong>{{ $rule->description }}</p>
                        <p><strong>Id Portal: </strong>{{ $rule->portal_id}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
