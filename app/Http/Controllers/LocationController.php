<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Ward;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getCity (){
        return City::all();
    }

    public function getDistrict (Request  $request){
        $cityId = $request->cityId;
        return District::where('matp', $cityId)->get();
    }

    public function getWard (Request  $request){
        $districtId = $request->districtId;
        return Ward::where('maqh', $districtId)->get();
    }
    public function getForm(Request  $request){
        return view('demo');
    }
}
