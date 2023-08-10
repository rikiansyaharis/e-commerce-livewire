<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::insert([
            [
                'id' => 101,
                'name' => 'Apple',
                'slug' => 'apple'
            ],
            [
                'id' => 102,
                'name' => 'Infinix',
                'slug' => 'infinix'
            ],
            [
                'id' => 103,
                'name' => 'OnePlus',
                'slug' => 'oneplus'
            ],
            [
                'id' => 104,
                'name' => 'Oppo',
                'slug' => 'oppo'
            ],
            [
                'id' => 105,
                'name' => 'Realme',
                'slug' => 'realme'
            ],
            [
                'id' => 106,
                'name' => 'Samsung',
                'slug' => 'samsung'
            ],
            [
                'id' => 107,
                'name' => 'Vivo',
                'slug' => 'vivo'
            ],
            [
                'id' => 108,
                'name' => 'Xiaomi',
                'slug' => 'xiaomi'
            ]
        ]);
    }
}
