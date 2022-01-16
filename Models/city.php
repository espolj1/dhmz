<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

class city extends Model
{
    protected $table ='cities';
    use HasFactory;

    public function station_owners()
    {
        return $this->hasMany(station_owners::class);
    }
    public function meteorological_station()
    {
        return $this->hasMany(meteorological_station::class);
    }
}
