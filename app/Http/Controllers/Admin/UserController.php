<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('created_at','desc')
                                ->search('name','email')
                                ->paginate(10);
         return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $user = new User();
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

        // Xử lý ảnh
        $get_image = $request->file('images');
        $has_file = $request->hasFile('images');
        if ($get_image && $has_file == true) {
            $get_image_name = $get_image->getClientOriginalName();
            $new_images =  uniqid() . '_' . str_replace(' ', '_', $get_image_name);
            $get_image->move('images/posts', $new_images);
            $user['images'] = $new_images;
            $user->images = $new_images;
            
            $user->fillable($request->all());
            $user->save();
            return redirect()->route('user.index')->with('toast_success', 'Đã thêm thành công!');
        }
        $user['images'] = "";
        $user->fillable($request->all()); 
        $user->save();
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

        if($user->delete()==true) {
            return redirect()->route('user.index')->with('toast_success', 'Đã xoá thành công!');
        }
        else {
            return redirect()->back()->with('toast_success', 'Xoá không thành công!');
        }
    }
}
