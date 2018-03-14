@extends('layouts.master')

@section('title', 'Blog Laravel')

@section('content')

<h1>Create <span class="badge badge-primary">New</span></h1>
Remember, you must type word at least <kbd>5 word</kbd> to create new page.<br>
    
    <form action="/blog" method="post">
        <div class="form-group ">
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title')}}">

            @if($errors->has('title'))
            <div class="alert alert-danger">
                <strong>Oops!</strong> You don't know how close there is.
            </div>
            @endif
        </div>
        <div class="form-group ">
            <textarea class="form-control" name="description" placeholder="Description" rows="5">{{ old('description')}}</textarea>

            @if($errors->has('description'))
            <div class="alert alert-danger">
                <strong>Oops!</strong> No Description No Option.
            </div>
            @endif
        </div>

        <input class="btn btn-success col-lg-4" type="submit" value="Done">
        {{ csrf_field() }}
    </form>

    

@endsection