<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
class HomeController extends Controller 
{
    public function index()
    {
        $cats = Category::paginate(2);
        // dd ($cats);
        return view ('home.index', compact('cats'));
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
}