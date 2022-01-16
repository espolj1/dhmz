<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    protected $table ='certificates';
    use HasFactory;

    public function sensor()
    {
        return $this->belongsTo(sensor::class, 'id_sensor');
    }
}
