<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('User.create');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
            $this->validate(request(), [
                'nama' => 'required',
                'telepon' => 'required',
                'nik'=>'required',
                'kota_asal'=>'required',
                'password' => 'required'
            ]);

            $user = User::create(request(['nama','telepon','nik','kota_asal','password']));

            auth()->login($user);

            return redirect()->to('/');
    }
}
