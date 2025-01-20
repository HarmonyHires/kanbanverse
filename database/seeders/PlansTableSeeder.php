<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlansTableSeeder extends Seeder
{
    public function run()
    {
        $currentTime = Carbon::now();

        DB::table('plans')->insert([
            [
                'id' => 1,
                'icon' => 'jMKcBcBfphEGmwzScnSa9WWJR80jOOpUT8grPnxE.webp',
                'name_plan' => 'Starter Plan',
                'slug' => 'starter-plan',
                'description' => 'Perfect for individuals or small teams getting started with task management',
                'price' => 0.00,
                'duration' => 30,
                'isBest' => 0,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 2,
                'icon' => 'cNw4zBQDZtOzr5bTJBOWm39jHIWDeT7VEftEdIGd.webp',
                'name_plan' => 'Pro Plan',
                'slug' => 'pro-plan',
                'description' => 'Helping your teams growing and that need advanced features and flexibilty',
                'price' => 30.00,
                'duration' => 30,
                'isBest' => 1,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 3,
                'icon' => 'VsLlvqKp3M4BrOOvILqQkUJOWVmc1H8bDcYocoZi.webp',
                'name_plan' => 'Enterprise Plan',
                'slug' => 'enterprise-plan',
                'description' => 'Best for large teams and enterprises with multple projects and complex workflows',
                'price' => 50.00,
                'duration' => 30,
                'isBest' => 0,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ]);
    }
}
