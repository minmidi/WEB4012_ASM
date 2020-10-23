@extends('admin.master')
@section('title','Danh mục sản phẩm')
@section('active','Danh mục sản phẩm')
@section('active_2','active')
@section('url','Danh mục sản phẩm')
@section('main')
    <div>
        <form action="" method="GET" class="form-inline mb-2" role="form">
            <div class="form-group mr-2">
                <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
            </div>
            <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-search"></i>
            </button>
            <a href="{{ route('category.create') }}" class="btn btn-success"> thêm mới</a>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">tên danh mục</th>
                <th scope="col" class="text-center">Danh mục cha</th>
                <th scope="col" class="text-center">Sửa</th>
                <th scope="col" class="text-center">Xóa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($category as $categories)
        <tr>
            <td class="text-center">{{ $categories->id }}</td>
            <td class="text-center">{{ $categories->name }}</td>
            <td class="text-center">{{ $categories->parent_id }}</td>
            <td class="text-center">
                <a href="{{ route('category.edit', $categories->id) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>

            <td class="text-center">
                <form
                  action="{{ route('category.destroy', $categories->id) }}"
                  method="POST"
                >
                  @csrf
                  <input type='hidden' name='_method' value='DELETE'></input>
                  <button class="delete_admin" type='submit'><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>

    <div class="clearfix float-right">
        {{ $category -> links() }}
    </div>

@stop

@section('script')
<!-- Sweetalert JS default delete-->
<script src="{{ asset('Dashboard/js/sweetalert.js') }}"></script>
@endsection


