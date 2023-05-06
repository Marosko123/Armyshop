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
            'role' => 'admin',
            'password' => bcrypt('adminadmin'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU,842 16,Bratislava,Slovakia',
            'age' => 68,
            'is_deleted' => false,
            'phone' => '+421904905972'
        ]);

        User::create([
            'id' => 2,
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin1@armyshop.xd',
            'role' => 'admin',
            'password' => bcrypt('adminadmin'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU,842 16,Bratislava,Slovakia',
            'age' => 68,
            'is_deleted' => false,
            'phone' => '+421904905972'
        ]);

        User::create([
            'id' => 3,
            'first_name' => 'Maros',
            'last_name' => 'Bednar',
            'email' => 'bednarmaros@arymshop.xd',
            'role' => 'user',
            'password' => bcrypt('bednarmaros'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU,842 16,Bratislava,Slovakia',
            'age' => 21,
            'is_deleted' => false,
            'phone' => '+421904905972'
        ]);

        User::create([
            'id' => 4,
            'first_name' => 'Michal',
            'last_name' => 'Darovec',
            'email' => 'darovecmichal@arymshop.xd',
            'role' => 'user',
            'password' => bcrypt('darovecmichal'),
            'license_picture' => null,
            'is_license_valid' => true,
            'address' => 'FIIT STU,842 16,Bratislava,Slovakia',
            'age' => 21,
            'is_deleted' => false,
            'phone' => '+421904905972'
        ]);

        User::create([
            'id' => 5,
            'first_name' => 'Jozko',
            'last_name' => 'Vajda',
            'email' => 'vajdajozko@gmail.com',
            'role' => 'user',
            'password' => bcrypt('vajdajozko'),
            'license_picture' => null,
            'is_license_valid' => false,
            'address' => '',
            'age' => 63,
            'is_deleted' => false,
            'phone' => '+421904905972'
        ]);
    }
}