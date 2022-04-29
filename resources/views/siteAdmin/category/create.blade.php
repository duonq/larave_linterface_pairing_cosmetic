@extends('layout.admin')
@section('title', 'Tạo mới danh mục')
@section('main')

<form action="{{ route('category.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="" class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" name="name" placeholder="Tạo mới danh mục">

    @error('name') {{$message}} @enderror
  </div>

  <div class="form-group">
    <p for="" class="form-label">Trạng thái</p>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" value="0">
      <label class="form-check-label" for="">
        Tạm ẩn
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" checked value="1">
      <label class="form-check-label" for="">
        Hiện thị
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@stop()