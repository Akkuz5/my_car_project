<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Toyota'],
            ['name' => 'Ford'],
            ['name' => 'Honda']
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}