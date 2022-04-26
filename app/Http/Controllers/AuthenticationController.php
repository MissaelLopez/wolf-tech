<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function signinView()
    {
        return view('signin');
    }

    public function signin(Request $request)
    {
        $data = $request->only('email', 'password');
        $user = User::where('email', $data['email'])->first();
        if ( $user ) {
            if ( Auth::attempt( $data ) ) {
                $request->session()->put('authenticated', $data['email']);
                if ( $user->rol == 'admin' || $user->rol == 'editor' ) {
                    $request->session()->put('admin', $data['email']);
                    return redirect()->intended('/dashboard/editors');
                } else {
                    $request->session()->put('user', $data['email']);
                    return redirect()->intended('/');
                }
                
            } else {
                return view('signin', ['msg' => 'Contraseña Incorrecta']);
            }
        } else {
            return view('signin', ['msg' => 'El usuario no existe']);
        }
    }

    public function signupView()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {        
        $data = $request->only('username', 'email', 'password');
        if ( preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $data["username"]) && preg_match("/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}+$/", $data["email"]) && preg_match("/^[0-9a-zA-Z]/", $data["password"]) ) {
            $user = User::where('name', $data['username'])->first();
            if ( $user != null ) {
                return view('signup', ['msg' => 'El nombre de usuario ya existe. Prueba con uno diferente']);
            }

            $user = User::where('email', $data['email'])->first();
            if ( $user != null ) {
                return view('signup', ['msg' => 'El correo ya se encuentra registrado. Prueba con uno diferente']);
            }

            $newUser = new User();
            $newUser->name = $data['username'];
            $newUser->email = $data['email'];
            $newUser->password = Hash::make($data['password']);
            $newUser->rol = 'reader';
            $newUser->save();
            $request->session()->put('authenticated', $data['email']);
            return redirect()->intended('/');
        } else {
            return view('signup', ['msg' => 'Ha ocurrido un error. Intenta de nuevo']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('authenticated');
        $request->session()->flush();
        return redirect()->intended('/');
    }
}
