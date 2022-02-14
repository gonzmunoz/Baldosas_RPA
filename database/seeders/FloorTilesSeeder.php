<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class FloorTilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('baldosas')->insert([
            'nombre' => 'Suelos cerámicos',
            'imagen' => 'suelos-ceramico.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 10,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos porcelánicos',
            'imagen' => 'suelos-porcelanico.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 29,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos de baldosa',
            'imagen' => 'suelos-baldosas.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 0,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos laminados',
            'imagen' => 'suelos-laminado.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 5,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos de parquet',
            'imagen' => 'suelos-parquet.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 20,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos de piedra natural',
            'imagen' => 'suelos-piedra-natural.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 60,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos de vinilo o PVC',
            'imagen' => 'suelos-vinilo.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 60,
        ]);

        DB::table('baldosas')->insert([
            'nombre' => 'Suelos de cemento pulido',
            'imagen' => 'suelos-cemento.jpg',
            'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20.00, $max = 45.00),
            'stock' => 60,
        ]);
    }
}
