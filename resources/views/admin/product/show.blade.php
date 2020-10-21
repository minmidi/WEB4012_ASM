@extends('admin.master')
@section('title','Hồ sơ')
@section('active','Hồ sơ')
@section('active_3','active')
@section('url','Chi tiết tài khoản: '. $product->name)
@section('main')

        <!--begin::Card-->
        <div class="card card-custom card-stretch">
            <!--end::Header-->
            <!--begin::Form-->
            <form class="form">
                <!--begin::Body-->
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tên sản phẩm</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $product->name }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Hình ảnh</label>
                        <div class="col-lg-9 col-xl-6">
                            <td><img src="{{ asset('images/posts/' . $product->images) }}" height="100" width="150"/> </td>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Danh mục sản phẩm</label>
                        <div class="col-lg-9 col-xl-6">
                            {{-- {{ dd($product->categories) }} --}}
                            @foreach ($product->categories as $product_category )
                                <p>{{ $product_category->name }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Ghi chú</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Giá thành</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ Str::currency($product->price) . " " . "VNĐ"  }}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Giảm giá</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $product->sale_percent . "%"}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Tình trạng</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $product->stocks == 0 ? "Không còn hàng" : "Còn hàng" }}</p>
                        </div>
                    </div>

                   

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Trạng thái</label>
                        <div class="col-lg-9 col-xl-6">
                            <p>{{ $product->is_active==0 ? "Không kích hoạt" : "Kích hoạt" }}</p>
                        </div>
                    </div>

                    
                    
                </div>
                <!--end::Body-->
            </form>
            <!--end::Form-->
        </div>
@stop
