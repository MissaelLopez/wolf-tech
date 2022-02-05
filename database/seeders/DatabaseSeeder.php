<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Administrador';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->rol = 'admin';
        $admin->save();

        $missael = new User();
        $missael->name = 'Missael López';
        $missael->email = 'missaelnj8@gmail.com';
        $missael->password = Hash::make('mbLL1110');
        $missael->rol = 'admin';
        $missael->save();
    }
}
