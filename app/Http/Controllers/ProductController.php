<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $categories = category::all();
        view()->share("categories", $categories);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'image' => 'required',
            'price' => 'required',
            'desc' => 'required',

        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $file = $request->file('image');
        $filename = $request->slug . $file->getClientOriginalName();
        $file->move(public_path('blog'), $filename);
        $product->image=$filename;
        $product->save();


        return redirect()->route('product.index')->with('success', 'product created');

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->price = $request->price;
        $product->desc = $request->desc;

        $file = $request->file('image');
        $filename = $request->slug . $file->getClientOriginalName();
        $file->move(public_path('blog'), $filename);
        $product->image=$filename;
        $product->save();


        return redirect()->route('product.index')->with('success', 'product updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','product deleted');
    }
    public function getsubcategory(Request $request)
    {
        $subcategories = subcategory::where('category_id', $request->category)->get();
        return view('product.subcategories', compact('subcategories'));
    }
}
