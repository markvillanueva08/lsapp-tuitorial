@extends('layout.app')
@section('content')
<h1>POOST</h1>

@if(count($posts) > 0)
    @foreach ($posts as $post)
    <div class="card bg-light">
            <div class="card-body">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Writen on {{$post->created_at}}</small>
        <p>{!!$post->body!!}</p>
        </div>
    </div>
    @endforeach
    {{$posts->links()}}
@else 
    <p> NO POST!!</p>
@endif
@endsection
        
  