<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Smartphone',
                'description' => 'Latest model smartphone with advanced features',
                'price' => 699.99,
                'stock' => 50,
                'category_id' => 1, // Electronics
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Comfortable cotton t-shirt available in various sizes',
                'price' => 19.99,
                'stock' => 200,
                'category_id' => 2, // Clothing
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novel Book',
                'description' => 'Bestselling fiction novel by a renowned author',
                'price' => 14.99,
                'stock' => 100,
                'category_id' => 3, // Books
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptop',
                'description' => 'High-performance laptop suitable for gaming and work',
                'price' => 1299.99,
                'stock' => 30,
                'category_id' => 1, // Electronics
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jeans',
                'description' => 'Stylish denim jeans with a comfortable fit',
                'price' => 49.99,
                'stock' => 150,
                'category_id' => 2, // Clothing
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cookbook',
                'description' => 'A collection of delicious recipes from around the world',
                'price' => 24.99,
                'stock' => 80,
                'category_id' => 3, // Books
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jacket',
                'description' => 'Warm and stylish jacket for winter season',
                'price' => 89.99,
                'stock' => 100,
                'category_id' => 2, // Clothing
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science Fiction Book',
                'description' => 'A thrilling science fiction novel set in the future',
                'price' => 19.99,
                'stock' => 120,
                'category_id' => 3, // Books
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'description' => 'Noise-cancelling headphones with superior sound quality',
                'price' => 199.99,
                'stock' => 75,
                'category_id' => 1, // Electronics
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BTS Arirang',
                'description' => 'A collection of songs by BTS and their journey to success',
                'price' => 15.99,
                'stock' => 50,
                'category_id' => 3, // Books
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with long battery life',
                'price' => 29.99,
                'stock' => 120,
                'category_id' => 1, // Electronics
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
        //
    }
}
