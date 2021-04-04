<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RegistroVoto;

use Faker\Generator as Faker;

$factory->define(RegistroVoto::class, function (Faker $faker) {
    return [
        'fk_eleccion' => $faker->numberBetween($min = 1, $max = 5),
        // 'estado' => $faker->numberBetween($min = 1, $max = 30), // 28

        'estado' => $faker->randomElement(['Amazonas', 'Anzoátegui', 'Apure', 'Aragua', 'Barinas', 
        'Bolívar', 'Carabobo', 'Cojedes', 'Delta Amacuro', 'Distrito Capital', 'Falcón',
        'Guárico', 'Lara', 'Cojedes', 'Mérida', 'Miranda', 'Monagas',
        'Nueva Esparta', 'Portuguesa', 'Sucre', 'Táchira', 'Trujillo', 'Vargas',
        'Yaracuy', 'Zulia'
        ]),

        'tipo_org' =>   $faker->randomElement(['CONSEJO COMUNAL', 'COMUNA', 'OSP', 'CASA ALIMENTACION']),

        'situr' => $faker->bothify($string = '##?#???####'),
        'cedula' => $faker->unique()->numberBetween($min = 1000000, $max = 39000000),
        // 'telefono' => $faker->phoneNumber
        'telefono' => $faker->numberBetween($min = 4100000000, $max = 4260000000)

    ];
});
