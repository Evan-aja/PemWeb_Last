<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            DB::table('users')->insert([
                'nama'=>$faker->name(),
                'nik'=>$faker->numberBetween(200000000000000,240000000000000),
                'password'=>Hash::make($faker->password()),
                'telepon'=>$faker->phoneNumber(),
                'kota_asal'=>$faker->city(),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
