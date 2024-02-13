<?php

namespace App\Livewire;

use App\Models\EventCalenderSetting;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\On; 

class Calender extends Component
{

    public $meeting_address = '';
    public $location = '';
    public $timezone = '';
    public $start_time = '';
    public $end_time = '';

    protected function rules() {
        return [
            'meeting_address' => 'required|min:6',
            'location' => 'required',
        ];
    }

    public $timeSlots = [];

    public function mount()
    {
        $this->timeSlots = [
            '09:00 - 09:15',
            '09:15 - 09:30',
            '09:30 - 09:45',
            '09:45 - 10:00',
            '10:00 - 10:15',
            '10:15 - 10:30',
            '10:30 - 10:45'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function getTime() {
        $this->start_time;
        Log::info("time",['t' => $this->start_time]);
    }

    public function createEvent()
    {

        $this->validate();

        $eventCalender = new EventCalenderSetting();
        $eventCalender->id = $this->generateUniqueId();
        $eventCalender->meeting_address = $this->meeting_address;
        $eventCalender->location = $this->location;
        $eventCalender->timezone = $this->timezone;
        $eventCalender->save();

        //reset field
        $this->reset(['meeting_address', 'location']);

        session()->flash('success','Event created successfully.');

        // close event create modal
        $this->dispatch('close-modal'); 

    }

    // generate uuid for id column
    private function generateUniqueId()
    {
        return \Illuminate\Support\Str::uuid();
    }

    public function render()
    {
        return view('livewire.calender');
    }
}
