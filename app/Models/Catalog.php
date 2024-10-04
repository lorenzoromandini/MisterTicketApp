<?php

namespace App\Models;

use App\Models\Resources\Event;

class Catalog {

     public function getEventsByCat($eventCat) {
        return Event::where('eventCat', $eventCat)->get();
    }
    
    public function getEventsByID($eventID) {
        return Event::where('eventID', $eventID)->get();
    }
    
    public function getAllEvents() {
        $events = Event::all();
        return $events;
    }
    

}
