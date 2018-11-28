<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{

    public function product() {
        return $this->belongsTo(category::class);
    }

    public function category() {
        return $this->hasMany(Product::class);
    }
}
