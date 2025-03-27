<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run database seeder.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id'  => 1,
                'level_id' => 1,
                'username' => 'admin',
                'nama'     => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id'  => 2,
                'level_id' => 2,
                'username' => 'manager',
                'nama'     => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id'  => 3,
                'level_id' => 3,
                'username' => 'staff',
                'nama'     => 'Staff/Kasir',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id'  => 4,
                'level_id' => 2,
                'username' => 'manager_dua',
                'nama'     => 'Manager 2',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id'  => 5,
                'level_id' => 2,
                'username' => 'manager56',
                'nama'     => 'Manager55',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id'  => 6,
                'level_id' => 2,
                'username' => 'manager12',
                'nama'     => 'Manager11',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id'  => 7,
                'level_id' => 3,
                'username' => 'kasir',
                'nama'     => 'ayu',
                'password' => Hash::make('12345'),
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
