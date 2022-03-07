@extends('layout.main')
@section('title', 'wish list page')
@section('main')
<!--title page-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span> / Shop / Wishlist</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->

<!--content cart-->
<div class="container ">
  <div class="row content-cart">
    <table class="table cart-desktop">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col" style="text-align: left;">Product name</th>
          <th scope="col">Product Price</th>
          <th scope="col">Stock Status</th>
          <th scope="col">Add to cart</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>X</td>
          <td>
            <div class="row">
              <img src="{{ url('file')}}/imager/cart1.jpg" alt="">
              <p>Skin recreation</p>
            </div>
          </td>
          <td>$56</td>
          <td>
            <i class="fas fa-check-circle"></i> Instock
          </td>
          <td>
            <button class="shop-now">SHOP NOW</button>
          </td>
        </tr>
        <tr>
          <td>X</td>
          <td>
            <div class="row">
              <img src="{{ url('file')}}/imager/cart2.jpg" alt="">
              <p>Face cream</p>
            </div>
          </td>
          <td>$48</td>
          <td>
            <i class="fas fa-check-circle"></i> Instock
          </td>
          <td>
            <button class="shop-now">SHOP NOW</button>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <div class="cart-mobile">
      <table class="table">
        <tr>
          <td colspan="2">
            <img src="{{ url('file')}}/imager/cart1.jpg" alt="">
          </td>
        </tr>
        <tr>
          <th>Product name</th>
          <td>Skin recreation</td>
        </tr>
        <tr>
          <th>Product Price</th>
          <td>$56</td>
        </tr>
        <tr>
          <th>Stock Status</th>
          <td>
            <i class="fas fa-check-circle"></i> Instock
          </td>
        </tr>
        <tr>
          <th>Add to cart</th>
          <td><button class="shop-now">SHOP NOW</button></td>
        </tr>
      </table>
      <span>X</span>
    </div>
    <div class="cart-mobile">
      <table class="table">
        <tr>
          <td colspan="2">
            <img src="{{ url('file')}}/imager/cart1.jpg" alt="">
          </td>
        </tr>
        <tr>
          <th>Product name</th>
          <td>Skin recreation</td>
        </tr>
        <tr>
          <th>Product Price</th>
          <td>$48</td>
        </tr>
        <tr>
          <th>Stock Status</th>
          <td>
            <i class="fas fa-check-circle"></i> Instock
          </td>
        </tr>
        <tr>
          <th>Add to cart</th>
          <td><button class="shop-now">SHOP NOW</button></td>
        </tr>
      </table>
      <span>X</span>
    </div>

    <div class="card-button">
      <button type="button" class=" btn float-left clear-wishlist">CLEAR WISHLIST</button>
      <button type="button" class=" btn float-left update-wishlist">UPDATE WISHLIST</button>
      <button type="button" class=" btn float-right go-shopping float-right">GO SHOPPING</button>
    </div>
  </div>

</div>

<!--end content cart-->
@stop()