<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'duration', 'rate'];

    protected $with = ['director', 'genre'];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
