<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id' => 1,
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@armyshop.xd',
            'password' => bcrypt('admin'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU',
            'age' => 68
        ]);

        User::create([
            'id' => 2,
            'first_name' => 'Marosko',
            'last_name' => 'Bednar',
            'email' => 'marosko@arymshop.xd',
            'password' => bcrypt('marosko'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU',
            'age' => 21
        ]);

        User::create([
            'id' => 3,
            'first_name' => 'Misko',
            'last_name' => 'Darovec',
            'email' => 'misko@arymshop.xd',
            'password' => bcrypt('misko'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU',
            'age' => 21
        ]);

        User::create([
            'id' => 4,
            'first_name' => 'Jozko',
            'last_name' => 'Vajda',
            'email' => 'jozko@centrum.sk',
            'password' => bcrypt('jozko'),
            'license_picture' => null,
            'is_license_valid' => false,
        ]);
    }
}