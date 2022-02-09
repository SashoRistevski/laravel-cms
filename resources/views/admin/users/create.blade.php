@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-6">

                <form method="post" action="{{ route('users.store') }}">
                        @csrf
                    <div class="form-control">
                        <label for="name">Name</label>
                        @if($errors->has('name'))
                            <span class="btn-danger"> {{ $errors ->first('name') }}</span>
                        @endif
                        <input type="text" name="name" class="form-control">

                        <label for="name">Email</label>
                        @if($errors->has('email'))
                            <span class="btn-danger"> {{ $errors ->first('email') }}</span>
                        @endif
                        <input type="email" name="email" class="form-control">

                        <label for="name">Password:</label>
                        @if($errors->has('password'))
                            <span class="btn-danger"> {{ $errors ->first('password') }}</span>
                        @endif
                        <input type="password" name="password" class="form-control">
                    </div>
                        <div class="form-control">
                    <button type="submit" class="btn btn-primary">New User</button>
                        </div>
                </form>

            </div>
        </div>

    </div>


@endsection