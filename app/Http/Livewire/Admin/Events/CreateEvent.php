<?php

namespace App\Http\Livewire\Admin\Events;

use App\Models\CalendarEvent;
use Livewire\Component;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
class CreateEvent extends Component
{
    public $start_date;
    public $end_date;
    public $event_for;
    public $description;
    public $venue;
    public $title;

  
    public function render()
    {
        return view('livewire.admin.events.create-event');
    }

    public function storeevents(){
        $this->validate([
            'venue'=>'required|string|min:3',
            'title'=>'required|string|min:3',
            'event_for'=>'required',
            'description'=>'required|string|min:10',
            'start_date'=>'required|date|after_or_equal:'.Carbon::now(),
            'end_date'=>'required|date|after_or_equal:start_date',
        ]);

        $events = new CalendarEvent;
        $events->start = $this->start_date;
        $events->end = $this->end_date;
        $events->event_place = $this->venue;
        $events->description = $this->description;
        $events->title = $this->title;
        $events->event_for = $this->event_for;
        $events->save();
        Toastr::success('New Event Registered Successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('manageevents.index');
    }
}
