<?php

use App\TipoEleccion;

use Illuminate\Database\Seeder;

class TipoEleccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            ['tipo_eleccion' => 'Presidencial'],
            ['tipo_eleccion' => 'Estadal'],
            ['tipo_eleccion' => 'Alcaldes y Consejales'],
            ['tipo_eleccion' => 'Consejales'],
            ['tipo_eleccion' => 'Referéndum']
        ];
    
    foreach ($data as $tipoeleccion) {
        TipoEleccion::create($tipoeleccion);
    };

}

}
