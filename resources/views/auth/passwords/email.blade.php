@extends('layouts.app')
@section('title','Quên mật khẩu')
@section('content')
<div class="limiter">
    <div class="row justify-content-center">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url('../Dashboard/images/bg-01.jpg');">
                    <span class="login100-form-title-1">
                        Quên mật khẩu
                    </span>
                </div>
                {{-- Notification success email fogot password --}}
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show mt-5 ml-2 mr-2" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif  
                {{-- End notification success email fogot password --}}


                <form method="POST" class="login100-form validate-form" action="{{ route('password.email') }}">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Email</span>
                        <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Nhập địa chỉ email" required autocomplete="email" autofocus>
                    </div>
                    @if($errors->has('email'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{$errors->first('email')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="flex-sb-m w-full p-b-30">

                        <div>
                            <a href="{{ route('register') }}" class="txt">
                                Tạo mới?
                            </a>
                            &nbsp;
                            <a href="{{ route('login') }}" class="txt">
                                Đăng nhập?
                            </a>
                        </div>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <button type="submit" class="login100-form-btn">
                            Tiếp tục
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection
