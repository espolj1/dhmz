<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensor_type extends Model
{
    protected $table = 'sensors_types';
    use HasFactory;

    public function sensor()
    {
        return $this ->hasMany(sensor::class);
    }
}
