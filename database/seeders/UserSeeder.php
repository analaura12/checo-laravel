<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'cpf' => '46063627720',
            'cellphone' => '11942058156',
            'password' => Hash::make( '12345678'),
        ]);
        DB::table('establishments')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'cnpj' => '46063627720',
            'cellphone' => '11942058156',
            'password' => Hash::make( '12345678'),
        ]);
    }
}
