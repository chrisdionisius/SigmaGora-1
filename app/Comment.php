<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Comment extends Model
{
    public function commentable(){
        return $this->morphTo();
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
}