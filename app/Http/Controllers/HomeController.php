<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

// use App\Models\Category;

class HomeController extends Controller
{
  public function home()
  {
    // $category = Category::all();
    // dd($category);
    $category = Category::paginate(2);
    $product_sale = Product::sale(4);
    $product_new = Product::new(8);
    // dd($product_sale);
    return view('site.home', compact('category', 'product_sale', 'product_new'));
  }
  public function about()
  {
    return view('site.about');
  }
  public function blogs()
  {
    return view('site.blogs');
  }
  public function blogMasonry()
  {
    return view('site.blog-masonry');
  }
  public function blogSingle()
  {
    return view('site.blog-single');
  }
  public function contact()
  {
    return view('site.contact');
  }
  public function products()
  {
    $category = Category::paginate(2);
    $product_sale = Product::sale();
    $product_new = Product::new();
    // dd($product_sale);
    return view('site.products', compact('category', 'product_sale', 'product_new'));
  }
  public function productSingle()
  {
    return view('site.product-single');
  }
  public function shop()
  {
    return view('site.shop');
  }
  public function cart()
  {
    return view('site.cart');
  }
  public function offers()
  {
    return view('site.offers');
  }
  public function ourTeam()
  {
    return view('site.our-team');
  }
  public function myAccount()
  {
    return view('site.my-account');
  }
  public function wishList()
  {
    return view('site.wish-list');
  }
  public function checkOut()
  {
    return view('site.check-out');
  }
  public function category(Category $category){
    // dd($category);
    return view('site.category', compact('category'));
  }
}
