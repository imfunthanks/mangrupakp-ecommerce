<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elektronika extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class, 'elektronika_id', 'id');
    }
}
