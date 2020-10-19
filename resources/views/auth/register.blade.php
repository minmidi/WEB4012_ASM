@extends('layouts.app')

@section('title','Đăng ký')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">

            <div class="login100-form-title" style="background-image: url('../Dashboard/images/bg-01.jpg');">
                <span class="login100-form-title-1">
                    Đăng ký tài khoản
                </span>
            </div>

            <form method="POST" class="login100-form validate-form" action="{{ route('register') }}">
                @csrf
                {{-- Name input --}}
                <div class="wrap-input100 validate-input m-b-26">
                    <span class="label-input100">Tên đăng nhập</span>
                    <input id="name" type="text" class="input100" name="name" value="{{ old('name') }}" placeholder="Nhập tên đăng nhập" required autocomplete="name" autofocus>
                </div>
                @if($errors->has('name'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$errors->first('name')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                {{-- End name input --}}


                {{-- Email input --}}
                <div class="wrap-input100 validate-input m-b-26">
                    <span class="label-input100">Email</span>
                    <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Nhập địa chỉ email" required autocomplete="email">
                </div>
                @if($errors->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$errors->first('email')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                {{-- End Email input --}}

                {{-- Password input --}}
                <div class="wrap-input100 validate-input m-b-26">
                    <span class="label-input100">Password</span>
                    <input id="password" type="password" class="input100" name="password" placeholder="Nhập mật khẩu" required autocomplete="new-password">
                </div>
                @if($errors->has('password'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{$errors->first('password')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                {{-- End password input --}}


                {{-- Confirm password input --}}
                <div class="wrap-input100 validate-input m-b-26">
                    <span class="label-input100">Xác nhận mật khẩu</span>
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" placeholder="Xác nhận mật khẩu" required autocomplete="new-password">
                </div>
                {{-- End confirm password input --}}

                <div class="flex-sb-m w-full p-b-30">
                    <div>
                        <a href="{{ route('password.request') }}" class="txt">
                            Quên mật khẩu?
                        </a>
                        &nbsp;
                        <a href="{{ route('login') }}" class="txt">
                            Đăng nhập?
                        </a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Đăng ký
                    </button>
                </div>
            </form>
           
        </div>
    </div>
</div>
@endsection
