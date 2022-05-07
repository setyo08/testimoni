<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'admin',
            'alamat' => 'Jakarta',
            'tanggal_lahir'=> '2002-01-01',
            'no_hp' => '0858833111',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '1',
        ]);
        User::create([
            'nama' => 'user',
            'alamat' => 'Jakarta',
            'tanggal_lahir'=> '2002-01-01',
            'no_hp' => '0858833111',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '0',
        ]);
    }
}
