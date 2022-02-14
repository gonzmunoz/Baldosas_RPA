<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Gonzalo',
            'apellidos' => 'Muñoz Romero',
            'email' => 'admin@baldosasrpa.com',
            'contrasenia' => Hash::make('generation'),
        ]);

        
    }
}
