<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $user=DB::table('users')
        ->select('id', 'name', 'email','cedula','celular', 'f_nacimiento', 'cod_ciudad')
        ->where('name', 'LIKE','%'.$texto.'%')
        ->orWhere('email', 'LIKE', '%'.$texto.'%')
        ->orWhere('cedula', 'LIKE','%'.$texto.'%')
        ->orWhere('celular', 'LIKE', '%'.$texto.'%')
        ->orderBy('id','asc')->paginate(10);
        return view('user.index', compact('user', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name'=> 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'celular'=> 'required',
            'cedula'=> 'required',
            'f_nacimiento'=> 'required',
            'cod_ciudad'=> 'required',
         ]); //
         $user=new User;
         $user->name=$request->input('name');
         $user->email=$request->input('email');
         $user->password=$request->input('password');
         $user->celular=$request->input('celular');
         $user->cedula=$request->input('cedula');
         $user->f_nacimiento=$request->f_nacimiento;
         $user->cod_ciudad=$request->input('cod_ciudad');
         $user->save();
         return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('user.edit', compact('user'));//
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $user->name=$request->input('name');
        $user->password=$request->input('password');
        $user->celular=$request->input('celular');
        $user->f_nacimiento=$request->f_nacimiento;
        $user->cod_ciudad=$request->input('cod_ciudad');
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');//
    }

}
