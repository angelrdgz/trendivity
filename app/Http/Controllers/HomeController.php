<?php

namespace App\Http\Controllers;

use Validator;
use Mail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function send(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'message' => 'required'
        ],
        [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo es requerido',
            'message.required' => 'El mensaje es requerido'
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        }

        $data = $request->all();

        try {
            Mail::send('emails.contact', ["name"=>$data["name"],"email"=>$data["email"],'mess'=>$data["message"]], function ($message) use($data) {
                $message->to($data["email"], $data["name"]);
                $message->subject('Contacto - Trendivity');
                $message->from('no-reply@trendivity.com', 'Trendivity');
            });

            return back()->with('success','Hemos enviado tu información al administrador');

        } catch (\Throwable $th) {
            throw $th;
        }        
    }
}
