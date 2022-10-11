<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::orderBy('id','DESC')->paginate();
        
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $cats = Category::orderBy('name','ASC')->get();
        return view('product.create', compact('cats'));
    }

    public function store(Request $req)
    {
        $form_data = $req->only('name','price','sale_price','status','content','category_id');
        $file_name = $req->upload->getClientOriginalName();
        $req->upload->move(public_path('uploads'), $file_name);
        $form_data['image'] = $file_name;
        Product::create($form_data);
        return redirect()->route('product.index')->with('yes','Thêm mới thành côngc...');;
    }
}
