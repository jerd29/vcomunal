<?php

use Illuminate\Database\Seeder;
use App\RegistroVoto;

class RegistroVotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RegistroVoto::class, 10000)->create();
    }
}

 
