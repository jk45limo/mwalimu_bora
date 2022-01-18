<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CalendarEvent;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allevents()
    {
        $events = CalendarEvent::select('title', 'start', 'end')->get();
        return response()->json($events);
    }
    public function index()
    {
        return view('admin.events.index');
    }

    public function managecalendarevents()
    {
        $events = CalendarEvent::all();
        return view('admin.events.manage-events', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = CalendarEvent::findOrFail($id);
        return view('admin.events.show-event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = CalendarEvent::findOrFail($id);
        return view('admin.events.edit-event', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'venue' => 'required|string|min:3',
            'title' => 'required|string|min:3',
            'event_for' => 'required',
            'description' => 'required|string|min:10',
            'start_date' => 'required|date|after_or_equal:' . Carbon::now(),
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $events = CalendarEvent::findOrfail($id);
        $events->start = $request->input('start_date');
        $events->end = $request->input('end_date');
        $events->event_place = $request->input('venue');
        $events->description = $request->input('description');
        $events->title = $request->input('title');
        $events->event_for = $request->input('event_for');
        $events->save();
        Toastr::warning('Event Updated  Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('manageevents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = CalendarEvent::findOrFail($id);
        $event->delete();
        Toastr::error('Event has been deleted.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/manage-calendar-events');
    }
}
