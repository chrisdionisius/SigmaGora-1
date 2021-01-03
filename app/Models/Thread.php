<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Contracts\Likeable;
use App\Concerns;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model implements Likeable
{
    use Concerns\Likeable;
    protected $table = 'threads';
    protected $fillable = ['user_id','category_id','title','content','media'];
    public function thread()
    {
        return $this->hasOne('App\Models\Category');
    }

    public function getElapsedAttribute(){
        return Carbon::now()->diffInDays($this->updated_at);
    }

}
