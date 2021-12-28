<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        \App\Models\User::insert([
            [
                'nama'=>'Super Admin',
                'alamat'=>'Malang',
                'no_hp'=>'081259347608',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'role'=>'admin',
            ],
        ]);
    }
}
