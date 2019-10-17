<?php

namespace App\Http\Controllers;

use Validator;

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

    }
}
