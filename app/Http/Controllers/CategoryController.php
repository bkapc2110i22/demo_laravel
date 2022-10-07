<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $cats =  Category::paginate();

       return view('category.index', compact('cats'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|min:6|max:100|unique:categories'
        ],[
            'name.required' => 'Tên danh mục không để trống',
            'name.min' => 'Tên danh mục tối thiểu 6 ký tự',
            'name.max' => 'Tên danh mục tối đa 100 ký tự',
            'name.unique' => 'Tên danh mục này đã được sử dụng'
        ]);

        $form_data = $req->all('name','status');
        Category::create($form_data);
        return redirect()->route('category.index');
    }
}
