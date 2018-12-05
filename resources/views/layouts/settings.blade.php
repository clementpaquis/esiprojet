@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center test">{{ $user->name }} {{$user->surname}}</div>
                <div class="card-body">
                    <ul>
                        <li>{{ $user->name}}</li>
                        <li>{{ $user->surname }}</li>
                        <li>{{ $user->email }}</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .test{
        color : blue;
    }
</style>