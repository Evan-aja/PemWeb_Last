<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function create(){

    }
    public static function queryAll(){
        $result=Car::all();
        return $result;
    }
}
