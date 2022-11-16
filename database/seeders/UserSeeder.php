<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create filament admin
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@test.test',
            'password' => Hash::make('12341234'),
            'email_verified_at' => now(),
        ]);
    }
}
