@extends('layouts.app')

@section('title', 'testTiltle')

@section('content')

<h1>{{ $post->titles }}</h1>
<p>{{ $post->content }}</p>

<p> Add{{  $post->created_at->diffForHumans()  }}</p>


@if(now()->diffInMinutes($post->created_at) < 5)

<div class="alert alert-info">NEW!</div>
@endif

@endsection