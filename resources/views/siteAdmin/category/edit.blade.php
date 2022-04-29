@extends('layout.admin')
@section('title', 'Sửa tên sản phẩm')
@section('main')

<form action="{{ route('category.update', $category->id) }}" method="post">
  @csrf @method('PUT')
  <div class="form-group">
    <label for="" class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" name="name" value="{{ $category->name }}">

    @error('name') {{$message}} @enderror
  </div>

  <div class="form-group">
    <p for="" class="form-label">Trạng thái</p>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" value="0" {{ $category->status == 0 ? 'checked' : ''}}>
      <label class="form-check-label" for="">
        Tạm ẩn
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>
      <label class="form-check-label" for="">
        Hiện thị
      </label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@stop()