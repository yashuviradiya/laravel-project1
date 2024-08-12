<?php

namespace App\Http\Controllers;

use App\Models\Product1;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class Product1Controller extends Controller
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
        $products = Product1::get();
        return view('product1.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product1.create');
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

        $product = new Product1();
        $product->name = $request->name;
        $product->slug = \Str::slug($request->name);
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $file = $request->file('image');
        $filename = $request->slug . $file->getClientOriginalName();
        $file->move(public_path('product'), $filename);
        $product->image=$filename;
        $product->save();


        return redirect()->route('product1.index')->with('success', 'product created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product1 $product1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product1 $product1)
    {
        return view('product1.edit',compact('product1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product1 $product1)
    {
        $product1->name = $request->name;
        $product1->slug = \Str::slug($request->name);
        $product1->category_id = $request->category;
        $product1->subcategory_id = $request->subcategory;
        $product1->price = $request->price;
        $product1->desc = $request->desc;

        $file = $request->file('image');
        $filename = $request->slug . $file->getClientOriginalName();
        $file->move(public_path('product'), $filename);
        $product1->image=$filename;
        $product1->save();


        return redirect()->route('product1.index')->with('success', 'product updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product1 $product1)
    {
        $product1->delete();
        return redirect()->route('product1.index')->with('success','product deleted');
    }
    public function getsubcategory(Request $request)
    {
        $subcategories = subcategory::where('category_id', $request->category)->get();
        return view('product.subcategories', compact('subcategories'));
    }
}
