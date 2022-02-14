<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class BudgetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // Presupuestos con datos aleatorios (Usando Faker)

        for ($i = 0; $i < 20; $i++) {
            //$currentDate = $faker->dateTimeBetween($startDate = '+7days', $endDate = '+1month', $timezone = null);
            $currentDate = new DateTime();
            $requestDate = $faker->dateTimeBetween($currentDate, $endDate = '+1month', $timezone = null);
            $name = $faker->name;
            DB::table('presupuestos')->insert([
                'nombre_apellidos' => $name,
                'email' => str_replace(" ", "_", $name). "@mail.com",  
                'telefono' => $faker->randomNumber($nbDigits = 9, $strict = false),
                'direccion' => $faker->address,
                // 'codigo_postal' => $faker->randomNumber($nbDigits = 5, $strict = false),
                'codigo_postal' => $faker->numberBetween($min = 10000, $max = 52000),
                'metros_cuadrados' => $faker->numberBetween($min = 20, $max = 1000),
                'tipo_habitacion' => $faker->randomElement($array = array('Salón', 'Cocina', 'Baño', 'Dormitorio', 'Patio')),
                'id_baldosa' => $faker->numberBetween($min = 1, $max = 8),
                'fecha_solicitud' => $requestDate,
                'fecha_finalizacion' => $faker->dateTimeBetween($startDate = $currentDate, $endDate = '+2months', $timezone = null),
                'validado' => $faker->numberBetween($min = 0, $max = 1),
                'aprobado' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
