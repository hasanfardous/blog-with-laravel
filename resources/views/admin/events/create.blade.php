@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h1>Add New Event</h1>

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach()
                </div>
                <div class="panel-body">
                    <form action="/admin/events" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title"><strong>Event name: </strong></label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Event name">
                        </div>
                        <div class="form-group">
                            <label for="details"><strong>Event Details: </strong></label>
                            <textarea id="details" name="details" class="form-control" placeholder="Event Details"></textarea>
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