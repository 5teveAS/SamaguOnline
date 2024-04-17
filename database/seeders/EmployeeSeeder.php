<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('employees')->insert([
            'identification' => "1-1417-0568",
            'name' => 'Jose David',
            'first_last_name' => 'Rodríguez',
            'second_last_name' => 'Arce',
            'gender' => 'Masculino',
            'email' => 'correo@gmail.com',
        ]);

    }
}
