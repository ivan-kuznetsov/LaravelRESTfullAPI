<?php

namespace App;

use App\Traits\Oderable;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use Oderable;

    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->oldestFirst();
    }
}
