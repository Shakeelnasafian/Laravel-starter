@extends('layouts.app')


@section('content')

<div class="container">
    @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
{{-- <form action="/posts" method="post"> --}}
  {!! Form::open(['method'=>'POST','action' => 'PostsController@store']) !!}
    <div class="form-group">
      <label for="title">Post title:</label>
      <input type="text" class="form-control" name="title" placeholder="Enter post title" id="title">
    </div>
    <div class="form-group">
        <label for="content">Post Content:</label>
        <textarea class="form-control" name="content"  rows="6" id="content"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
  {!! Form::close() !!}
{{-- </form> --}}

@if(count($errors)>0)

      @foreach ($errors->all() as $error )

      <li>{{ $error }}</li>
        
      @endforeach

@endif

</div>

@endsection
