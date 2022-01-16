<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

class station_type extends Model
{
    protected $table ='station_types';
    use HasFactory;

    public function meteorological_station()
    {
        return $this->hasMany(meteorological_stations::class);
    }
}
