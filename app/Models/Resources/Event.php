<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Resources;

class Event extends Model {

    protected $table = 'events';
    protected $primaryKey = 'eventsID';
    // eventsID non modificabile da un HTTP Request (Mass Assignment)
    protected $guarded = ['eventsID'];
    public $timestamps = false;

    public function getPrice() {
        $price = $this->eventPrice;

        $discount = ($price * $this->eventDiscount) / 100;
        $price = round($price - $discount, 2);

        return $price;
    }

    public function getPromoter($eventPromoter) {
        $promoter = User::find($eventPromoter);
        $promoterName = $promoter->name;
        return $promoterName;
    }
    
    public function getPromoterMail($eventPromoter) {
        $promoter = User::find($eventPromoter);
        $promoterMail = $promoter->userMail;
        return $promoterMail;
    }
    
    public function getPromoterPhone($eventPromoter) {
        $promoter = User::find($eventPromoter);
        $promoterPhone = $promoter->userPhone;
        return $promoterPhone;
    }

}
