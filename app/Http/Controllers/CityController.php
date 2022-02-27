<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function city(Request $request, City $city) {
        $prefVal = $request['prefectures_val'];
        $cities = $city->where('prefecture_id', $prefVal)->get();
        return $cities;
    }
        
}

