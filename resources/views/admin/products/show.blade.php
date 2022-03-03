@extends('layouts.dashboard')
@section('content')

    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->price }}</h2>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
@endsection
