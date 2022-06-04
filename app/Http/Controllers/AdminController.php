<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function create(){
        if(auth()->check()){
            if(ProfileController::admincheck()){
                return view('Admin.administrasi');
            }else{
                return redirect(route('dashboard'));
            }
            return redirect(route('dashboard'));
        }
    }
    public function carmgmt(){
        if(auth()->check()){
            if(ProfileController::admincheck()){
                $cars=CarController::queryAll();
                return view('Admin.aturMobil',['cars'=>$cars]);
            }else{
                return redirect(route('dashboard'));
            }
            return redirect(route('dashboard'));
        }
    }
    public function caradd(Request $request){
        if(auth()->check()){
            if(ProfileController::admincheck()){
                $this->validate(request(),[
                    'nama'=>'required',
                    'mesin'=>'required',
                    'harga'=>'required',
                    'jumlah'=>'required',
                    'foto'=>'required'
                ]);
                try{
                    Car::create(request(['nama','mesin','harga','jumlah','foto']));
                    return Redirect::back()->with('succ','Mobil berhasil ditambahkan');
                }catch(Exception $e){
                    return Redirect::back()->with('error',$e->getMessage());
                }
            }
        }
    }
    public function cardel(Request $request){
        if(auth()->check()){
            if(ProfileController::admincheck()){
                $query=DB::table('cars')->where('id','=',$request->get('id'))->delete();
                if($query<=0){
                    return Redirect::back()->with('error','ID Mobil tidak ditemukan');
                }
                return Redirect::back()->with("message","Mobil berhasil dihapus");
            }else{
                return Redirect::route('dashboard');
            }
            return Redirect::route('dashboard');
        }
        return Redirect::route('dashboard');
    }
    public function carup(Request $request){
        if(auth()->check()){
            if(ProfileController::admincheck()){
                $this->validate(request(),[
                    'id'=>'required'
                ]);
                $query=Car::find($request->get('id'));
                if($request->get('nama')!=null){
                    $query->nama=$request->get('nama');
                }
                if($request->get('mesin')!=null){
                    $query->mesin=$request->get('mesin');
                }
                if($request->get('foto')!=null){
                    $query->foto=$request->get('foto');
                }
                if($request->get('harga')!=null){
                    $query->harga=$request->get('harga');
                }
                if($request->get('jumlah')!=null){
                    $query->jumlah=$request->get('jumlah');
                }
                // Car::find($request->get('id'))->update($query);
                $query->save();
                return redirect()->to(route('adminCreateMobil'));
            }
        }
    }
}
