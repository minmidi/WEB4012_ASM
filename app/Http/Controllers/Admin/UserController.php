<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::orderby('created_at','desc')
                                ->search('name','email')
                                ->paginate(10);
        // Return view with variable get user
         return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view user add
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAddRequest $request)
    {
        /* Create new object */
        $user = new User();
        
        /* Assigns values ​​to arrays (Encrypted passwords using bcrypt) */
        $user['first_name'] = $request->first_name;
        $user['last_name'] = $request->last_name;
        $user['gender'] = $request->gender;
        $user['birthday'] = $request->birthday;
        $user['address'] = $request->address;
        $user['name'] = $request->name;
        $user['images'] = $request->images;
        $user['email'] = $request->email;
        $user['password'] = bcrypt($request->password);
        $user['is_active'] = ($request->is_active);

        /* Image processing */
        // Create a variable to get the file through the request
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
            $user['images'] = $new_images;
            
            // Get all value
            $user->fillable($request->all());

            // Save value to database
            $user->save();

            // Return page redirection and successful message submission with Sweetaleart
            return redirect()->route('user.index')->with('toast_success', 'Đã thêm thành công!');
        }
        // If the image is empty, continue to upload
        $user['images'] = "";
        // Get all value
        $user->fillable($request->all()); 
        // Save value to database
        $user->save();
        // Return page redirection and successful message submission with Sweetaleart
        return redirect()->route('user.index')->with('toast_success', 'Đã thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show',[
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {   
        
        /*
        If the user exists, delete it and send the notification successfully
        */

        // If the object exists, delete then return the screen path containing the object with the message
        if($user->delete()==true) {
            return redirect()->route('user.index')->with('toast_success', 'Đã xoá thành công!');
        }
        // Otherwise go back to the first page and the message is not successful
        else {
            return redirect()->back()->with('toast_success', 'Xoá không thành công!');
        }
    }
}
