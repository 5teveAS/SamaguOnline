<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::table('users')->insert([
            'employee_id' => 1,
            'user_name' => 'Steve Arce',
            'email' => 'correo@gmail.com',
            'role' => 'Administrador',
            'password' => bcrypt('123')
        ]);
    }
}
