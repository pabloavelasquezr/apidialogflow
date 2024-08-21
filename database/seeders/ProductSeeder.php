<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product = new Product();
        $product->name = 'Laptop';
        $product->description = 'A laptop computer';
        $product->quantity = 100;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Pc';
        $product->description = 'A personal computer';
        $product->quantity = 200;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Smartwatch';
        $product->description = 'A smartwatch';
        $product->quantity = 50;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Smart TV';
        $product->description = 'A smart TV';
        $product->quantity = 500;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = 'T-shirt';
        $product->description = 'A t-shirt';
        $product->quantity = 200;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = 'Dress';
        $product->description = 'A dress';
        $product->quantity = 50;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = 'Pants';
        $product->description = 'A pair of pants';
        $product->quantity = 500;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = 'Sofa';
        $product->description = 'A sofa';
        $product->quantity = 50;
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->name = 'Chair';
        $product->description = 'A chair';
        $product->quantity = 100;
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->name = 'Harry Potter';
        $product->description = 'A book';
        $product->quantity = 500;
        $product->category_id = 4;
        $product->save();

        $product = new Product();
        $product->name = 'Toy doll';
        $product->description = 'A toy doll';
        $product->quantity = 1000;
        $product->category_id = 5;
        $product->save();

        $product = new Product();
        $product->name = 'Toy car';
        $product->description = 'A toy car';
        $product->quantity = 1000;
        $product->category_id = 5;
        $product->save();

        $product = new Product();
        $product->name = 'Eggs';
        $product->description = 'A dozen eggs';
        $product->quantity = 100;
        $product->category_id = 6;
        $product->save();

        $product = new Product();
        $product->name = 'Bread';
        $product->description = 'A loaf of bread';
        $product->quantity = 100;
        $product->category_id = 6;
        $product->save();

        $product = new Product();
        $product->name = 'Pen';
        $product->description = 'A pen';
        $product->quantity = 1000;
        $product->category_id = 7;
        $product->save();

        $product = new Product();
        $product->name = 'Smartphone';
        $product->description = 'A smartphone';
        $product->quantity = 100;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = 'Jeans';
        $product->description = 'A pair of jeans';
        $product->quantity = 200;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = 'Table';
        $product->description = 'A table';
        $product->quantity = 50;
        $product->category_id = 3;
        $product->save();

        $product = new Product();
        $product->name = 'The Great Gatsby';
        $product->description = 'A book';
        $product->quantity = 500;
        $product->category_id = 4;
        $product->save();

        $product = new Product();
        $product->name = 'Doll';
        $product->description = 'A doll';
        $product->quantity = 1000;
        $product->category_id = 5;
        $product->save();

        $product = new Product();
        $product->name = 'Milk';
        $product->description = 'A carton of milk';
        $product->quantity = 100;
        $product->category_id = 6;
        $product->save();

        $product = new Product();
        $product->name = 'Pencil';
        $product->description = 'A pencil';
        $product->quantity = 1000;
        $product->category_id = 7;
        $product->save();
    }
}