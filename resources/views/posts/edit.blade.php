@extends('layouts.app')

@section('tittle', 'Update')

@section('content')

<form action="{{ route('posts.update',['post'=>$post->id]) }}" method="post">
    @csrf
    @method('PUT')

    @include('posts.partials.form')

    <div><input type="submit" class="btn btn-primary btn-block" value="Update"></div>


</form>
    
@endsection