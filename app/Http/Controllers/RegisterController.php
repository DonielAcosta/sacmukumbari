<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller{
    
    public function create(){
        return view('auth.register');
    }

    public function store(){
      $this->validate(request(),[
            'name'=>'required',
            'email'=>'required|email',
            'last_name'=>'required',
            'cedula'=>'required',
            'password'=>'required|confirmed'
      ]);
        $user = User::create(request(['name','last_name','cedula','email','password']));
        auth()->login($user);
        return  redirect()->to('/');
    }
}
