<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model 
{
    protected $table = 'vehicles';

    protected $fillable = [
        'carBrand',
        'carBrandType',
    ];

    public function Parts()
    {
        return $this-belongToMany(Part::class);
    }
}
