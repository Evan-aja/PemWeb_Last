<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CarSeeder extends Seeder
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
            DB::table('cars')->insert([
                'nama'=>$faker->name(),
                'mesin'=>$faker->numberBetween(1299,4001),
                'foto'=>$faker->url(),
                'harga'=>$faker->numberBetween(49999,200001),
                'jumlah'=>$faker->numberBetween(4,16),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
