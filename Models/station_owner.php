<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class station_owner extends Model
{
    protected $table ='station_owners';
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(city::class, 'id_city');

    }
    public function meteorological_station()
    {
        return $this->hasMany(meteorological_station::class);
    }
} 

