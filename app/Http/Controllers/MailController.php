<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use Illuminate\Queue\Jobs\Job;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function index(){
        $mail=DB::table('mails')
        ->select('id', 'destinatario', 'asunto','mensaje')
        ->where('id_user', auth()->user()->id)
        ->paginate(10);
        return view('email.index', compact('mail'));
        
    }
    public function create()
    {
        return view('email.create');//
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'email'=> 'required',
            'destinatario'=> 'required|email',
            'mensaje'=> 'required',
         ]); //
         $count=DB::table('mails')
        ->select('id', 'destinatario', 'asunto','mensaje')->count();
         $mail=new Mail;
         $mail->id_user=auth()->user()->id;
         $mail->id_job=$count+1;
         $mail->destinatario=$request->input('destinatario');
         $mail->asunto=$request->input('asunto');
         $mail->mensaje=$request->mensaje;
         $mail->save();

         SendEmail::dispatch($request->input('destinatio'),$request->input('asunto'));
         return redirect()->route('email.index');
         //return $request;
    }
    public function show()
    {
        $mail= Mail::paginate();

        return view('email.indexadmin', compact('mail'));//
    }
//
}
