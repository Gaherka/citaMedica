<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Karla',
            'email' => 'karla@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('B5TetDL9smFy-3H'), // password
            'cedula' => '041289368',
            'address' => 'San Salvador',
            'phone' => '75853125',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Gabriel',
            'email' => 'gabher@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('OgRwMICz'), // password
            'role' => 'paciente',
        ]);

        User::create([
            'name' => 'Michel',
            'email' => 'michelh@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('lOm8sy9P'), // password
            'role' => 'doctor',
        ]);

        User::factory()
            ->count(50)
            ->state(['role' => 'paciente'])
            ->create();
    }
}
