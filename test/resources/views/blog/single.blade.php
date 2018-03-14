@extends('layouts.master')

@section('title', 'Blog Laravel')

@section('content')
    <h1>Belajar File Blog di Laravel</h1>
    
    <h2>{{$blog->title}}</h2>
    <hr>
    
    <p>{{$blog->description}}</p>
    
@endsection