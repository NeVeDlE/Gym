<?php

namespace Database\Seeders;


use App\Models\Role;
use Illuminate\Database\Seeder;

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
        Role::factory()->create(['name' => 'admin']);
        Role::factory()->create(['name' => 'coach']);
        Role::factory()->create(['name' => 'trainee']);
    }
}
