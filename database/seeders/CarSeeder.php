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
        $nama=array('Avanza','Innova','Alphard','Camry','Supra');
        $mesin=array(1300,2400,2400,3500,3000);
        $harga=array(350000,400000,450000,500000,600000);
        $jumlah=array(10,8,6,5,2);
        $foto=array("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.autofreaks.com%2Fwp-content%2Fuploads%2F2015%2F10%2FExteriorDI-L_DI-5_1-110915.jpg&f=1&nofb=1","https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimages.summitmedia-digital.com%2Ftopgear%2Fimages%2F2020%2F10%2F16%2Ftoyota-innova-1-1602823603.jpg&f=1&nofb=1","https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcontent.icarcdn.com%2Fstyles%2Farticle_cover%2Fs3%2Ffield%2Farticle%2Fcover%2F2020%2Ftoyota-alphard-mpv-sultan-yang-tak-punya-lawan-lead.jpg%3Fitok%3DGf7l3xQ4&f=1&nofb=1","https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.ihwanburhan.com%2Fwp-content%2Fuploads%2F2020%2F07%2F2021-Toyota-Camry-Exterior.jpg&f=1&nofb=1","https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpapercave.com%2Fwp%2Fwp9086318.jpg&f=1&nofb=1");
        for($i=0;$i<5;$i++){
            DB::table('cars')->insert([
//                'nama'=>$faker->name(),
//                'mesin'=>$faker->numberBetween(1299,4001),
//                'foto'=>$faker->url(),
//                'harga'=>$faker->numberBetween(49999,200001),
//                'jumlah'=>$faker->numberBetween(4,16),
                'nama'=>$nama[$i],
                'mesin'=>$mesin[$i],
                'foto'=>$foto[$i],
                'harga'=>$harga[$i],
                'jumlah'=>$jumlah[$i],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
