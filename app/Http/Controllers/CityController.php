<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    function getAllCity(){
        $city  = City::all();

        return response()->json($city);
    }
}
