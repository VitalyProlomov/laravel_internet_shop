<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function submit(Request $req) {
        $product = new Product();
        dd($req);
        $product->setAttribute('name', $req->input('name'));
        $product->setAttribute('category_id', $req->input('category_id'));
        $product->setAttribute('code', $req->input('code'));

//        $product->id = $req->input('id');
//        $product->category_id = $req->input('category_id');
//        $product->name = $req->input('name');
//        $product->code = $req->input('code');
//        $product->description = $req->input('description');
//        $product->image = $req->input('image');
//        $product->price = $req->input('price');
//        $product->created_at = $req->input('created_at');
//        $product->updated_at = $req->input('updated_at');

        $product->save();

        return redirect()->route('/catalog');
    }


    public function addProductToBag(Request $request) {
        // current_user->shoppingBag->append(request + ',');
        return view('catalog');
    }

    public function allData() {
        return view('catalog', ['data' => Product::all()]);
    }
}
