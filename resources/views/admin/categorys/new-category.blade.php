@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h1>Add New Category</h1>
                </div>
                <div class="panel-body">
                    <form action="/admin/categorys" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Category name: </label>
                            <input type="text" id="title" name="name" class="form-control" placeholder="Category name">
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