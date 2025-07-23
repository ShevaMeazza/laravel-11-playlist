<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'ui ux',
            'slug' => 'ui-ux'
        ]);
        Category::create([
            'name' => 'web design',
            'slug' => 'web-desing'
        ]);
        Category::create([
            'name' => 'data analysis',
            'slug' => 'data-analysis'
        ]);
    }
}
