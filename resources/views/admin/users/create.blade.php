@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-6">

                <form method="post" action="{{ route('users.store') }}">
                        @csrf
                    <div class="form-control">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="name">Email:</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                        <div class="form-control">
                    <button type="submit" class="btn btn-primary">New User</button>
                        </div>
                </form>

            </div>
        </div>

    </div>


@endsection
