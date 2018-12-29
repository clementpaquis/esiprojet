@extends('layouts.app')

@section('content')

    <h1>Liste des projets</h1> 

    @foreach ($projects as $project)
    <div class ="test">
        <div class="project">
            <hr>
            <div>
                <span>
                    <a class="name" href="{{route('settings')}}">{{ $project->name }}</a>
                    @if (Auth::user()->type == "admin")
                    <button class="btn btn-xs btn-danger" data-alert-form="{{ json_encode(['message'=>'Supprimer le projet ?', 'form'=>'#remove-project-'.$project->id]) }}" >
                        <i class="material-icons" title="Supprimer le projet">delete</i></button>
                        {{Form::open(['route'=>['project.delete', $project], 'method'=>'delete', 'id'=>'remove-project-'.$project->id]) }}
                        {{Form::close()}}
                    @endif
                    @if (Auth::user()->type == "default")
                    <button class="btn btn-primary apply"><i title="Postuler pour le projet">Postuler</i></button>
                    @endif
                </span>
                <p>{{$project->description}}</p>
            </div>
            <p><a class="owner">{{ $project->owner }}</a></p>
        </div>

        @endforeach

        @if (Auth::user()->type == "prof")
            <a class="add btn-primary" title="Ajouter un projet" href="{{ route('addProject')}}">+</a>
        @endif

    </div>
@endsection

<style>
    button{
        float : right;
    }
    h1{
        text-align : center;
        padding-bottom : 10px;
    }

    .apply{
        background-color : #3490dc;
        color : white;
        margin-top : 2%;
    }

    .project{
        float : left;
        margin-left : 15%;
        padding-bottom:0px;
        width:70%;
    }

    .add{
        background-color : #3490dc;
        color : white;
        border : none;
        border-radius : 50%;
        width:50px;
        margin-top : 33%;
        margin-left : 8%;
        font-size : 30px;
        text-align:center;
        float : right;
        position : fixed;
    }
    .add:hover{
        background-color : #5595dc;
        cursor : pointer;
        text-decoration : none;
        color : white;

    }
    .add:focus{
        outline : none;
    }
    </style>