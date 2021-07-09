<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Crud extends Controller
{

    public function getAll()
    {
        $result = Product::all();
        return $result;
    }

    public function getById($id)
    {
        $result = Product::where('id', "$id")->get();
        return $result;
    }

    public function post($productName, $catergoryId)
    {
        $_product = new Product;
        $_product->name = $productName;
        $_product->category_id = $catergoryId;
        $_product->price = 10.0;
        $_product->save();
        return $productName;
    }

    public function update($id, $productName)
    {
        $_product = Product::find($id);
        $_product->name = $productName;
        $_product->save();
        return $_product;
    }


    public function delete($id)
    {
        Product::where('id', "$id")->delete();
        return "Deleted";
    }
}
