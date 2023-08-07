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
                'name' =>  'Samsung',
                'slug' => 'samsung',
                'status' => 1
            ],
            [
                'name' =>  'Xiaomi',
                'slug' => 'xiaomi',
                'status' => 0
            ],
        ]);
    }
}
