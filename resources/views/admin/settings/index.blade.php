@extends('layouts.dashboard')

@section('content')

    <div class="container">
        <a href="/admin/settings/create" class="btn btn-primary">Add Setting</a>

        <div class="row">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">{{$settings->title}}</p>
                        <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">MainUrl</h5>
                        <p class="card-text">{{$settings->mainurl}}</p>
                        <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Email</h5>
                        <p class="card-text">{{$settings->email}}</p>
                        <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">{{$settings->description}}</p>
                        <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <br />
            <br />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Logo</h5>
                    <p class="card-text">{{$settings->logo}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Address</h5>
                    <p class="card-text">{{$settings->address}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Phone</h5>
                    <p class="card-text">{{$settings->phone}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Twitter</h5>
                    <p class="card-text">{{$settings->twitter}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <br />
        <br />
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Facebook</h5>
                    <p class="card-text">{{$settings->facebook}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Skype</h5>
                    <p class="card-text">{{$settings->skype}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">LinkedIn</h5>
                    <p class="card-text">{{$settings->linkedin}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Youtube</h5>
                    <p class="card-text">{{$settings->youtube}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </div>

            </div>
            <br />
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Flickr</h5>
                    <p class="card-text">{{$settings->flickr}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </div>

            </div>
            <br />
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pinterest</h5>
                    <p class="card-text">{{$settings->pinterest}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </div>

            </div>
            <br />
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Latitude</h5>
                    <p class="card-text">{{$settings->lat}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </div>

            </div>
            <br />
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Longitude</h5>
                    <p class="card-text">{{$settings->lng}}</p>
                    <a href="/admin/settings/{{$settings->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/admin/settings/{{$settings->id}}/delete" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>

                </div>

            </div>
            <br />
        </div>
    </div>
    </div>

@endsection
