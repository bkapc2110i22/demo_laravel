<?php 
namespace App\Http\Controllers;
use App\Models\Category;

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
}