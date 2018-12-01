@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ Auth::user()->name }} {{Auth::user()->surname}}</div>
                <div class="card-body">
                    <ul>
                        <li>{{ Auth::user()->name }}</li>
                        <li>{{ Auth::user()->surname }}</li>
                        <li>{{ Auth::user()->email }}</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
