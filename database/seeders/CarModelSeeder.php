<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarModel;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            ['name' => 'Corolla', 'brand_id' => 1], 
            ['name' => 'Camry', 'brand_id' => 1],   
            ['name' => 'Mustang', 'brand_id' => 2],
            ['name' => 'Civic', 'brand_id' => 3]
        ];

        foreach ($models as $model) {
            CarModel::create($model);
        }
    }
}