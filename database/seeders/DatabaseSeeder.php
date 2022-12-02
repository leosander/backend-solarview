<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UsersLog;
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
        User::factory()->count(25)->create();
        UsersLog::factory(25)->create();
    }
}