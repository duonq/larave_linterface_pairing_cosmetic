@extends('layout.admin')
@section('title', 'Tạo mới sản phẩm')
@section('main')

<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="" class="form-label">Danh mục sản phẩm</label>
    <select name="category_id" class="form-control">
      <option value="">Chọn danh mục</option>
      @foreach($cats as $cat)
      <option value={{$cat->id}}>{{$cat->name}}</option>
      @endforeach
    </select>

    @error('category_id') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" name="name" placeholder="Tạo mới sản phẩm">

    @error('name') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Giá sản phẩm</label>
    <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">

    @error('price') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Giá khuyến mại</label>
    <input type="text" class="form-control" name="sale_price" placeholder="Giá khuyến mại">

    @error('sale_price') {{$message}} @enderror
  </div>
  <div class="form-group">
    <label for="" class="form-label">Ảnh</label>
    <input type="file" class="form-control" name="upload" placeholder="Ảnh">

    @error('upload') {{$message}} @enderror
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