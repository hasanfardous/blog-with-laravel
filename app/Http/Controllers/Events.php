<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Event;

class Events extends Controller
{
    public function index(){
        $events = new Event();
        $events = $events->all();
        return view('admin.events.events', compact('events'));
    }

    public function create(){
        return view('admin.events.create');
    }

    public function store(Request $request){
        $title = $request->title;
        $details = $request->details;

        $event = new Event();
        $this->validate(request(), array(
            'title' => 'required',
            'details' => 'required'
        ));
        $event->create($request->all());

        return redirect('/admin/events')->with('event-added', 'Event has been added');
    }

    public function edit($id){
        $events = new Event();
        $event = $events->find($id);

        return view('admin.events.edit', compact('event'));
    }
}
