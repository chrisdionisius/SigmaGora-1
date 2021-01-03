<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Contracts\Likeable;
use App\Concerns;
use App\Tag;
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
        if (Carbon::now()->diffInSeconds($this->updated_at) < 60) {
            return Carbon::now()->diffInSeconds($this->updated_at)." detik yang lalu";
        } elseif (Carbon::now()->diffInMinutes($this->updated_at) < 60) {
            return Carbon::now()->diffInMinutes($this->updated_at)." menit yang lalu";
        } elseif (Carbon::now()->diffInHours($this->updated_at) < 24) {
            return Carbon::now()->diffInHours($this->updated_at)." jam yang lalu";
        }else {
            return (Carbon::now()->diffInDays($this->updated_at)." hari yang lalu");
        }
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
