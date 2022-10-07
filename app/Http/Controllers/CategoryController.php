<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        return redirect()->route('category.index')->with('yes','Thêm mới thành côngc...');;
    }

    public function delete (Category $cat)
    {
        // Category::find(1)->delete();
        // Category::where('status', 0)->delete();
        $products = Product::where('category_id', $cat->id)->get();
        if ($products->count() == 0) {
            $cat->delete();
            return redirect()->route('category.index')->with('yes','Xóa thành côngc...');
        }

        return redirect()->route('category.index')->with('no','Không xóa được...');
      
    }

    public function edit(Category $cat)
    {
        return view('category.edit', compact('cat'));
    }

    public function update(Request $req, Category $cat)
    {
        $req->validate([
            'name' => 'required|min:6|max:100|unique:categories,name,'.$cat->id
        ],[
            'name.required' => 'Tên danh mục không để trống',
            'name.min' => 'Tên danh mục tối thiểu 6 ký tự',
            'name.max' => 'Tên danh mục tối đa 100 ký tự',
            'name.unique' => 'Tên danh mục này đã được sử dụng'
        ]);

        $form_data = $req->all('name','status');
        $cat->update($form_data);
       return redirect()->route('category.index')->with('yes','Cập nhật thành côngc...');;
    }
}
 