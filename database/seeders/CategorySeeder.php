<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'science',
            'desc' => 'Books related to science',
            'status' => 'active',
        ]);

        Category::create([
            'name' => 'art',
            'desc' => 'Books related to art',
            'status' => 'active',
        ]);
    }
}
