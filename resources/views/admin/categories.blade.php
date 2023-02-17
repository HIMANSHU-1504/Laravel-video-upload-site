@extends('admin.master')

@section("content")
    
    <article class="entry">

        <h2 class="entry-title">Add Category</h2>
        
        <div class="entry-content">
        
        <form action="{{ route('admin.categories') }}" method="post">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ old("name") }}">
                <div class="form-text text-danger">{{ $errors->first("name"); }}</div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>

        </div>

    </article>
    
    <article class="entry">

        <h2 class="entry-title">Browse Categories</h2>
        
        <div class="entry-content">
        
        <table class="table">
            <thead>
                <tr>
                    <td width="30"></td>
                    <td><b>Name</b></td>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $c)
                <tr>
                    <td> <i class="bi bi-x-square text-danger"></i> </td>
                    <td>{{ $c->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </div>

    </article>

@endsection