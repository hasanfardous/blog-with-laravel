@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1>Add New Post</h1>
                </div>
                <div class="panel-body">
                    <form action="/admin/all-blogs" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Post Title: </label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Post title">
                        </div>
                        <div class="form-group">
                            <label for="content">Post Content: </label>
                            <textarea type="text" id="content" name="content" class="form-control" placeholder="Post content"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()