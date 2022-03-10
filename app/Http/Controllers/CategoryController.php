<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::search()->paginate(5);

        // dd($search_val);
        return view('siteAdmin.category.index', compact('data'));
    }

    public function create()
    {
        return view('siteAdmin.category.create');
    }

    public function store(Request $request)
    {
        // dd($request->only('name', 'status'));
        Category::create($request->only('name', 'status'));
        return redirect()->route('category.index')->with('success', 'Thêm mới thành công!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        // dd($category);
        return view('siteAdmin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // dd($request->only('name','status'));
        $category->update($request->only('name', 'status'));
        return redirect()->route('category.index')->with('success', 'Chỉnh sửa thành công !');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Xóa thành công !');
    }
}
