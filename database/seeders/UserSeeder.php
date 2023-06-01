<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleStaff = Role::create(['name' => 'staff']);
        $roleUser = Role::create(['name' => 'user']);

        \App\Models\User::create([
            'role_id' => $roleAdmin->id,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

       \App\Models\User::create([
            'role_id' => $roleStaff->id,
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('staff123')
        ]);

       \App\Models\User::create([
            'role_id' => $roleUser->id,
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);
    }
}
