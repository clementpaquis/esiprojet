@extends('layouts.app')

@section('content')

    <h1>Liste des projets</h1> 

    @foreach ($projects as $project)

    <div class="test">
        <hr>
        <div>
            <a class="name" href="{{route('settings')}}">{{ $project->name }}</a>
            <p>{{$project->description}}</p>
        </div>
        <p><a class="owner">{{ $project->owner }}</a></p>
    </div>

    @endforeach

@endsection

<style>

    h1{
        text-align : center;
        padding-bottom : 10px;
    }

    .test{
        margin:auto;
        padding-bottom:0px;
        width:70%;
    }
    </style>