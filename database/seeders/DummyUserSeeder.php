<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
        [
            'name' => 'pemiliknya',
            'email' => 'pemiliknya@gmail.com',
            'role' => 'pemilik',
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'tamunya',
            'email' => 'tamunya@gmail.com',
            'role' => 'tamu',
            'password' => bcrypt('123456'),
        ],
    ];

    foreach($userData as $key => $val){
        User::create($val);
    }


    }
}
