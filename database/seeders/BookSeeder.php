<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $library1 =Library::firstWhere('name', 'central Library');
        $library2 = Library::firstWhere('name', 'Science Library');

        Book::create([

            'name' => '1introduction to Programming',
            'status' => 'active',
            'library_id' => $library1->id,
            'category_id' => Category::first()->id, // 1
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);


        Book::create([

            'name' => '2introduction to Programming',
            'status' => 'active',
            'library_id' => $library2->id,
            'category_id' => Category::skip(1)->first()->id, // 2
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);
        Book::create([

            'name' => '3introduction to Programming',
            'status' => 'active',
            'library_id' => $library2->id,
            'category_id' => Category::skip(1)->first()->id, // 2
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);
        Book::create([

            'name' => '4introduction to Programming',
            'status' => 'active',
            'library_id' => $library2->id,
            'category_id' => Category::skip(1)->first()->id, // 2
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);
        Book::create([

            'name' => '5introduction to Programming',
            'status' => 'active',
            'library_id' => $library2->id,
            'category_id' => Category::skip(1)->first()->id, // 2
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);
        Book::create([

            'name' => '6introduction to Programming',
            'status' => 'active',
            'library_id' => $library2->id,
            'category_id' => Category::skip(1)->first()->id, // 2
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);
        Book::create([

            'name' => '7introduction to Programming',
            'status' => 'active',
            'library_id' => $library2->id,
            'category_id' => Category::skip(1)->first()->id, // 2
            'description' => ' for beginner-frendly',
            'author' => 'John Doe',
            'price' => 29.99,
            'compare_price' => 35.00,
            'rating' => 4.3,
            'featured' => true,

        ]);




    }
}
