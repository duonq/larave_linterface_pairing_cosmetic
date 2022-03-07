@extends('layout.main')
@section('title', 'cart')
@section('main')

<!--title page-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span>/ Shop / Cart</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->

<!--content cart-->
<div class="container">
  <div class="row content-cart">
    <table class="table cart-desktop">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col" style="text-align: left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>X</td>
          <td>
            <div class="row">
              <img src="{{ url('file')/imager/cart1.jpg" alt="">
                        <p>Skin recreation</p>
                    </div>
                </td>
                <td>$56</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="prev btn ">-</button>
                        <button type="button" class="show-number btn ">1</button>
                        <button type="button" class="next btn ">+</button>
                    </div>
                </td>
                <td><span>$56</span></td>
            </tr>
            <tr>
                <td>X</td>
                <td>
                    <div class="row">
                        <img src="{{ url('file')/imager/cart2.jpg" alt="">
                        <p>Face cream</p>
                    </div>
                </td>
                <td>$48</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="prev btn ">-</button>
                        <button type="button" class="show-number btn ">3</button>
                        <button type="button" class="next btn ">+</button>
                    </div>
                </td>
                <td><span>$144</span></td>
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
                        <img src="{{ url('file')/imager/cart1.jpg" alt="">
                    </td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>Skin recreation</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>$56</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">1</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$56</td>
                </tr>
            </table>
            <span>X</span>
        </div>
        <div class="cart-mobile">
            <table class="table">
                <tr>
                    <td colspan="2">
                        <img src="{{ url('file')/imager/cart2.jpg" alt="">
                    </td>
                </tr>
                <tr>
                    <th>Product</th>
                    <td>Face cream</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>$48</td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="prev btn ">-</button>
                            <button type="button" class="show-number btn ">3</button>
                            <button type="button" class="next btn ">+</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>$144</td>
                </tr>
            </table>
            <span>X</span>
        </div>
        <div class="card-button">
            <button type="button" class="btn coupon float-left">Coupon code</button>
            <button type="button" class="btn apply float-left">APPLY COUPON</button>
            <button type="button" class="btn update float-right">UPDATE CART</button>
        </div>
        <div class="rocart-total">
            <h2>Cart totals</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><p>Subtotal</p></li>
                <li class="list-inline-item"><span>$200</span></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><p>Total</p></li>
                <li class="list-inline-item"><p>$200</p></li>
            </ul>
            <button class="btn float-left">PROCEED TO CHECKOUT</button>
        </div>
    </div>
</div>
<!--end content cart-->

@stop()