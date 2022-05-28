<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;

class SessionController extends Controller
{
    public function create(){
        return view('User.login');
    }
    public function store(){
        if (auth()->attempt(request(['telepon', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Nomor telepon atau password salah'
            ]);
        }
        return redirect()->to('/');
    }
    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
    public static function navbar(){
        if(auth()->check()){
            if (ProfileController::admincheck()){
                return view('Partials.navbarPemilik');
            }else{
                return view('Partials.navbar');
            }
        }else{
            return view('Partials.navbar');
        }
    }
}
