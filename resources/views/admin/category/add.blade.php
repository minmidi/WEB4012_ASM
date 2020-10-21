@extends('admin.master')
@section('title','Thêm danh mục sản phẩm')
@section('active','Thêm danh mục sản phẩm')
@section('active_2','active')
@section('url','Thêm danh mục sản phẩm')
@section('main')
    
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" role="form" >
        @csrf

        <!-- Category name input -->
        <div class="form-group m-3">
            <label for="name" class="mt-3">Tên danh mục</label>
            <input type="text" class="form-control" name="name" id='name' placeholder="Nhập tên danh mục sản phẩm">
        </div>
        <!-- End Category name input -->

        <!-- Validate category name input -->
        @error('name')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate category name input -->
        

        <!-- Parent input -->
        <div class="form-group m-3">
            <label for="parent_id" class="mt-3">Danh mục cha</label>
            <input type="text" class="form-control" name="parent_id" id='parent_id' placeholder="Nhập danh mục cha">
        </div>
        <!-- End parent input -->

        <!-- Validate parent input -->
        @error('parent_id')
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @enderror
        <!-- End validate parent input -->


        <button type="submit" class="btn btn-primary m-3">Thêm mới</button>
    </form>

@stop


