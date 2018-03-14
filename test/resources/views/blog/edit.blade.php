@extends('layouts.master')

@section('title', 'Blog Laravel')

@section('content')
    <h1>Halaman Mengedit</h1>
    
    <form action="/blog/{{$blog->id}}" method="post">
        <input type="text" name="title" value="{{$blog->title}}">

        <hr>
        
        <textarea name="description" cols="30" rows="10">{{$blog->description}}</textarea><br>

        <input type="submit" value="Save">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
    </form>

    
@endsection