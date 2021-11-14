@extends('layouts.app')


@section('content')

<div class="container">
    
      <div class="card">
            <div class="card-header">{{$post->title}}</div>
            <div class="card-body">{{$post->content}}</div>
            <div class="card-footer">Publish Time {{$post->created_at}} 
                  <form action="/posts/{{$post->id}}" method="post">   
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary">Delete</button>
                      </form>                 
            </div>
      </div>  
</div>


@endsection