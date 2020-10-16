<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statues=[[
            'name' => "le penseur",
            'artist' => "Rodin",
            'origin' => "france",
            'date' => 1880,
            'selling_price' => 5630,


        ],
        [
            'name' => "mokona",
            'artist' => "dieux",
            'origin' => "mysterieuse",
            'date' => 1984,
            'selling_price' => 9999999,
        ],
        [
            'name' => "baboski",
            'artist' => "thibault",
            'origin' => "salle tetris",
            'date' => 2020,
            'selling_price' => 2,
        ]];
        DB::table('statues')->insert($statues);
    }
}
