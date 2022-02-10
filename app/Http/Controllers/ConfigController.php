<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ConfigController extends Controller
{

    // about us
    public function aboutUsPage(){
        $líst = Config::find(1);
        return view('admin.config.aboutUs', ['list' => $líst]);
    }

    public function aboutUsStore(Request $request){
        $obj = Config::find(1);
        $obj->aboutUsPage = $request->get('aboutUsPage');
        $obj->save();
        return redirect('/admin/index');
    }


    // contact us
    public function contactUsPage(){
        $líst = Config::find(1);
        return view('admin.config.contactUs', ['list' => $líst]);
    }

    public function contactUsStore(Request $request){
        $obj = Config::find(1);
        $obj->contactUsPage = $request->get('contactUsPage');
        $obj->save();
        return redirect('/admin/index');
    }


    //policy

    public function policyPage(){
        $líst = Config::find(1);
        return view('admin.config.policy' ,['list' => $líst]);
    }

    public function policyStore(Request $request){
        $obj = Config::find(1);
        $obj->policyPage = $request->get('policyPage');
        $obj->save();
        return redirect('/admin/index');
    }

}
