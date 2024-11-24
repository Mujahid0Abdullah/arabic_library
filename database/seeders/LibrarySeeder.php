<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Library::create([
            'name' => 'central Library',
            'description' => 'Main library with information',
            'status' => 'active',
            'date' => '2024-01-01   '
        ]);
        Library::create([
            'name' => 'Science Library',
            'description' => 'Main library with information',
            'status' => 'active',
            'date' => '2024-02-01   '
        ]);




    }
}
