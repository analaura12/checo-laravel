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
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'cpf' => '46063627720',
            'cellphone' => '11942058156',
            'password' => Hash::make( '12345678'),
        ]);
        \Illuminate\Support\Facades\DB::table('establishments')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'cnpj' => '46063627720',
            'cellphone' => '11942058156',
            'password' => Hash::make( '12345678'),
        ]);
    }
}
