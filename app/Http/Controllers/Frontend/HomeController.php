<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Get All Product For Deals Of The Day
        $dealsOfTheDays = Product::limit(10)->inRandomOrder()->get();

        // Get New Product
        $newProducts = Product::orderBy('id', 'DESC')->where('status', 1)->limit(10)->get()->toArray();

        // Get Featured Product
        $featuredProducts = Product::where('is_featured', 'Yes')->orderBy('id', 'ASC')->limit(10)->get()->toArray();

        // Get Active Category
        $activeCategories = Category::where('status', 1)->orderBy('id', 'ASC')->limit(4)->get()->toArray();


        if ($request->category) {
            $products_by_categories = DB::table('products')
                ->join('categories', 'products.category_id', 'categories.id')->select([
                    'products.id',
                    'products.product_name',
                    'products.product_regular_price',
                    'products.main_image',
                    'categories.category_name',
                ])->where('categories.url', '=', $request->category)->limit(5)->orderBy('products.id', 'DESC')->get();
        } else {
            $products_by_categories = DB::table('products')
                ->join('categories', 'products.category_id', 'categories.id')->select([
                    'products.id',
                    'products.product_name',
                    'products.product_regular_price',
                    'products.main_image',
                    'categories.category_name',
                ])->limit(5)->orderBy('products.id', 'DESC')->get();
        }


        return view('frontend.home', compact('newProducts', 'featuredProducts', 'dealsOfTheDays', 'activeCategories', 'products_by_categories'));
    }
}
