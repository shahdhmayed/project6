<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('comments')->insert([
           ['content'=>'full stack developer in training',
            'created_at'=>now(),
            'updated_at'=>now(),
            'userid'=>'1'
            ],



        ]);
    }
}
