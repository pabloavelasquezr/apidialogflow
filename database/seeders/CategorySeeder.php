<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = new Category();
        $categories->name = 'Electronics';
        $categories->description = 'Electronic devices';
        $categories->save();

        $categories = new Category();
        $categories->name = 'Clothing';
        $categories->description = 'Clothing items';
        $categories->save();

        $categories = new Category();
        $categories->name = 'Furniture';
        $categories->description = 'Furniture items';
        $categories->save();

        $categories = new Category();
        $categories->name = 'Books';
        $categories->description = 'Books';
        $categories->save();

        $categories = new Category();
        $categories->name = 'Toys';
        $categories->description = 'Toys';
        $categories->save();

        $categories = new Category();
        $categories->name = 'Food';
        $categories->description = 'Food items';
        $categories->save();

        $categories = new Category();
        $categories->name = 'Stationery';
        $categories->description = 'Stationery items';
        $categories->save();
    }
}