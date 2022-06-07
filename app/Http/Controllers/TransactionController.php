<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    public function histmgmt(){
        if(auth()->check()){
            $trans=CarsUsers::where('user_id',auth()->id())->get();
            $cars=Car::all();
            return view('riwayat',['trans'=>$trans,'cars'=>$cars]);
        }
        return Redirect::route('dashboard');
    }
    public function histhist(Request $request){
        if(auth()->check()){
            if ($request->get('submit')=="Batal"){
                $orders=CarsUsers::find((int)$request->get('id'));
                $orders->batal=true;
                $orders->save();
                return redirect()->to(route('userCreateHist'));
            }else if ($request->get('submit')=="Menunggu Konfirmasi") {
                return view('Penyewaan.waiting', ['pesan' => $request->get('id')]);
            }else if($request->get('submit')=="Pembayaran Berhasil"){
                return view('Penyewaan.berhasil');
            }else if ($request->get('submit')=="Bayar"){
                return view('Penyewaan.pembayaran', ['pesan' => $request->get('id')]);
            }
        }
        return Redirect::route('dashboard');
    }
    public function histpay(Request $request){
        $pays=CarsUsers::where([['id','=',$request->get('id')],['user_id','=',auth()->id()]])->first();
        $pays->foto_bukti=$request->get('foto');
        $pays->lunas=true;
        $pays->save();
        return view('Penyewaan.pembayaran', ['pesan' => $request->get('id')]);
    }
    public function formmgmt(){
        return view('Penyewaan.formulir');
    }
}
