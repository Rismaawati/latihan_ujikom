<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Rismawati',
            'email' => 'Rismawati@gmail.com',
            'password' => bcrypt('0305'),
            'level'=>'admin'
        ]);

        
        User::create([
            'name' => 'wati',
            'email' => 'wati@gmail.com',
            'password' => bcrypt('0305'),
            'level'=>'operator'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
