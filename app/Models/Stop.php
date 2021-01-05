<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    protected $fillable = ['name','time'];

    public function route()
    {
        return $this->belongsTo('App\Models\Route');
    }
}
