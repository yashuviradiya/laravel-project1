<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $categories=Category::orderBy('id','DESC')->get();
        view()->share('categories',$categories);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories=Subcategory::get();
        return view('subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category'=>'required',
        ]);

        $subcategory=new subcategory;
        $subcategory->name=$request->name;
        $subcategory->category_id=$request->category;
        $subcategory->slug=str::slug($request->name);
        $subcategory->save();
        return redirect()->route('subcategory.index')->with('success','subcategory created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index')->with('success','subcategory deleted');
    }
}
