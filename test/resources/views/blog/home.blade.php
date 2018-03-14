@extends('layouts.master')

@section('title', 'Blog Laravel')

@section('content')
<table class="table table-dark table-hover">
    <thead class="thead-light">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
        <th scope="col">Update</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
    <tr>
      <th scope="row">{{$blog->id}}</th>
      <td><a class="text-muted" href="/blog/{{$blog->id}}">{{$blog->title}}</a></td>
      <td>
        <form action="/blog/{{$blog->id}}" method="post" >
            <input class="btn btn-danger" type="submit" value="Delete">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
        </form>
      </td>
      <td><a class="btn btn-info" href="/blog/{{$blog->id}}/edit">Update</a></td>
        
    </tr>
     @endforeach
    </tbody> 
    </table>
@endsection