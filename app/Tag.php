<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'Tags';
    protected $fillable = ['name','slug'];

    public function threads()
    {
        return $this->belongsToMany('App\Models\Thread')->orderBy('updated_at','desc')->paginate(5);
    }
}
