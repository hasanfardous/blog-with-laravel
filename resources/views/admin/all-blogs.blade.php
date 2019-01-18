@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>All Blogs</h1>

            <h3 class="text-right"><a class="btn btn-success" href="/admin/create-blog">Add new</a></h3>

            @if(Session::has('blog-posted'))
            <div class="alert alert-success">
                {{ Session::get('blog-posted') }}
            </div>
            @endif()


            @if(Session::has('post-updated'))
            <div class="alert alert-success">
                {{ Session::get('post-updated') }}
            </div>
            @endif()

            @if(Session::has('post-deleted'))
            <div class="alert alert-danger">
                {{ Session::get('post-deleted') }}
            </div>
            @endif()

            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>

                @foreach($blogs as $blog)
                <tr>
                    <td>1</td>
                    <td>{{ $blog->title }}</td>
                    <td>
                        <a href="/admin/blog/edit/{{ $blog->id }}" class="btn btn-success">Edit</a>
                        <a href="/admin/blog/delete/{{ $blog->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection()