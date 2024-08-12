<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Front;
use App\Models\Product;
use App\Models\Product1;
use App\Models\Product2;
use App\Models\B;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Http\Request;
use Mail;

class FrontController extends Controller
{
    public function __construct()
    {
        $setting = Setting::first();
        view()->share("setting", $setting);
        $blog = B::all();
        view()->share("blog", $blog);
        $products = Product1::all();
        view()->share("products", $products);
        $categories = Category::all();
        view()->share("categories", $categories);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('front.index');
    }
    public function shop()
    {
        return view('front.shop');
    }
    public function shopdetails($slug)
    {
        $products=Product1::where('slug',$slug)->first();
        return view('front.shopdetails',compact('products'));


    }
    public function shopingcart()
    {

        return view('front.shopingcart');
    }
    public function checkout()
    {

        return view('front.checkout');
    }
    public function blogdetails()
    {

        return view('front.blogdetails');
    }
    public function blog()
    {
        return view('front.blog1');
    }


    public function contact()
    {

        return view('front.contact');
    }
    public function aboutus()
    {

        return view('front.aboutus');
    }
    public function privacypolicy()
    {
        return view('front.privacypolicy');
    }
    public function getcategory(Request $request)
    {
        $categories = Category::where('product_id', $request->category)->get();
        return view('front.categories', compact('categories'));
    }


    public function catgoryslug($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = Product1::where('category_id', $category->id)->get();
        return view('front.shop', compact('products'));
    }

    public function detailproduct($slug)
    {
        $products = Product1::where('slug',$slug)->firstOrFail();
        return view('front.shopdetails',compact('products'));
    }

    public function contactsubmit(Request $request)
    {
        $contactFormData = $request->only(['name', 'email', 'message']);

        // Send the email
        Mail::to('testnihir@gmail.com')->send(new ContactMail($contactFormData));

        // Redirect or return a response
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
