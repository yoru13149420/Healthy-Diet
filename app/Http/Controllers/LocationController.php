<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Town;

class LocationController extends Controller
{
    // 取得所有縣市
    public function getCities()
    {
        $cities = City::select('city_id', 'city_name')->get(); 
        return response()->json($cities);
    }

    // 根據縣市ID取得對應的鄉鎮區域
    public function getTownsByCity($cityId)
    {
        $towns = Town::where('city_id', $cityId)->select('town_id', 'town_name')->get(); 
        return response()->json($towns);
    }
}
