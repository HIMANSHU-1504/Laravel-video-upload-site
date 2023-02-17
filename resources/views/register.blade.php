@extends('master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">Register</h2>

  <div class="entry-meta">
    Please provide your data.
  </div>

  <div class="entry-content">

    {{-- <!-- @if($errors->any())

      <div class="alert alert-danger">

        @foreach($errors->all() as $e)
          {{ $e }} <Br>
        @endforeach

      </div>

    @endif --> --}}

    @if( ! empty( session('register_process_done') ) )
      <div class="alert alert-success">Thank you. You have now registered.</div>
    @endif

    
    <form action="{{ route('site.register') }}" method="post" enctype="multipart/form-data">
      
      @csrf

      <div class="mb-3">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        <div class="form-text text-danger">{{ $errors->first('name') }}</div>
    </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
        <div class="form-text text-danger">{{ $errors->first('email') }}</div>
      </div>

      <div class="mb-3">  
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
        <div class="form-text text-danger">{{ $errors->first('phone') }}</div>
      </div>
      
      <div class="mb-3">  
        <label>Password</label>
        <input type="password" class="form-control" name="password">
        <div class="form-text text-danger">{{ $errors->first('password') }}</div>
      </div>
      
      <div class="mb-3">  
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password_confirmation">
        <div class="form-text text-danger">{{ $errors->first('password_confirmation') }}</div>
      </div>

      <div class="mb-3">  
        <label>Profile Pic</label>
        <input type="file" class="form-control" name="profile_pic">
        <div class="form-text text-danger">{{ $errors->first('profile_pic') }}</div>
      </div>
     

      <hr>  
      <button class="btn btn-primary" type="submit">Save</button>

    </form>

  </div>

  </article>

@endsection