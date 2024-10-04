<?php

namespace App\Http\Controllers;

use App\Models\Catalog;

class PublicController extends Controller {

    protected $_catalogModel;

    public function __construct() {
        $this->_catalogModel = new Catalog;
    }

    public function showEvent() {
        // Prodotti della categoria selezionata, in sconto o meno
        $events = $this->_catalogModel->getAllEvents();

        return view('catalog')
                        ->with('events', $events);
    }

    public function showEventByCat($eventCat) {
        $events = $this->_catalogModel->getEventsByCat($eventCat);
        return view('catalog')
                        ->with('events', $events);
    }

    public function showEventByID($eventID) {
        $events = $this->_catalogModel->getEventsByID($eventID);
        return view('event')
                        ->with('events', $events);
    }
}
