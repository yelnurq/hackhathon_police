<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'employee1',
                'fullname' => 'Ахметов А.А',
                'rank' => 'Старший лейтенант',
                'password' => Hash::make('password'),
                'is_admin' => false, 
            ],
            [
                'username' => 'employee2',
                'fullname' => 'Дулатович М.У',
                'rank' => 'Капитан',
                'password' => Hash::make('password'),
                'is_admin' => false, 
            ],
            [
                'username' => 'employee3',
                'fullname' => 'Серикбекович Е.С',
                'rank' => 'Генерал-полковник',
                'password' => Hash::make('password'),
                'is_admin' => false, 
            ],
            [
                'username' => 'admin',
                'fullname' => 'Олег Евгеньевич Фомин',
                'rank' => 'Инструктор',
                'password' => Hash::make('password'),
                'is_admin' => true, 
            ],
        ];

        User::insert($users);
    }
}
