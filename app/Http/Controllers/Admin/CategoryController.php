<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryAddRequest;
use App\Http\Requests\CategoryEditRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* 
        * Get information from the user table and arrange it in descending order of time
        * User search with key to name or email 
        */

        $category = Category::orderby('created_at','desc')
                                ->search('name')
                                ->paginate(10);
        // Return view with variable get category
         return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view category add
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CategoryAddRequest $categoryAddRequest)
    {
        $add = Category::create($request->all());

        if( $add ) {
            return redirect()->route('category.index')->with('toast_success', 'Đã thêm thành công!');
        } else {
            return redirect()->back()->with('toast_error', 'Không thêm thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
         // Return view edit
         return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, CategoryEditRequest $CategoryEditRequest)
    {
        if( $category->exists=true ) {
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;

            $category->save();

            return redirect()->route('category.index')->with('toast_success', 'Đã cập nhật thông tin thành công!');
        }
        return redirect()->route('category.index')->with('toast_error', 'Cập nhật thông tin không thành công!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        /*
        If the category exists, delete it and send the notification successfully
        */

        // If the object exists, delete then return the screen path containing the object with the message
        if($category->delete()==true) {
            return redirect()->route('category.index')->with('toast_success', 'Đã xoá thành công!');
        }
        // Otherwise go back to the first page and the message is not successful
        else {
            return redirect()->back()->with('toast_error', 'Xoá không thành công!');
        }
    }
}
