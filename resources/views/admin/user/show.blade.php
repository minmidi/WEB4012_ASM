@extends('admin.master')
@section('title','Hồ sơ')
@section('active','Hồ sơ')
@section('active_5','active')
@section('url','Chi tiết tài khoản: '. $user->name)
@section('main')

        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <!--end::Header-->
            <!--begin::Form-->
            <form class="form">
                <!--begin::Body-->
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Hình ảnh</label>
                        <div class="col-lg-9 col-xl-6">
                            <td><img src="{{ substr($user->images, 0, 4) == 'http' ? $user->image_url : asset($user->images) }}" height="50" /> </td>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Họ và tên đệm</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->first_name }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tên</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->last_name }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Họ tên</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->first_name." ".$user->last_name}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Giới tính</label>
                        <div class="col-lg-9 col-xl-6">
                                @if ($user->gender == 0)
                                    <p>Nam</p>
                                @elseif ($user->gender == 1)
                                    <p>Nữ</p>
                                @else
                                    <p>Không xác định</p>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Ngày sinh</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ substr($user->birthday, 0, 10)}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Địa chỉ</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->address }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tên tài khoản</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Trạng thái</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->is_active==0 ? "Không kích hoạt" : 'Kích hoạt' }}</p>
                        </div>
                    </div>

                    
                    
                </div>
                <!--end::Body-->
            </form>
            <!--end::Form-->
        </div>
@stop
