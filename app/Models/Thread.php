<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use App\Contracts\Likeable;
use App\Concerns;
use App\Tag;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Thread extends Model implements Likeable, Viewable
{
    use Concerns\Likeable;
    use InteractsWithViews;

    protected $table = 'threads';
    protected $fillable = ['user_id','category_id','title','content','media'];
    
    

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

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
