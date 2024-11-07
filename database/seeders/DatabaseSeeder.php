<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create a test user
        User::firstOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password'), // Parolni shifrlash
        ]);

        // Create 100 users
        User::factory(100)->create();

        // Add six roles
        $roles = [
            'admin',
            'editor',
            'author',
            'contributor',
            'subscriber',
            'user',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['name' => $role],
                ['description' => 'This is a ' . $role . ' role.']
            );
        }

        // Get all roles
        $allRoles = Role::all();

        // Assign roles to users
        User::all()->each(function ($user) use ($allRoles) {
            // Assign each user 1 to 3 random roles
            $rolesToAttach = $allRoles->random(rand(1, 3))->pluck('id');
            $user->roles()->attach($rolesToAttach);
        });
    }
}
