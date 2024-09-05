<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'nama',
            'email'=>'ui@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        product::create([
            'name'=>'sofa',
            'harga'=>'$80.00',
            'foto'=>'sofa.png',
        ]);
        product::create([
            'name'=>'lampu tidur',
            'harga'=>'$37.00',
            'foto'=>'lampu k.png',
        ]);
        product::create([
            'name'=>'meja',
            'harga'=>'$900.00',
            'foto'=>'meja cantik.png',
        ]);
        product::create([
            'name'=>'miror',
            'harga'=>'$100.00',
            'foto'=>'miror.png',
        ]);
        product::create([
            'name'=>'meja kecil',
            'harga'=>'$180.00',
            'foto'=>'meja kecil.png',
        ]);
        product::create([
            'name'=>'tempat tisu',
            'harga'=>'$100.00',
            'foto'=>'tempat tisu.png',
        ]);
        product::create([
            'name'=>'jam',
            'harga'=>'$50.00',
            'foto'=>'jam.png',
        ]);
        product::create([
            'name'=>'ambalan',
            'harga'=>'$20.00',
            'foto'=>'am',
        ]);


    }
}
