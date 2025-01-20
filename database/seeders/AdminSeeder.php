<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = Str::uuid()->toString();

        Role::create(['name' => 'superadmin', 'guard_name' => 'web']);

        $user = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@kanbanverse.com',
            'email_verified_at' => now(),
            'password' => Hash::make('kanbanverse0701*'),
            'remember_token' => Str::random(10),
            'status' => 'active',
            'identifier_prefix' => str_replace('-', '', $uuid),
        ]);

        $user->assignRole('superadmin');
    }
}
