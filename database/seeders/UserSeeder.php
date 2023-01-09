<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        user::create([
            'name'=> 'joao',
            'email'=>'joaovictorsr26@gmail.com',
            'email_verified_at' => null,
            'admin'=> null,
            'client' => null,
            'remember_toker' => null,
            'created_at' => '2023-01-06 13:51:29',
            'updated_at' => '2023-01-06 13:51:29',
            'password'=>'12345678'
        ]);
    }
}
