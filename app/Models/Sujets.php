<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sujets extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'sujet';

    public function comment()
    {
        return $this->morphMany('App\Blog', 'commentable')->latest();
    }
}
