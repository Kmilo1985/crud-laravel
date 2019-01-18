<?php

namespace Mckmilo\Http\Controllers;

use Illuminate\Http\Request;
use Mckmilo\Product;
use Mckmilo\Product\update;

class ProductController extends Controller
{
	// este metodo trae los porductos a la vista y los muestra en orden descendente
    public function index()
    {
    	$products = Product::orderby('id','DESC')->paginate();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }


    // este metodo sirve para previzualizar el contenido correspondiente a la celda de la tabla
    public function show($id)
    {
    	// esta variable product se puede mandar como argumento sin el simbolo "$"
    	$product = Product::find($id);
    	return view('products.show',compact('product'));
    }


    public function destroy($id)
    {
    	$product = Product::find($id);
    	$product ->delete();

    	return back()->with('info','El producto fue eliminado');
    }
}
