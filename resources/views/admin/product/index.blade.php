@extends('admin.master')
@section('title','Danh sách sản phẩm')
@section('active','Danh sách sản phẩm')
@section('active_3','active')
@section('url','Danh sách sản phẩm')
@section('main')
    <div>
        <form action="" method="GET" class="form-inline mb-2" role="form">
            <div class="form-group mr-2">
                <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
            </div>
            <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-search"></i>
            </button>
            <a href="{{ route('product.create') }}" class="btn btn-success"> thêm mới</a>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Tên sản phẩm</th>
                <th scope="col" class="text-center">Hình ảnh</th>
                <th scope="col" class="text-center">Giá sản phẩm</th>
                <th scope="col" class="text-center">Giảm giá</th>
                <th scope="col" class="text-center">Tình trạng</th>
                <th scope="col" class="text-center">Trạng thái</th>
                <th scope="col" class="text-center">Chi tiết</th>
                <th scope="col" class="text-center">Sửa</th>
                <th scope="col" class="text-center">Xóa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td class="text-center">{{ $product->id }}</td>
            <td class="text-center">{{ $product->name }}</td>
            <td class="text-center"><img src="{{ asset('images/posts/' . $product->images) }}" height="150" width="150" style="border-radius: 50%" /> </td>
            <td class="text-center">{{ Str::currency($product->price) . " " . "VNĐ" }}</td>
            <td class="text-center">{{ $product->sale_percent . "%" }}</td>
            <td class="text-center">{{ $product->stocks == 1 ? 'Còn hàng' : 'Không còn hàng' }}</td>
            <td class="text-center">{{ $product->is_active == 1 ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
            <td class="text-center">
                <a href="{{ route('product.show',$product->id) }}" class="show_admin"><i class="fas fa-clipboard-list"></i></a>
            </td>
            <td class="text-center">
                <a href="{{ route('product.edit', $product->id) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>

            <td class="text-center">
                <form
                  action="{{ route('product.destroy', $product->id) }}"
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
        {{ $products -> links() }}
    </div>

@stop

@section('script')
<!-- Sweetalert JS default delete-->
<script src="{{ asset('Dashboard/js/sweetalert.js') }}"></script>    
@endsection


