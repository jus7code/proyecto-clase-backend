<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        return "Listado de productos";
    }

    public function create(){
        return "Crear un producto";
    }

    public function show($id,$categoria = null){
        if ($categoria == null){
        return "producto: " . $id;
    }else {
        return "producto: ".$id."categoria: ".$categoria;
    }
    }
}
