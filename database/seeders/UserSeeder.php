<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeder extends Seeder
{
    
    //   Run the database seeds.
     
    public function run(): void
    {
        DB::table('users')->insert([
           ['name'=>'shahd',
            'email'=>'shahdhmayed@email.com',
            'password'=>bcrypt('123445'),
            'phone'=>'01034765987'],

           [ 'name'=>'shams',
            'email'=>'shamsahmed@email.com',
            'password'=>bcrypt('12455'),
            'phone'=>'01045987032'],


        ]);

        
    }
}
