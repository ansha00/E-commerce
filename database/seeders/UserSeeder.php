<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = Hash::make('password');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = Hash::make('password');
        $user->save();
    }
}
