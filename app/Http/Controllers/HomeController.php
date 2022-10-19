<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Auth;
use Str;
class HomeController extends Controller 
{
    public function index()
    {
        $newProducts = Product::orderBy('created_at','DESC')->limit(12)->get();
        $saleProducts = Product::orderBy('sale_price','ASC')
        ->where('sale_price','>',0)->limit(12)->get();
        $ramdomProducts = Product::inRandomOrder()->limit(12)->get();
        // dd ($cats);
        return view ('home.index', compact('ramdomProducts','newProducts','saleProducts'));
    }

    public function about()
    {
        return view ('home.about');
    }

    public function login()
    {
        return view ('home.login');
    }

    public function check_login (Request $req)
    {
        $form_data= $req->only('email','password');
        $check = Auth::guard('cus')->attempt($form_data);
        if ($check) {
            return redirect()->route('home.index');
        } 
        return redirect()->back()->with('no','Đăng nhập thất bại, kiểm tra lại tài khoản');
    }

    public function logout()
    {
        // auth('cus')->logout();
        Auth::guard('cus')->logout();
        return redirect()->route('home.login');
    }

    public function profile()
    {
        $customer = Auth::guard('cus')->user();
        return view('home.profile', compact('customer'));
    }

    public function productDetail(Product $product)
    {
        return view('home.product-detail', compact('product'));
    }
}

// http://127.0.0.1:8000/quan-dui-tre-em-cuc-chat-3