<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(TipoEleccionTableSeeder::class);
         $this->call(EleccionTableSeeder::class);
         $this->call(RegistroVotoTableSeeder::class);

    }

}
