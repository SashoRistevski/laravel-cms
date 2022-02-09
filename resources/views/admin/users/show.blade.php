@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">

                <h1>{{ $user->name }}</h1>
                <h2>{{ $user->email }}</h2>
                <h2>{{ $user->created_at->diffForHumans() }}</h2>
            </div>
        </div>
    </div>

@endsection
