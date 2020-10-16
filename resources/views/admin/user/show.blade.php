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
                            <img src="{{ asset("Dashboard/images/".$user->images) }}" alt="">
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
                        <label class="col-xl-3 col-lg-3 col-form-label">Tên tài khoản</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tên tài khoản</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $user->name }}</p>
                        </div>
                    </div>
                    
                </div>
                <!--end::Body-->
            </form>
            <!--end::Form-->
        </div>
@stop
