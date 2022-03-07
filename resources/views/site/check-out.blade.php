@extends('layout.main')
@section('title', 'check out page')
@section('main')
<!--title page-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span>/ Shop / Check out</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->

<!--content check out-->
<div class="container ">
  <div class="entry-content">
    <div class="woocommerce-info">
      <i class="far fa-window-maximize"></i> &nbsp;&nbsp;&nbsp;Returning customer?
      <a class="showlogin">Click here to login</a>
    </div>
    <form class="woocommerce-form woocommerce-form-login" method="POST" action="#">
      <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
      <p class="form-row-first float-left">
        <input type="text" class="input-text" name="username" id="username" placeholder="Username or email*">
      </p>
      <p class="form-row-last float-right">
        <input class="input-text" type="password" name="password" id="password" placeholder="Password*">
      </p>
      <p class="form-button">
        <button class="btn-sm">Login</button><br />
        <label class="woocommerce-form__label">
          <input class="woocommerce-form__input" name="rememberme" type="checkbox" id="rememberme" value="forever">
          <span>Create an account?</span>
        </label>
      </p>
      <p class="woocommerce-LostPassword">
        <a href="#">Lost your password?</a>
      </p>
      <div style="clear: both;"></div>
    </form>

    <div class="woocommerce-info">
      <i class="far fa-window-maximize"></i> &nbsp;&nbsp;&nbsp;Have a coupon?
      <a class="showcoupon">Click here to enter your code</a>
    </div>
    <form class="checkout_coupon" method="post" action="#">
      <p class="form-row-first float-left">
        <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="">
      </p>
      <p class="form-row-last float-right">
        <button class="btn-sm">Apply Coupon</button>
      </p>
      <div style="clear: both;"></div>
    </form>
  </div>
</div>

<div class="container">
  <div class="row content-checkout">
    <div class="col-md-6 billing-detail">
      <h2>Billing details</h2>
      <div class="row">
        <div class="col-md-6 col-sm-12 col-12">
          <p>First name<span>*</span></p>
          <input type="text">
        </div>
        <div class="col-md-6 col-sm-12 col-12">
          <p>Last name<span>*</span></p>
          <input type="text">
        </div>
      </div>
      <p>Comepany Name</p>
      <input type="text">
      <p>Country<span>*</span></p>
      <select>
        <option>VietNam</option>
        <option>American</option>
      </select>
      <p>Address<span>*</span></p>
      <input type="text" placeholder="Steet Address">
      <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
      <p>Town/City<span>*</span></p>
      <input type="text">
      <p>County<span>*</span></p>
      <input type="text">
      <p>County<span>*</span></p>
      <input type="text">
      <p>Postcode/Zip<span>*</span></p>
      <input type="text">
      <div class="row">
        <div class="col-md-6">
          <p>Phone<span>*</span></p>
          <input type="text">
        </div>
        <div class="col-md-6">
          <p>Email Address<span>*</span></p>
          <input type="text">
        </div>
      </div>
      <p><input type="checkbox" class="check-creat-account"> &nbsp;&nbsp;&nbsp;Create an account</p>
      <h3>Additional information</h3>
      <p>Order notes</p>
      <textarea placeholder="Note about your order, eg. special notes fordelivery."></textarea>

    </div>
    <div class="col-md-6 item-checkout">
      <h2>Your order</h2>
      <div class="item-checkout-detail" style="border-bottom: 1px solid #e6e6e6;">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-5">
              <img src="{{ url('file')}}/imager/checkOut-item1.jpg" class="card-img" alt="...">
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-7">
              <div class="card-body">
                <p class="card-text">Skin recreation</p>
                <p class="card-text">x1</p>
                <span class="price">
                  <ins>
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>48
                    </span>
                  </ins>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item-checkout-detail">
        <div class="card">
          <div class="row no-gutters">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-5">
              <img src="{{ url('file')}}/imager/checkOut-item1.jpg" class="card-img" alt="...">
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-7">
              <div class="card-body">
                <p class="card-text">Skin recreation</p>
                <p class="card-text">x1</p>
                <span class="price">
                  <ins>
                    <span class="woocommerce-Price-amount amount">
                      <span class="woocommerce-Price-currencySymbol">$</span>56
                    </span>
                  </ins>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="sub-payment" style="margin-top: 20px;">
        <h5>Subtotal&nbsp;&nbsp;&nbsp;<span>$200</span></h5>
      </div>
      <div class="sub-payment">
        <h5>Shipping &nbsp;&nbsp;&nbsp;<small> there are no shipping methods available. please double check your
            address, or contact us if you need any help.
          </small>
        </h5>
      </div>
      <div class="sub-payment">
        <h5>Total&nbsp;&nbsp;&nbsp;<span>$200</span></h5>
      </div>
      <div class="payment">
        <div class="content-type-payment">
          <input type="radio" name="type-payment" class="showpayment">&nbsp;&nbsp;Direct bank transfer
          <div class="input-content">
            Make your payment directly into our bank account. Please use your Order ID as the payment
            reference.
            Your order will not be shipped until the funds have cleared in our account.
          </div>
        </div>
        <div class="content-type-payment">
          <input type="radio" name="type-payment" class="showpayment">&nbsp;&nbsp;Check payments
          <div class="input-content">
            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
          </div>
        </div>
        <div class="content-type-payment">
          <input type="radio" name="type-payment" class="showpayment">&nbsp;&nbsp;Cash on delivery
          <div class="input-content">
            Pay with cash upon delivery.
          </div>
        </div>
      </div>
      <div style="width: 100%;text-align: center;margin-top: 40px;">
        <button class="btn">PLACE ORDER</button>
      </div>
    </div>
  </div>
</div>

<!--end content check out-->
@stop()