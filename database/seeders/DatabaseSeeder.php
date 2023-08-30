<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Joe Doe',
            'email' => 'joe@email.com',
            'password' => '123456',

        ]);
        \App\Models\User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'jane@email.com',
            'password' => '123456',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'password' => 'root',
        ]);

        \App\Models\Listing::factory(30)->create([
            'by_user_id' => 1
        ]);
        \App\Models\Listing::factory(30)->create([
            'by_user_id' => 2
        ]);
        \App\Models\Listing::factory(10)->create([
            'by_user_id' => 3
        ]);
    }
}
