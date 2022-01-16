<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class station_category extends Model
{
    protected $table ='station_categories';
    use HasFactory;

    public function meteorological_station()
    {
        return $this->hasMany(meteorological_stations::class);
    }
}
