<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->name = 'Samtiago';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Esteban Otero';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
