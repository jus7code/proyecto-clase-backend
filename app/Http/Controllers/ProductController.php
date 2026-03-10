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
        $prodcutlist = product::paginate(9);

        return view('product.index', ['milista' => $prodcutlist]);
    }

    public function create()
    {
        $category = category::all();

        return view("product.create", ['misCategorias' => $category]);
    }

    public function store(Request $request)
    {
        // validacion 
        $request->validate(
            [
                'nombre'=>'required|min:5|max:255',
                'descripcion'=>'required',
                'precio'=>'required|numeric',
                'categoria'=>'required|exist:categories,id',
                'imagen'=>'required|image',
            
            ]
        );

        $newProduct = new product();
        $newProduct->name = $request->get('nombre');
        $newProduct->description = $request->get('descripcion');
        $newProduct->price = $request->get('precio');
        $newProduct->category_id = $request->get('categoria');
        
        if($request->hasFile('imagen')){
            $ruta = $request->file('imagen')->store('imagenes','public');
            $newProduct->image=$ruta;
        }else{
            $newProduct->image="no hay ruta";
        }
        
        $newProduct->save();
        return Redirect()->route('product.index');
        }
    public function show($id)
    {
        return view('product.show');

    }
    public function destroy(product $product){
        $product->delete();
        return redirect()->route('product.index');
    }
}
