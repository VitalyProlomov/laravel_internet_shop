<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainPage() {
        return view('mainPage');
    }

    function userProfile() {
        $id = auth()->user()->id;

        return view('userProfile');
    }

    function shoppingBag() {
        return view('shoppingBag', );
    }

//    function addProductToShoppingBag($productToAdd) {
//        dd($productToAdd);
//    }

//    function category($category) {
//        $categoryObject = Category::where('code', $category)->first();
//        return view('category', compact('category'));
//    }
}
