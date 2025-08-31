<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(
            UserSeeder::class,
        );

        $this->call(
            ProfileSeeder::class,
        );

         $this->call(
            CategorySeeder::class,
        );

         $this->call(
            TagSeeder::class,
        );

        
         $this->call(
            CommentSeeder::class,
        );


        $this->call(
            PostSeeder::class,
        );

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

     
    
        
    
}
