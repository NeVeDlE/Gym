<?php

namespace Database\Seeders;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::factory()->create([
            'name'=>'Mostafa Shaher',
            'email'=>'shaherabdullah2000@gmail.com',
            'password'=>Hash::make('1234567'),
            'role_id'=>'1',
        ])->membership()->create();

        User::factory()->create([
            'name'=>'Omar Ahmed',
            'email'=>'shaherabdullah2001@gmail.com',
            'password'=>Hash::make('1234567'),
            'role_id'=>'2',
        ])->membership()->create();
     for($i=0;$i<10;$i++) {
         User::factory()->create()->membership()->create();
     }
    }
}
