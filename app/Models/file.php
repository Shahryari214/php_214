<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    public function product() {
        return $this->belongsTo(product::class);
    }
}
