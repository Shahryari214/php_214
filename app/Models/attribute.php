<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attribute extends Model
{
    public function values() {
        return $this->hasMany(value::class);
    }
}
