<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/category');

        // dd($request);
    }

   public function edit($category_id){
       $category = Category::find($category_id);
        return view('admin.category.edit',compact('category'));
   }
}
