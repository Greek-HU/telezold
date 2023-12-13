<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = 'parts';

    protected $fillable = [
        'part_name',
    ];
    
    public function Vehicles()
    {
        return $this->belongToMany(Vehicle::class);
    }
}




