@extends('layout.app')
@section('content')
<a href="/posts" class="btn btn-default">BAck</a>
<h1>{{$post->title}}</h1>
<div>
        {!!$post->body!!}
</div>

<small>Writen on {{$post->created_at}}</small>
@endsection
        
  
