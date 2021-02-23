<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class PagesController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $newProducts = Products::orderBy('created_at', 'DESC')->take(4)->get();
        return view('index')->with('products' , $products)->with('newProducts' , $newProducts);
    }
    public function loginPage()
    {
        return view('login');
    }

    public function productDetails($id)
    {
        $product = Products::find($id);
        return view('product_details')->with('product', $product);

    }

    public function searchProduct(Request $request)
    {

        $query =  $request->input('query');
        $products = Products::where('name', 'like', '%'.$query.'%')->get();
        return view('search_page')->with('query', $query)->with('products', $products);

    }
}
