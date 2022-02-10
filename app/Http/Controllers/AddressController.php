<?php

namespace App\Http\Controllers;

use App\Models\QuanHuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function getQuanHuyen(Request $request){
        $data['quanhuyen'] = QuanHuyen::all()->where("matp",$request->matp);
        return response()->json($data);
    }
}
