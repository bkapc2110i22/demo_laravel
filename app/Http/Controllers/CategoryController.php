<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
       
        $cats =  Category::search()->paginate();

       return view('category.index', compact('cats'));
    }
    public function trashed()
    {
       
        $cats =  Category::search()->onlyTrashed()->paginate();

       return view('category.trashed', compact('cats'));
    }

    public function store(CategoryCreateRequest $req)
    {
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
        // dd ($cat->products);
        return view('category.edit', compact('cat'));
    }

    public function update(CategoryUpdateRequest $req, Category $cat)
    {
        $form_data = $req->all('name','status');
        $cat->update($form_data);
       return redirect()->route('category.index')->with('yes','Cập nhật thành côngc...');;
    }
}
