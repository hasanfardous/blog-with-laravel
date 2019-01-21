@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>All Events</h1>

            <h3 class="text-right"><a class="btn btn-success" href="/admin/events/create">Add new</a></h3>

            @if(Session::has('event-added'))
            <div class="alert alert-success">
                {{ Session::get('event-added') }}
            </div>
            @endif()
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
                <?php $count=1;?>
                
                @foreach($events as $event)
                <tr>
                    <td><?=$count++?></td>
                    <td>{{ $event['title'] }}</td>
                    <td>{{ $event['details'] }}</td>
                    <td>
                        <a href="/admin/events/edit/{{ $event['id'] }}" class="btn btn-success">Edit</a>
                        <a href="/admin/events/delete/{{ $event['id'] }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach()
            </table>
        </div>
    </div>
</div>

@endsection()