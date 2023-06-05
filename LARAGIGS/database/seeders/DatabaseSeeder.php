<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Hussien Haidar',
            'email' => 'hussienhaidar300@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
