<?php

namespace Database\Seeders;

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
        \App\Models\User::create
        (
            [
            'first_name' => 'Usuário',
            'last_name' => 'Teste',
            'email' => 'usuario@teste.com.br',
            'password' => bcrypt( 'senha123' ),
            ],
        );
        
    }
}