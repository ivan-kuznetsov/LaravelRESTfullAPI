<?php

namespace App;

use App\Traits\Oderable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Oderable;

    protected $fillable = ['body'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
