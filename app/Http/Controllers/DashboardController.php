<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\User;
use App\Brand;
use App\Category;
use App\Product;


class DashboardController extends Controller
{
    public function index()
    {
        $slides_count = Slide::count();
        $categories_count = Category::count();
        $users_count= User::count();
        $brands_count= Brand::count();
        $users_count= User::count();
        $products_count= Brand::count();
        $users = User::all();


        return view ('dashboard.index' , compact('slides_count'  , 'categories_count' , 'users_count' , 'brands_count' , 'users_count' , 'products_count' , 'users' ) );

        
        
    }
}
