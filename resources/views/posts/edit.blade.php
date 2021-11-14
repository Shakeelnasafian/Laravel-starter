@extends('layouts.app')


@section('content')

<div class="container">
    @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<form action="/posts/{{$post->id}}" method="post">
    <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
      <label for="title">Post title:</label>
      <input type="text" class="form-control" name="title" placeholder="Enter post title" id="title" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="content">Post Content:</label>
        <textarea class="form-control" name="content"  rows="6" id="content">{{$post->content}}</textarea>
      </div>
    {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Update Post</button>
  </form>
</div>

@endsection