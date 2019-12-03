@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf

    @method('PATCH')
  <div class="row">
    <div class="col-md-8 offset-2">
      <div class="row">
        <h1>Edit profile</h1>
      </div>

       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Title</label>

                            
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Title</label>

                            
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Title</label>

                            
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                          <label for="image" class="col-md-4 col-form-label">Post Image</label>


                          <input type="file" name="image" id="image" class="form-control-file">

                                @error('image')
                                   
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row pt-4">
                          <button class="btn btn-primary">Add New Post</button>
                        </div>

    </div>
  </div>
  </form>
</div>
@endsection