<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';
    protected $primaryKey = 'userID';

    public function getPrice($withDiscount = false) {
        $price = $this->price;
        if (true == ($this->discounted) && true == $withDiscount) {
            $discount = ($price * $this->discountPerc) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }

    // Realazione One-To-One con Category
    public function prodCat() {
        return $this->hasOne(Category::class, 'eventCat', 'eventCat');
    }

    public function getTopCats() {
        return Category::where('parId', 0)->get();
    }

    public function getAllEvent() {
        return Event::all()->get();
    }

}
