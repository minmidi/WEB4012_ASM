@extends('admin.master')
@section('title','Thêm tài khoản')
@section('active','Thêm tài khoản')
@section('active_5','active')
@section('url','Thêm tài khoản')
@section('main')
    
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" role="form" >
        @csrf

        <!-- First name input -->
        <div class="form-group m-3">
            <label for="first_name" class="mt-3">Tên họ đệm</label>
            <input type="text" class="form-control" name="first_name" id='first_name' placeholder="Nhập tên họ đệm">
        </div>
        <!-- End First name input -->

        <!-- Validate First name input -->
        @error('first_name')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate First name input -->
        

        <!-- Last name input -->
        <div class="form-group m-3">
            <label for="last_name" class="mt-3">Tên</label>
            <input type="text" class="form-control" name="last_name" id='last_name' placeholder="Nhập tên sau">
        </div>
        <!-- End last name input -->

        <!-- Validate last name input -->
        @error('last_name')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate last name input -->

        <!-- Images input -->
        <div class="form-group m-3">
            <label for="images" class="mt-3">Thêm hình ảnh</label>
            <input type="file" class="form-control" name="images" id='images'>
        </div>
        <!-- End images input -->

        <!-- Validate images input -->
        @error('images')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate images input -->

        <!-- Birthday input -->
        <div class="form-group m-3">
            <label for="birthday" class="mt-3">Ngày sinh</label>
            <input type="date" class="form-control" name="birthday" id='birthday'>
        </div>
        <!-- End birthday input -->

        <!-- Validate birthday input -->
        @error('birthday')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
       <!-- End validate birthday input -->

        <!-- Address input -->
        <div class="form-group m-3">
            <label for="address" class="mt-3">Địa chỉ</label>
            <input type="text" class="form-control" name="address" id='address' placeholder="Nhập địa chỉ">
        </div>
        <!-- End address input -->

        <!-- Validate address input -->
        @error('address')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate address input -->

        <!-- User name login input -->
        <div class="form-group m-3">
            <label for="name" class="mt-3">Tên đăng nhập</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên đăng nhập">
        </div>
        <!-- End user name login input -->

        <!-- Validate user name input -->
        @error('name')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate user name input -->

         <!-- Email input -->
        <div class="form-group m-3">
            <label for="email" class="mt-3">Email</label>
            <input type="text" class="form-control" name="email" id='email' placeholder="Nhập email">
        </div>
        <!-- End email input -->

        <!-- Validate email input -->
        @error('email')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate email input -->

        <!-- Password input -->
        <div class="form-group m-3">
            <label for="password" class="mt-3">Mật khẩu</label>
            <input type="password" class="form-control" name="password" id='password' placeholder="Nhập mật khẩu">
        </div>
        <!-- End password input -->

        <!-- Validate password input -->
        @error('password')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate password input -->

        <!-- Gender input -->
        <div class="form-group m-3">
            <label class="mt-3">Giới tính</label>
            <div class="row">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="0" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Nam
                    </label>
                </div>
        
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Nữ
                    </label>
                </div>
        
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="2" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Không xác định
                    </label>
                </div>
            </div>  
        </div>
        <!-- End gender input -->

        <!-- Status input -->
        <div class="form-group m-3">
            <label class="mt-3">Trạng thái</label>
            <div class="row">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Không kích hoạt
                    </label>
                </div>
        
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Kích hoạt
                    </label>
                </div>
            </div>  
        </div>
        <!-- End status input -->

        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>

@stop


