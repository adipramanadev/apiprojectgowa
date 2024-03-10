<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //passing data 
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        //input request
        $input = $request->all();

        //create category
        $save = Category::create($input);

        //redirect to category index
        if ($save) {
            Alert::success('Category created successfully');
            return redirect()->route('category.index');
        } else {
            return redirect()->route('category.index')->with('error', 'Category failed'. $request->name  .'to create');
        
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //find by id 
        $category = Category::find($category->id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        //alert message 
        Alert::success('Category deleted successfully');
        return redirect()->route('category.index');
    }
}
