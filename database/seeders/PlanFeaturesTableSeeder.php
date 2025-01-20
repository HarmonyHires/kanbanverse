<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlanFeaturesTableSeeder extends Seeder
{
    public function run()
    {
        $currentTime = Carbon::now();

        DB::table('plan_features')->insert([
            [
                'id' => 1,
                'plan_id' => 1,
                'name' => 'Task Management tools',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 2,
                'plan_id' => 1,
                'name' => 'Team Collaboration',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 3,
                'plan_id' => 1,
                'name' => 'Basic Project Tracking',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 4,
                'plan_id' => 2,
                'name' => 'Everything in Starter Plan',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 5,
                'plan_id' => 2,
                'name' => 'Team Up to 10 people',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 6,
                'plan_id' => 2,
                'name' => 'Advanced Project Tracking',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 7,
                'plan_id' => 3,
                'name' => 'Everything on Pro Plan',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 8,
                'plan_id' => 3,
                'name' => 'Analysis Team Insight',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
            [
                'id' => 9,
                'plan_id' => 3,
                'name' => 'Super Project Tracking',
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ],
        ]);
    }
}
