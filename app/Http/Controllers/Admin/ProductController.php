<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductAddRequest;
use Storage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /*
        * Get information from the product table and arrange it in descending order of time
        * Products search with key to name, price, sale_percent
        */
        $products = Product::orderby('created_at','desc')
                                ->search('name','price','sale_percent')
                                ->paginate(10);
        // Return view with variable get user
         return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        // Return view create product
        return view('admin.product.add',[
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAddRequest $request)
    {
        //dd($request->all());
        $product = new Product($request->all());
        $get_image = $request->file('images');
        // Create a variable that checks if the file exists
        $has_file = $request->hasFile('images');
        //If a file is found and an existing file returns true, then add the file
        if ($get_image && $has_file == true) {
            // Get the file name
            $get_image_name = $get_image->getClientOriginalName();
            // Convert files use uniqid to generate a random string and concatenate names with spaces and underscores
            $new_images =  uniqid() . '_' . str_replace(' ', '_', $get_image_name);
            // Push the file to the path of the converted name
            $get_image->move('images/posts', $new_images);
            // Assigns the converted name to the array
            $product->images= $new_images;
            $product->save();
            $product->categories()->attach($request->category_id);
            return redirect()->route('product.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.show',[
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        // Return view product edit
        return view('admin.product.edit',[
            'product' => $product,
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        /*
        If the product exists, delete it and send the notification successfully
        */

        // If the object exists, delete then return the screen path containing the object with the message
        if($product->delete()==true) {
            return redirect()->route('product.index')->with('toast_success', 'Đã xoá thành công!');
        }
        // Otherwise go back to the first page and the message is not successful
        else {
            return redirect()->back()->with('toast_error', 'Xoá không thành công!');
        }
    }
}
