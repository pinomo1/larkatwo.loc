<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social')->insert([
            'name' => 'Facebook',
            'icon' => '<i class="ti-facebook"></i>',
            'url' => 'www.facebook.com',
        ]);
        DB::table('social')->insert([
            'name' => 'Twitter',
            'icon' => '<i class="ti-twitter-alt"></i>',
            'url' => 'www.twitter.com',
        ]);
        DB::table('social')->insert([
            'name' => 'Instagram',
            'icon' => '<i class="ti-instagram"></i>',
            'url' => 'www.instagram.com',
        ]);
        DB::table('social')->insert([
            'name' => 'Skype',
            'icon' => '<i class="ti-skype"></i>',
            'url' => 'www.skype.com',
        ]);
    }
}
