<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensor extends Model
{
    protected $table = 'sensors';
    use HasFactory;

    public function sensor_type()
    {
        return $this->belongsTo(sensor_type::class, 'id_sensor_type');
    }

    public function certificate()
    {
        return $this->hasMany(certificate::class);
    }
  
}
