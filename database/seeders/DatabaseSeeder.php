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
            'name' => 'Usuário',
            'email' => 'admin@gmail.com',
            'cpf' => '46063627820',
            'cellphone' => '11942058156',
            'password' => Hash::make( 'admin123'),
        ]);
        DB::table('establishments')->insert([
            'name' => 'Estabelecimento',
            'email' => 'admin@gmail.com',
            'cnpj' => '46063627820',
            'cellphone' => '11942058156',
            'profile_image' => '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',
            'password' => Hash::make( 'admin123'),
        ]);
        DB::table('products')->insert([
            'name' => 'Produto Exemplo',
            'code'=>'12',
            'description' => 'Produto teste',
            'category' => 'Teste',
            'establishment_id' => 1,
            'food_restriction' => 'Teste', 
            'number_people_served' => '1',  
            'price' => '30',
            'image' => null, 
        ]);
        DB::table('tables')->insert([
            'number' => '122', 
            'number_of_chairs' => '4',
            'description' => 'Teste', 
            'establishment_id' => 1,
        ]);
        DB::table('reserves')->insert([
            'date' => '2020-02-20',
            'hour'=>'12:02:12',
            'observation' => 'Observação teste',
            'user_id' => 1,
            'establishment_id' => 1,
            'table_id' => 1, 
            'product_id' => 1,
            'status_id' => 1,
        ]);
    }
}
