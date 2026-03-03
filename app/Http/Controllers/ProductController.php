<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $prodcutlist = product::all();

        return view('product.index', ['milista' => $prodcutlist]);
    }

    public function create()
    {
        return view("product.create");
    }

    public function show($id)
    {
        return view('product.show');
    }
}
