<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
           ['bio'=>'full stack developer in training',
            'userid'=>'1',
            ],

           [ 'bio'=>'cs student who love coding',
             'userid'=>'2'
            ],


        ]);
    }
}
