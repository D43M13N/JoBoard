<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        DB::statement("SET foreign_key_checks = 0");
        DB::table('job_listings')->truncate();
        DB::table('users')->truncate();
        DB::statement("SET foreign_key_checks = 1");

        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class); 
    }
}
