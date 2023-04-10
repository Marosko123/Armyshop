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
            'password' => bcrypt('adminadmin'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU',
            'age' => 68,
            'is_deleted' => false
        ]);

        User::create([
            'id' => 2,
            'first_name' => 'Maros',
            'last_name' => 'Bednar',
            'email' => 'bednarmaros@arymshop.xd',
            'password' => bcrypt('bednarmaros'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU',
            'age' => 21,
            'is_deleted' => false
        ]);

        User::create([
            'id' => 3,
            'first_name' => 'Michal',
            'last_name' => 'Darovec',
            'email' => 'darovecmichal@arymshop.xd',
            'password' => bcrypt('darovecmichal'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU',
            'age' => 21,
            'is_deleted' => false
        ]);

        User::create([
            'id' => 4,
            'first_name' => 'Jozko',
            'last_name' => 'Vajda',
            'email' => 'vajdajozko@gmail.com',
            'password' => bcrypt('vajdajozko'),
            'license_picture' => null,
            'is_license_valid' => false,
            'address' => 'Bratislava Vajnory',
            'age' => 63,
            'is_deleted' => false
        ]);
    }
}