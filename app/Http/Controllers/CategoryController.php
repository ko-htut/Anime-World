<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
    public function index()
    {
        $category = Category::orderBy('id','desc')->paginate(10);
        return view('admin.category.index',compact('category'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();
        return redirect('/backend/category');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->update();
        return redirect('/backend/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/backend/category');
    }
}
