<?php

use App\Eleccion;

use Illuminate\Database\Seeder;

class EleccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'fk_tipo_eleccion' => '1',
                'fecha_eleccion' => '03-04-2021',
                'status_eleccion' => '1'
            ],
            [
                'fk_tipo_eleccion' => '2',
                'fecha_eleccion' => '03-02-2021',
                'status_eleccion' => '0'
            ],
            [
                'fk_tipo_eleccion' => '3',
                'fecha_eleccion' => '03-01-2021',
                'status_eleccion' => '0'
            ],
            [
                'fk_tipo_eleccion' => '5',
                'fecha_eleccion' => '21-08-2020',
                'status_eleccion' => '0'
            ],
            [
                'fk_tipo_eleccion' => '4',
                'fecha_eleccion' => '21-08-2020',
                'status_eleccion' => '0'
            ]
        ];
    
    foreach ($data as $eleccion) {
        Eleccion::create($eleccion);
    };
    }
}
