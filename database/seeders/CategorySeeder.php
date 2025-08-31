<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
           ['name'=>'technology',
            'description'=>'posts about programing',
            ],

           [ 'name'=>'health',
             'description'=>'tips about fitness'
            ],


        ]);
    }
}
