<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Plan::factory()->create([
            'name_plan' => 'Starter Plan',
            'slug' => 'starter-plan',
            'description' => 'Perfect for individuals or small teams getting started with task management',
            'price' => 0,
            'duration' => 30,
            'icon' => 'https://imgur.com/g9XZpUd',
        ]);

        Plan::factory()->create([
            'name_plan' => 'Pro Plan',
            'slug' => 'pro-plan',
            'description' => 'Helping your teams growing and that need advanced features and flexibilty',
            'price' => 30.00,
            'duration' => 30,
            'icon' => 'https://imgur.com/g9XZpUd',
            'isBest' => 'true'
        ]);

        Plan::factory()->create([
            'name_plan' => 'Enterprise Plan',
            'slug' => 'enterprise-plan',
            'description' => 'Best for large teams and enterprises with multple projects and complex workflows',
            'price' => 50.00,
            'duration' => 30,
            'icon' => 'https://imgur.com/g9XZpUd',
        ]);
    }
}
