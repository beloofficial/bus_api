<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'from_place',
        'to_place',
        'status_id',
        'min_price',
        'max_price'
       
    ];

    protected $hidden = ['created_at','updated_at'];

    public function bus()
    {
        return $this->belongsTo('App\Models\Bus');
    }

    public function privileges()
    {
        return $this->belongsToMany('App\Models\Privilege');
    }

    public function times()
    {
        return $this->hasMany('App\Models\RouteTime');
    }

    public function scopeWithAndWhereHas($query, $relation, $constraint)
    {
        return $query->whereHas($relation, $constraint)->with([$relation => $constraint]);
    }

    public function stops()
    {
        return $this->hasMany('App\Models\Stop');
    }

    

    


}
