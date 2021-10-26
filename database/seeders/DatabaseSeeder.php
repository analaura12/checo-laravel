<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Laura',
            'email' => 'laura@gmail.com',
            'cpf' => '46063627820',
            'cellphone' => '11942058156',
            'password' => Hash::make( 'ana12345'),
        ]);
        DB::table('establishments')->insert([
            'name' => 'Estabelecimento',
            'email' => 'ana@gmail.com',
            'cnpj' => '46063627820',
            'cellphone' => '11942058156',
            'password' => Hash::make( 'ana12345'),
        ]);
    }
}
