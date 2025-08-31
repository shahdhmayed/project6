<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
           ['title'=>'first post',
            'created_at'=>now(),
            'updated_at'=>now(),
            'content'=>'my first post about sports',
            'userid'=>'1',
            'commentid'=>'2'],

           

        ]);
    }
}
