<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function threads()
    {
        return $this->hasMany('App\Models\Thread');
    }
}
