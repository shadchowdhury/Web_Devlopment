<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getsessiondata(Request $request){
        if($request->session()->has('key')){
            return $request->session()->get('key');
        }else{
            return 'Session has no value';
        }
    }

    public function storesessiondata(Request $request){
        $request->session()->put('key','Tanvir Shad Chowdhury');
        return 'Value successfully added to the session';   
    }

    public function destroysessiondata(Request $request){
        $request->session()->forget('key');
        return 'Session value successfully destroyed';   
    }
}
