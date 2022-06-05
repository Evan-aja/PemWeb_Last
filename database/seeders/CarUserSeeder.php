<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');
        for($i=0;$i<5;$i++){
            $iduser=$faker->numberBetween(1,5);
            $idcar=$faker->numberBetween(1,5);
            $datenow=date('Y-m-d H:i:s');
            $datelater=date_create($datenow);
            $days=$faker->numberBetween(1,10);
            date_add($datelater,date_interval_create_from_date_string("$days Days"));
            $datelater=date_format($datelater,'Y-m-d H:i:s');
            $harga=DB::table('cars')->where('id','=',$idcar)->pluck('harga');
            $konfirm=$faker->boolean;
            $lunas=false;
            $selesai=false;
            if($konfirm){
                $lunas=$faker->boolean;
                if($lunas){
                    $selesai=$faker->boolean;
                }
            }
            DB::table('cars_users')->insert([
                'peminjaman'=>$datenow,
                'pengembalian'=>$datelater,
                'harga'=>(int)$harga[0]*((abs(strtotime($datenow)-strtotime($datelater)))/86400),
                'konfirmasi'=>$konfirm,
                'foto_bukti'=>$faker->url(),
                'lunas'=>$lunas,
                'selesai'=>$selesai,
                'car_id'=>$idcar,
                'user_id'=>$iduser,
                'created_at'=>$datenow,
                'updated_at'=>$datenow
            ]);
        }
    }
}
