<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meteorological_station extends Model
{
    protected $table ='meteorological_stations';
    use HasFactory;

    public function city()
    {
        return $this ->belongsTo(city::class, 'id_city');
    }

    public function station_category()
    {
        return $this ->belongsTo(station_category::class, 'id_category');

    }
    public function station_type()
    {
        return $this ->belongsTo(station_type::class, 'id_type');
    }
    public function station_owner()
    {
        return $this ->belongsTo(station_owner::class, 'id_station_owner');
    }
}
