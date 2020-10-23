@extends('admin.master')
@section('title','Thêm sản phẩm')
@section('active','Thêm sản phẩm')
@section('active_3','active')
@section('url','Thêm sản phẩm')
@section('main')

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" role="form" >
        @csrf

        <!-- Product name input -->
        <div class="form-group m-3">
            <label for="name" class="mt-3">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên sản phẩm">
        </div>
        <!-- End product name input -->

        <!-- Validate product name input -->
        @error('name')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate product name input -->

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


        <!-- Category name input -->
        <div class="form-group m-3">
            <label class="mt-3">Danh mục sản phẩm</label>
            <div class="row">
                @foreach ($category as $categories )
                    <div class="form-check ml-3">
                        <input class="form-check-input" type="checkbox" name="category_id[]" id="category_id" value="{{ $categories->id }}">
                        <label class="form-check-label" for="exampleRadios1">
                        {{ $categories->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- End category name input -->

        <!-- Validate category name input -->
        @error('category_id')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate category name input -->


        <!-- Description input -->
        <div class="form-group m-3">
            <label for="description" class="mt-3">Mô tả</label>
            <input type="text" class="form-control" name="description" id='description' placeholder="Nhập mô tả">
        </div>
        <!-- End description input -->

        <!-- Validate description input -->
        @error('description')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate description input -->



        <!-- User name price input -->
        <div class="form-group m-3">
            <label for="price" class="mt-3">Giá tiền</label>
            <input type="text" class="form-control" name="price" id='price' placeholder="Nhập giá tiền">
        </div>
        <!-- End price input -->

        <!-- Validate price input -->
        @error('price')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate price input -->

         <!-- percent input -->
        <div class="form-group m-3">
            <label for="sale_percent" class="mt-3">Giảm giá</label>
            <input type="text" class="form-control" name="sale_percent" id='sale_percent' placeholder="Nhập giảm giá" value="0">
        </div>
        <!-- End percent input -->

        <!-- Validate percent input -->
        @error('sale_percent')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate percent input -->

        <!-- Stock input -->
         <div class="form-group m-3">
            <label class="mt-3">Tình trạng</label>
            <div class="row">
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="stocks" id="stocks" value="0" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Không còn hàng
                    </label>
                </div>

                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="stocks" id="stocks" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Còn hàng
                    </label>
                </div>
            </div>
        </div>
        <!-- End Stock input -->



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


