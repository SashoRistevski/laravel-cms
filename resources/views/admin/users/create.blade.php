@extends('layouts.dashboard')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add User</h4>
                        <div class="row mt-3">

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <form role="form" class="text-start" method="post" action="{{ route('users.store') }}">
                        @csrf


                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>




                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror "  onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                            <div class="mb-3">
                                @foreach($roles as $role)
                                    <div class="form-check">
                                        <label class="form-check-label" for="{{$role->id}}">{{$role->name}}</label>
                                        <input class="form-check" name="role_id" type="checkbox" value="{{$role->id}}">
                                        @endforeach
                                    </div>
                            </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

