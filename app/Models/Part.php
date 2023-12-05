<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    //use HasFactory;
    //public $table="parts";
    public function Part()
    {
        return $this->belongToMany('App\Part');
    }
}


