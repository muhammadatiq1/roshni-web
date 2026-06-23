<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create the Default Admin User
        User::updateOrCreate(
            ['email' => 'admin@roshnicare.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'), // default password
            ]
        );

        // 2. Seed the Dynamic Site Content
        $this->call([
            SiteContentSeeder::class,
        ]);
    }
}
