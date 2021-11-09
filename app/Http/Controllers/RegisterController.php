<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(){
       $this->validate(request(), [
           'name'=> 'required',
           'email'=> 'required|email',
           'password'=> 'required',
           'celular'=> 'required',
           'cedula'=> 'required',
           'f_nacimiento'=> 'required',
           'cod_ciudad'=> 'required',
        ]); 
       $user = User::create(request(['name', 'email', 'password', 'celular', 'cedula', 'f_nacimiento','cod_ciudad']));
       auth()-> login($user);
       redirect()->to('/');
    } 

}
