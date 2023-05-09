<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('header')->insert([
            'title' => 'Tours & Travels',
            'subtitle' => 'Amazing Places on earth',
            'date' => date("Y-m-d"),
        ]);
    }
}
