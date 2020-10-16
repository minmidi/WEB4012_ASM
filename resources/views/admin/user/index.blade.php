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
    <!-- Thông báo xoá thành công -->
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Tên đăng nhập</th>
                <th scope="col" class="text-center">Hình ảnh</th>
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
            <td>{{ $user->name }}</td>
            <td>
                <img src="{{ asset('Dashboard/'.$user->images) }}" alt="Hình ảnh" width="150" height="100">
            </td>
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

@section('script')
    <script>
        $('.delete_admin').click(function(event) {
      var form =  $(this).closest("form");
      event.preventDefault();
      swal({
          title: `Bạn có chắc chắn muốn xoá không?`,
          text: "Nếu bạn xoá, dữ liệu sẽ mất vĩnh viễn",
          icon: "warning",
          buttons: ["Quay lại", "Có, tôi đồng ý"],
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
    });
    </script>
@endsection
