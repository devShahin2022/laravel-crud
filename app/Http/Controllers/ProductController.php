<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->paginate(5);
        return view('products.index',["products" => $products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $req){
        $validated = $req->validate([
            'name' => 'required|max:100|min:5',
            'description' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        // upload image
        $imageName = time().'.'.$req->image->extension();
        $req->image->move(public_path('prodcuts'),$imageName);

        $product = new Product();
        $product->name = $req->name;
        $product->description = $req->description;
        $product->image = $imageName;
        $product->save();

        return back()->withSuccess('Product created success!!!');
    }
    public function edit($id){
        $product = Product::where('id', $id)->first();
        return view("products.edit",['product' => $product]);
    }
    public function update(Request $req,$id){
        $validated = $req->validate([
            'name' => 'required|max:100|min:5',
            'description' => 'required|max:255',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $product = Product::where("id", $id)->first();


        if(isset($req->image)){
            // upload image
            $imageName = time().'.'.$req->image->extension();
            $req->image->move(public_path('prodcuts'),$imageName);
            $product->image = $imageName;
        }

        $product->name = $req->name;
        $product->description = $req->description;
        $product->save();

        return back()->withSuccess('Product created updated!!!');
    }
    public function destroy($id){
        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product created deleted!!!');
    }

}
