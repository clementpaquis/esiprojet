@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center header">Gestion des projets</div>
                <div class="card-body">
                    <div class="user">
                        @foreach ($projects as $project)
                        <span>{{$project->name}}</span>
                        <button class="btn btn-xs btn-danger" data-alert-form="{{ json_encode(['message'=>'Supprimer le projet ?', 'form'=>'#remove-project-'.$project->id]) }}" >
                                <i class="material-icons" title="Supprimer le projet">delete</i></button>
                        {{Form::open(['route'=>['project.delete', $project], 'method'=>'delete', 'id'=>'remove-project-'.$project->id]) }}
                        {{Form::close()}}
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    i{
        margin-left : 20px;
    }
    .header{
        font-style:italic;
    }
</style>