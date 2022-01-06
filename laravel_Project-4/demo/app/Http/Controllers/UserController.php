<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'Tanvir Shad Chowdhury';
        return view('user',compact('name'));
    }

    public function formCreate(){
        return view('form');
    }
    public function formSubmit(Request $request){
        $rules= [
            'name'=> 'required|max:10',
            'email'=> 'required|email',
        ];
        $customMessage= [
            'name.required'=> 'Must input your name',
            'name.max'=> 'The name can not contain more than 10 char',
            'email.required'=> 'Must input your email',
            'email.email'=> 'Use A valid email',
        ];

        $this->validate($request,$rules,$customMessage);
        return $request->all();
    }
}
