<?php
namespace App\Concerns;

use App\Contracts\Likeable;
use App\Like;
use Illuminate\Database\Eloquent\Builder;

trait Likes
{
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function addLike(Likeable $likeable): self
    {
        if ($this->hasLiked($likeable)) {
            return $this;
        }

        (new Like)
            ->user()->associate($this)
            ->likeable()->associate($likeable)
            ->save();

        return $this;
    }

    public function removeLike(Likeable $likeable): self
    {
        if (! $this->hasLiked($likeable)) {
            return $this;
        }
        $likeable->likes()->whereHas('user', function(Builder $query) {
            $query->whereId($this->id);
            })->delete();
        return $this;
    }

    public function hasLiked(Likeable $likeable): bool
    {
        if (! $likeable->exists) {
            return false;
        }

        return $likeable->likes()->whereHas('user', function(Builder $query) {
            return $query->whereId($this->id);
            })->exists();
    }
}
?>