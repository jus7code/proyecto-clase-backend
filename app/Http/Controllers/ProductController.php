<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return view("product.index");
    }

    public function create(){
        return view("product.create");

    }

    public function show($id,$categoria = null){
        if ($categoria == null){
        return "producto: " . $id;
        }else {
        return "producto: ".$id."categoria: ".$categoria;
        }
    }
}
