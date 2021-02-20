@extends('layouts.app')

@section('tittle', 'create')

@section('content')

<form action="{{route('posts.store') }}" method="post">
    @csrf

    @include('posts.partials.form')

    <div><input type="submit"  class="btn btn-primary btn-block" value="Create"></div>


</form>
    
@endsection