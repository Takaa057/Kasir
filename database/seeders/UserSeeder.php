<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'Role' => 'admin',
                'password' => bcrypt('admin')
            ],
            [
                'name' => 'petugas',
                'email' => 'petugas@gmail.com',
                'Role' => 'petugas',
                'password' => bcrypt('petugas')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
