@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edit Setting</h4>
                        <div class="row mt-3">

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <form role="form" class="text-start" method="post" action="/admin/settings/{{$setting->id}}">
                        @csrf
                        @method('put')


                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>




                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">MainUrl</label>
                            <input type="url" name="mainurl" class="form-control @error('mainurl') is-invalid @enderror "  onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('mainurl')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>



                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Description</label>
                            <textarea name ="description" class="form-control"></textarea>

                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Logo</label>
                            <input type="text" name="logo" class="form-control @error('logo') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('logo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Twitter</label>
                            <input type="url" name="twitter" class="form-control @error('twitter') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('twitter')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Facebook</label>
                            <input type="url" name="facebook" class="form-control @error('facebook') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('facebook')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Skype</label>
                            <input type="text" name="skype" class="form-control @error('skype') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('skype')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">LinkedIn</label>
                            <input type="url" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('linkedin')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">YouTube</label>
                            <input type="url" name="youtube" class="form-control @error('youtube') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('youtube')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Flickr</label>
                            <input type="url" name="flickr" class="form-control @error('flickr') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('flickr')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Pinterest</label>
                            <input type="url" name="pinterest" class="form-control @error('pinterest') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('pinterest')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Latitude</label>
                            <input type="number" step="any" name="lat" class="form-control @error('lat') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('lat')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="input-group input-group-outline mb-3 ">
                            <label class="form-label">Longitude</label>
                            <input type="number" step="any" name="lng" class="form-control @error('lng') is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                            @error('lng')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
