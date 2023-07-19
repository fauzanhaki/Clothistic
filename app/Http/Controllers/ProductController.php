<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allTrend()
    {
        $products = Product::where('is_trend', true)->get();
        $categories = Category::where('is_trend', true)->get();

        return view('trend.all-trend', compact('products', 'categories'));
    }

    public function allOutfit()
    {
        $products = Product::where('is_trend', false)->get();
        $categories = Category::where('is_trend', false)->get();

        return view('outfit.all-outfit', compact('products', 'categories'));
    }

    public function listTrend($category)
    {
        $products = Product::with('category')->whereRelation('category', 'id', $category)->get();
        $category = Category::where('id', $category)->first();

        return view('trend.list-trend', compact('products', 'category'));
    }

    public function listOutfit($category)
    {
        $products = Product::with('category')->whereRelation('category', 'id', $category)->get();
        $category = Category::where('id', $category)->first();

        return view('outfit.list-outfit', compact('products', 'category'));
    }
}
