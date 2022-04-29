@extends('layout.admin')
@section('title', 'Danh sách sản phẩm')
@section('main')

<form class="form-inline">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" style="width: 350px" type="search" placeholder="Search" name="search">
    <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
</form>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>STT</th>
      <th>Tên sản phẩm</th>
      <th>Trạng thái</th>
      <th>Ngày tạo</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $item)
    <tr>
      <th>{{ $key + 1 }}</th>
      <td>{{ $item->name }}</td>
      <td>
        @if($item->status == 0)
        <label for="" class="badge badge-danger p-1">Tạm ẩn</label>
        @else
        <label for="" class="badge badge-success p-1">Hiện thị</label>
        @endif
      </td>
      <td>{{ $item->created_at->format('Y/m/d') }}</td>
      <td>
        <form action="{{ route('category.destroy', $item->id) }}" method="post">
          @csrf @method('DELETE')
          <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary">Sửa</a>
          <button class="btn btn-danger" onclick="return confirm('are you sure?')">Xóa</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<hr>

{{ $data->links() }}
@stop()