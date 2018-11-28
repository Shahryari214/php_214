<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class value extends Model
{
    public function attribute() {
        return $this->belongsTo(attribute::class);
    }
    public function product(){
        return $this->belongsToMany(product::class);
    }
}
