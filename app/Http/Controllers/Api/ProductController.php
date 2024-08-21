<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();

        $data = [
            'products' => $products,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function getProductsByCategoryName($name)
    {
        $category = Category::select('categories.id', 'categories.name', 'categories.description')
            ->leftJoin('products', 'categories.id', '=', 'products.category_id')
            ->where('categories.name', 'like', '%' . $name . '%')
            ->groupBy('categories.id', 'categories.name', 'categories.description')
            ->selectRaw('sum(products.quantity) as total_products')
            ->orderBy('categories.id')
            ->get();

        if (!$category) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'category' => $category,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function getCategoriesWithProductsQuantity()
    {
        $categoriesWithProducts = Category::select('categories.id', 'categories.name', 'categories.description')
            ->leftJoin('products', 'categories.id', '=', 'products.category_id')
            ->groupBy('categories.id', 'categories.name', 'categories.description')
            ->selectRaw('sum(products.quantity) as total_products')
            ->orderBy('categories.id')
            ->get();

        $data = [
            'students' => $categoriesWithProducts,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}