<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
   public function index()
{
    return view('admin.index');
}
public function products()
{
    $products = product::paginate(10);
    return view('admin.products', compact('products'));
}

public function destroy(Product $product)
{
    if ($product->image) {
        Storage::disk('public')->delete($product->image);
    }
    $product->delete();
    return redirect()->route('admin.products')->with('success', 'Producto eliminado.');
}
}
