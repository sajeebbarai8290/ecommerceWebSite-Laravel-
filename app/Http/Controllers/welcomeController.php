<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class welcomeController extends Controller
{
    //
    public function index(){
        $publishedProducts=Product::where('publicationStatus',1)->get();
        return view('frontEnd.home.homeContent',['publishedProducts'=>$publishedProducts]);
    }
    public function category($id){
        $publishedCategoryProducts=Product::where('categoryId',$id)
                                    ->where('publicationStatus',1)
                                    ->get();
        return view('frontEnd.category.categoryContent',['publishedCategoryProducts'=>$publishedCategoryProducts]);
    }
    public function contact(){
        return view('frontEnd.contact.contactContent');
    }
    public function productDetails($id){
        $productById=Product::where('id',$id)->first();
        return view('frontEnd.product.productContent',['productById'=>$productById]);
    }
}
