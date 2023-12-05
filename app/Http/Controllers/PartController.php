<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartController extends Controller

{
    function getPart()
    {
        return Part::all();
    }
}
