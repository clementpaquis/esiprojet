@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center header">Gestion des utilisateurs</div>
                <div class="card-body">
                    <div class="user">
                        @foreach ($users as $user)
                        <span>{{$user->name}} {{$user->surname}} {{$user->email}}</span>
                        <button class="btn btn-xs btn-danger" data-alert-form="{{ json_encode(['message'=>'Supprimer l\'utilisateur ?', 'form'=>'#remove-user-'.$user->id]) }}" >
                                <i class="material-icons" title="Supprimer l'utilisateur">delete</i></button>
                        {{Form::open(['route'=>['user.delete', $user], 'method'=>'delete', 'id'=>'remove-user-'.$user->id]) }}
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
    button{
        float : right;
    }
    .header{
        font-style:italic;
        font-size : 25px;
    }
</style>