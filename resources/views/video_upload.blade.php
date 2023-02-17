@extends('master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">Video Upload</h2>

  <div class="entry-meta">
    Please upload your video.
  </div>

  <div class="entry-content">

    @if($errors->any())

      <div class="alert alert-danger">

        @foreach($errors->all() as $e)
          {{ $e }} <Br>
        @endforeach

      </div>

    @endif
    
    <form action="{{ route('site.video.upload') }}" method="post" enctype="multipart/form-data">
      
      @csrf

      <div class="mb-3">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
      </div>
      
      <div class="mb-3">
        <label>Category</label>
        <select name="category" class="form-select">
          @foreach($categories as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label>Description</label>
        <textarea class="form-control" name="description">{{ old('description') }}</textarea>
      </div>

      <div class="mb-3">  
        <label>Thumb</label>
        <input type="file" class="form-control" name="thumb" value="{{ old('thumb') }}">
      </div>
      
      <div class="mb-3">  
        <label>Video File</label>
        <input type="file" class="form-control" name="video_file" value="{{ old('video_file') }}">
      </div>
    

      <hr>  
      <button class="btn btn-primary" type="submit">Save</button>

    </form>

  </div>

  </article>

@endsection