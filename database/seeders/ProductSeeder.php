<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'The Jam', 'title' => 'Modern World','price' => 399],
            ['name' => 'Amy Winehouse', 'title' => 'Back to Black','price' => 299],
            ['name' => 'Nirvana', 'title' => 'Nevermind','price' => 499],
            ['name' => 'Radiohead', 'title' => 'OK Computer','price' => 599],
            ['name' => 'Daft Punk', 'title' => 'Discovery','price' => 699],
            ['name' => 'Adele', 'title' => '21','price' => 399],
            ['name' => 'Coldplay', 'title' => 'Parachutes','price' => 299],
            ['name' => 'The Beatles', 'title' => 'Abbey Road','price' => 799],
            ['name' => 'Kendrick Lamar', 'title' => 'DAMN.','price' => 499],
            ['name' => 'Taylor Swift', 'title' => '1989','price' => 599],
        ];

        foreach($products as $product) {
            Product::create([
                'name' => $product['name'],
                'title' => $product['title'],
                'price' => $product['price'],
            ]);
        }
    }
}