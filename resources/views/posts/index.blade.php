@extends('layouts.app')

@section('tittle', 'testTiltle')

@section('content')
{{-- @if (count($post))
@foreach ($posts as $key=>$post)

<div>{{ $key }}.{{ $post['title'] }}</div>
<div>{{ $post['content'] }}</div> 
    
@endforeach
@else
    <P>NO post found</P>
@endif --}}

@foreach($post as $post)
{{-- @break ($key=1) --}}
{{-- @continue($key = 1) --}}
{{--  @if($loop->even)  --}}
<h3>  <a href="{{ route('posts.show',['post'=>$post->id]) }}">{{ $post->content }}</a></h3>

<div class="mb-3">
    <a href="{{ route('posts.edit',['post'=>$post->id]) }}" class="btn btn-primary">Edit</a>
    <form   class="d-inline" action="{{ route('posts.destroy',['post'=>$post->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-primary" value="Delete">
    
    </form>
    
    </div>



@endforeach

@endsection