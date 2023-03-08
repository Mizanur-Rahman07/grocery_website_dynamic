<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductOffer;


class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home', [
            'feature_products' => Product::where('type_id', 1)
                ->where('status', 1)->orderBy('id', 'desc')->take(4)->get(),
            'exclusive_product' => Product::where('type_id', 2)
                ->where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'daily_flash_sell' => Product::where('type_id', 3)
                ->where('status', 1)->orderBy('id', 'desc')->take(5)->get(),
            'recently_landed' => Product::where('type_id', 4)
                ->where('status', 1)->orderBy('id', 'desc')->take(4)->get(),

            'pro_offer1' => ProductOffer::where('type_id', 'Head Offer1')->where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'pro_offer2' => ProductOffer::where('type_id', 'Head Offer2')->where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'pro_offer3' => ProductOffer::where('type_id', 'Head Offer3')->where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'pro_offer4' => ProductOffer::where('type_id', 'Head Offer4')->where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'pro_add' => ProductOffer::where('type_id', 'Head Add')->where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'pro_offer5' => ProductOffer::where('type_id', 'Feature Offer')->where('status', 1)->orderBy('id', 'desc')->take(3)->get(),
            'pro_offer6' => ProductOffer::where('type_id', 'Exclusive Offer1')->where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
            'pro_offer7' => ProductOffer::where('type_id', 'Exclusive Offer2')->where('status', 1)->orderBy('id', 'desc')->take(1)->get(),
        ]);
    }

    public function product_details()
    {
        return view('frontEnd.product.product_details');
    }
    public function about()
    {
        return view('frontEnd.about.about_us');
    }
    public function blog_details()
    {
        return view('frontEnd.blog.blog_details');
    }
    public function blog()
    {
        return view('frontEnd.blog.blog');
    }
    public function compare()
    {
        return view('frontEnd.compare.compare');
    }
    public function contact()
    {
        return view('frontEnd.contact.contact');
    }
    public function faq()
    {
        return view('frontEnd.faq.faq');
    }
    public function shoppingCart()
    {
        return view('frontEnd.cart.shoppingCart');
    }
    public function wishList()
    {
        return view('frontEnd.wishList.wishList');
    }
}