<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CommentsTableSeeder extends Seeder
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
            'userid'=>'1',
            'postid'=>'1',],

            ['content'=>'nice article',
            'created_at'=>now(),
            'updated_at'=>now(),
            'userid'=>'2',
            'postid'=>'1',],

            ['content'=>'i agree with this',
            'created_at'=>now(),
            'updated_at'=>now(),
            'userid'=>'1',
            'postid'=>'2',],
        ]);
    }
}
