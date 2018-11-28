<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function subcategory() {
        return $this->belongsTo(subcategory::class);
    }
    public function file() {
        return $this->hasone(file::class);
    }
    public function values() {
        return $this->belongsToMany(value::class);
    }
}
