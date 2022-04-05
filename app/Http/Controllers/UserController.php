<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\String_;

class UserController extends Controller
{

    public function deleteUser($id)
    {
        dd($id);
        User::find($id)->delete();
    }


    public function allData()
    {
        return view('adminPanel', ['data' => User::all()]);
    }


    public function addProduct($id)
    {
        $i = Auth()->user();


        if ($i->current_bag == null) {
            $i->current_bag = $id;
            // User::all()->find(Auth()->user())->current_bag = "23435";
        } else {
            $i->current_bag .= " " . $id;
        }
        $i->update();

        return redirect()->route('/catalog');
    }


}
