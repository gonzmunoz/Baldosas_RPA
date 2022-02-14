<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required',
            'contrasenia' => 'required',
        ], [
            'email.required' => 'Debes introducir un email',
            'contrasenia.required' => 'Debes introducir una contraseña'
        ]);

        $user = UserModel::where('email', $request['email'])->first();

        if ($user != null) {
            $user = UserModel::where('email', $request['email'])->first()->toArray();
            $correctPassword = Hash::check($request['contrasenia'], $user['contrasenia']);
            if (($request['email'] == $user['email']) && $correctPassword) {
                session()->put('userLogged', $user);
                $msg['icon'] = 'success';
                $msg['title'] = 'Sesión iniciada';
                $msg['text'] = 'Has iniciado sesión correctamente';
                $request->session()->flash('response-form', $msg);
                return redirect()->route('index');
            } else {
                $request->session()->flash('error-password', 'Contraseña incorrecta');
            }
        } else {
            $request->session()->flash('error-email', 'Este correo electrónico no está registrado');
        }

        return redirect()->back()->withInput($request->all());
    }

    public function logout(Request $request)
    {
        session()->forget('userLogged');
        $msg['icon'] = 'success';
        $msg['title'] = 'Sesión cerrada';
        $msg['text'] = 'Has cerrado sesión';
        $request->session()->flash('response-form', $msg);
        return redirect()->route('index');
    }


}
