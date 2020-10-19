@extends('admin.master')
@section('title','Danh sách tài khoản')
@section('active','Danh sách tài khoản')
@section('active_5','active')
@section('url','Danh sách tài khoản')
@section('main')
    <div>
        <form action="" method="GET" class="form-inline mb-2" role="form">
            <div class="form-group mr-2">
                <input type="text" class="form-control" name="search" placeholder="nhập tìm kiếm">
            </div>
            <button type="submit" class="btn btn-primary mr-2">
                <i class="fas fa-search"></i>
            </button>
            <a href="{{ route('user.create') }}" class="btn btn-success"> thêm mới</a>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Hình ảnh</th>
                <th scope="col" class="text-center">Tên đăng nhập</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Trạng thái</th>
                <th scope="col" class="text-center">Chi tiết</th>
                <th scope="col" class="text-center">Sửa</th>
                <th scope="col" class="text-center">Xóa</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <input type="hidden" class="delete_val_id" value="{{ $user->id }}">
            <td>{{ $user->id }}</td>
            <td><img src="{{ asset('images/posts/' . $user->images) }}" height="150" width="150" style="border-radius: 50%" /> </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->is_active == 1 ? 'Kích hoạt' : 'Không kích hoạt' }}</td>
            <td class="text-center">
                <a href="{{ route('user.show',$user->id) }}" class="show_admin"><i class="fas fa-clipboard-list"></i></a>
            </td>
            <td class="text-center">
                <a href="{{ route('user.edit', $user->id) }}" class="edit_admin"><i class="fas fa-edit"></i></a>
            </td>

            <td class="text-center">
                <form
                  action="{{ route('user.destroy', $user->id) }}"
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
        {{ $users -> links() }}
    </div>

@stop


