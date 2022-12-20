<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //compact method
        $title = "Welcome to my Laravel course";
        $description = "Created by Eman";

        $data = [
            'product1' => 'iPhone',
            'product2' => 'Samsung'
        ];
      // return view('products.index', compact('title','description'));
        //return view('products.index')->with('data',$data);

        //pass directly in the view
        return view('products.index',[
            'data' => $data
        ]);
    }
    public function show($name){
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];

        return view('products.index',[
                'products'=> $data[$name] ?? 'Product ' . $name. ' does not exist'

            ]);
    }












}
