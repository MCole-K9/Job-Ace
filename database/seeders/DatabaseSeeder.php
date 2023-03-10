<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\OrgRole;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::factory()->createMany([
            ['name' => 'Admin'],
            ['name' => 'Candidate'],
            ['name' => 'Organization Representative'],
        ]);

        OrgRole::factory()->createMany([
            ['name' => 'Admin'],
            ['name' => 'Recruiter'],
        ]);
    }
}
