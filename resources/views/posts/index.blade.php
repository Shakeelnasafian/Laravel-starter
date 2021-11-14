@extends('layouts.app')


@section('content')

<div class="container">

    @foreach ($posts as $post)
    
      <div class="card">
            <div class="card-header"><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></div>
            <div class="card-body">{!!  substr(strip_tags($post->content), 0, 250) !!}</div>
            <div class="card-footer">{{$post->created_at}} 
              <a href="/posts/{{$post->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
            </div>
      </div>  
      <br>
    @endforeach
</div>


@endsection
