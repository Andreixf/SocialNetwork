@extends('layouts.app')
@section('stylesheets')


@endsection
@section('content')

<div class="container">
  <form action="/post" enctype="multipart/form-data" method="post">
    @csrf
  <div class="row">
    <div class="col-md-8 offset-2">
      <div class="row">
        <h1>Add New Post</h1>
      </div>

       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label"> Post Caption</label>

                            
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                              {{ Form::label('tags[]', 'Tags:') }}
        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
          @foreach($tags as $tag)
            <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
          @endforeach

        </select>
        

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

@section('scripts')
 

 
@endsection
