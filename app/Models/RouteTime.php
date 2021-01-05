<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteTime extends Model
{
    use HasFactory;

    protected $table = 'route_times';

    protected $hidden = ['created_at','updated_at'];
}
