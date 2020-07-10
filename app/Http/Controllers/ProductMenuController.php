<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\productMenu;
use App\category;


class ProductMenuController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function productList(){
    	$products = ProductMenu::orderBy('id', 'ASC')->paginate(10);
    	return view('ProductMenu.productList')->with(compact('products'));//listado o index
    }

    public function create(category $category){
    	$categories = category::all();
		return view('ProductMenu.create')->with(compact('categories'));//Formulario de registro
    }

    public function store(Request $request){

    	$product = new productMenu();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->category_id = $request->input('category_id');
    	$product->save();

    	return redirect('/products');
    }

    public function edit($id){
    	$product = productMenu::find($id);
    	$categories = category::where('id', '<>', $product->category_id)->get();
		return view('ProductMenu.edit')->with(compact('product', 'categories'));//Formulario de registro
    }

    public function update(Request $request, $id){
    	$product = productMenu::find($id);
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->category_id = $request->input('category_id');
    	$product->save();

    	return redirect('/products');
    }

    public function destroy($id){
    	$product = productMenu::find($id);
    	$product->delete();

    	return back();
    }
}
