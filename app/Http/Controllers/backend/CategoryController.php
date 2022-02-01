<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return  view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status'=>'required'
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index')->with(['type'=>'success','message'=>'Category stored successfully!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       return view("backend.categories.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return  view('backend.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category->update($request->all());
        return redirect()->route('categories.index')->with(['type'=>'success','message'=>'Category updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with(['type'=>'success','message'=>'Category deleted successfully!']);

    }
}
