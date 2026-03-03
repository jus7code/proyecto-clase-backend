<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $prodcutlist = product::all();

        return view('product.index', ['milista' => $prodcutlist]);
    }

    public function create()
    {
        $category = category::all();

        return view("product.create", ['misCategorias' => $category]);
    }

    public function store(Request $request)
    {
        $newProduct = new product();
        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('descripcion');
        $newProduct->price = $request->get('precio');
        $newProduct->category_id = $request->get('categoria');
        
        $newProduct->save();
        return Redirect()->route('product.index');
        }
    public function show($id)
    {
        return view('product.show');
    }
}
