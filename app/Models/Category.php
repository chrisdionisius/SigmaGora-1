<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';
    protected $fillable = ['category_name'];
    
    public function threads()
    {
        return $this->hasMany('App\Models\Thread')->orderBy('updated_at','desc')->paginate(5);
    }
}
