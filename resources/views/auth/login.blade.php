@extends('layouts.app')
@section('title','Đăng nhập')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url('../Dashboard/images/bg-01.jpg');">
                    <span class="login100-form-title-1">
                        Đăng nhập
                    </span>
                </div>

                <form class="login100-form validate-form" method="POST">
                    @csrf
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" id="email" placeholder="Nhập email" autofocus>
                        <span class="focus-input100"></span>
                    </div>
                        @if($errors->has('email'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$errors->first('email')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Mật khẩu</span>
                        <input class="input100" type="password" name="password" id="password"
                            placeholder="Nhập mật khẩu">
                        <span class="focus-input100"></span>
                        @if($errors->has('password'))
                            {{$errors->first('password')}}
                        @endif
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" type="checkbox" value="remember-me" name="remember" id="ckb1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label-checkbox100" for="ckb1">
                                Nhớ đăng nhập
                            </label>
                        </div>

                        <div>
                            <a href="{{ route('register') }}" class="txt">
                                Tạo mới?
                            </a>
                            &nbsp;
                            <a href="{{ route('password.request') }}" class="txt">
                                Quên mật khẩu?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
