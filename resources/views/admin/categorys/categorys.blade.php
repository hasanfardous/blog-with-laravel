@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>All Categories</h1>

            <h3 class="text-right"><a class="btn btn-success" href="/admin/categorys/create">Add new</a></h3>

            @if(Session::has('cat-added'))
                <div class="alert alert-success">
                    {{ Session::get('cat-added') }}
                </div>
            @endif()
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                <?php $count=1;?>
                
                
                <tr>
                    <td><?=$count++?></td>
                    <td>dafdsf</td>
                    <td>
                        <a href="/admin/category/edit/1" class="btn btn-success">Edit</a>
                        <a href="/admin/category/delete/1" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                
            </table>
        </div>
    </div>
</div>

@endsection()