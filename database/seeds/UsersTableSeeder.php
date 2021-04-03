<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jonathan Ruiz',
            'email' => 'jerd13jerd13@gmail.com',
            'password' => bcrypt('jerd4512838')

        ]);
    }
}
