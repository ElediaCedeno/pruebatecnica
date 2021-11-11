<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if(auth()->check()){
            if(auth()->user()->rol== 'admin'){
                return view('admin.index');
            }
        }
       
    }//
}
