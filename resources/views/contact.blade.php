@extends('master')

@section('content')

  <article class="entry">

  <h2 class="entry-title">Contact Us</h2>


  <div class="entry-content">
    
    <div class="row">
      <div class="col-md-6">

        @if( $errors->any() )
        <div class="alert alert-danger">
          @foreach($errors->all() as $e)
            {{ $e }} <Br>
          @endforeach
        </div>
        @endif

        <form action="{{ route('site.contact') }}" method="post">
        @csrf
        <label>Name</label>
        <input value="{{ old("name") }}" type="text" class="form-control mb-3" name="name">
        
        <label>Email</label>
        <input value="{{ old("email") }}" type="text" class="form-control mb-3" name="email">
  
        <label>Phone</label>
        <input value="{{ old("phone") }}" type="text" class="form-control mb-3" name="phone">

        <label>Subject</label>
        <input value="{{ old("subject") }}" type="text" class="form-control mb-3" name="subject">

        <label>Message</label>
        <textarea name="message" class="form-control">{{ old("message") }}</textarea>

        <hr>
        <button class="btn btn-primary" type="submit">Send Query</button>


        </form>
      </div>
      <div class="col-md-6">
        <strong>Our Address</strong>
        <hr>
        Some Dummy Building <br>
        Some Dummy Road <br>
        Dummy City - 333333 <br>
        P/h: 9898989898
      </div>
    </div>

  </div>

  </article>

@endsection