<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function views(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('User.profile');
    }
    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $this->validate(request(), [
            'nama' => 'required',
            'telepon' => 'required',
            'nik'=>'required',
            'kota_asal'=>'required'
        ]);

        $user=User::find(Auth::user()->id);
        $user->nama=$request->get('nama');
        $user->nik=$request->get('nik');
        $user->telepon=$request->get('telepon');
        $user->kota_asal=$request->get('kota_asal');

        $user->save();

        return redirect()->to(route('profView'));
    }
}
