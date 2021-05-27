<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use Session;

class TestController extends Controller
{
    
    public function index()
    {
        $newProducts = Product::where('publication_status',1)
                                ->orderBy('id','DESC')
                                ->take(12)
                                ->get();
        return view('front-end.home.home',[
            'newProducts' => $newProducts
        ]);

        $products = DB::table('products')
                    ->join('categories','products.category_id','=','categories.id')
                    ->join('brands','products.brand_id','=','brands.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->get();
    }

}
