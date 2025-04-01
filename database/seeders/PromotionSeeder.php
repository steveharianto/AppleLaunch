<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('promotions')->insert([
            [
                'title' => 'iPhone 15 Pro Max',
                'description' => 'The most powerful iPhone ever with A17 Pro chip, titanium design, and 48MP camera system.',
                'image' => 'iphone15promax.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'MacBook Air M3',
                'description' => 'Ultra-thin design with incredible performance, featuring the M3 chip and up to 18 hours of battery life.',
                'image' => 'macbookairm3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Apple Watch Series 9',
                'description' => 'Advanced health features, always-on Retina display, and the powerful S9 chip.',
                'image' => 'watchseries9.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
