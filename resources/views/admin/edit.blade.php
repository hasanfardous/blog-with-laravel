@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1>Update Post</h1>

                    @if(Session::has('post-updated'))
                    <div class="alert alert-success">
                        {{ Session::get('post-updated') }}
                    </div>
                    @endif()
                </div>
                <div class="panel-body">
                    <form action="/admin/blog/edit/{{$blog->id}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Post Title: </label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $blog->title }}" placeholder="Post title">
                        </div>
                        <div class="form-group">
                            <label for="content">Post Content: </label>
                            <textarea type="text" id="content" name="content" class="form-control" placeholder="Post content">{{ $blog->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()