@extends('layout.main')
@section('title', 'Home page')
@section('main')


<!--code content-homepage-->
<div class="content-homepage">
    <!-- slide-homepage-1-->
    <div class="slider-homepage1">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slide-homepage1.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-6 col-sm-8 col-8 content-slide">
                                    <h2>Spray <br />Moisturizing</h2>
                                    <p>GENTLE FOR WINTER</p>
                                    <a href="product-list.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slider-homepage2.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-9 col-sm-10 col-10 content-slide">
                                    <h2>Skin <br /> lightening cream</h2>
                                    <p>GENTLE FOR WINTER</p>
                                    <a href="product-list.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slider-homepage1.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-6 col-sm-9 col-9 content-slide">
                                    <h2>Skin <br /> Anti-aging</h2>
                                    <p>GENTLE FOR WINTER</p>
                                    <a href="product-list.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="control-slider-homepage1">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"> <span class="lnr lnr-chevron-left"></span> </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon"> <span class="lnr lnr-chevron-right"></span> </span>
            </a>
        </div>
    </div>
    <!--end slide-homepage-1-->
    <!-- cosmetic-->
    <div class="container">
        <div class="row cosmetic">
            <div class="col-md-6 bg-cosmetic">
                <img src="{{url('file')}}/imager/home/cosmetic-beauty.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="inner-cosmetic">
                    <h2>#Genuine Cosmetics</h2>
                    <h3>Customers Satisfaction</h3>
                    <h4>Organic cream</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <h4>Natural extracts</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <h4>Quality assurance</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end cosmetic-->
    <!--deal of the day-->
    <div class="container-fluid">
        <div class="row deal-day">
            <div class="content-deal-day">
                <div class="title">
                    <h2>deal of the day</h2>
                </div>
                <ul class="list-inline" id="dealday">
                    <li>
                        <h2 id="dealdays">05</h2>

                        <p>Days</p>
                    </li>
                    <li>
                        <h2 id="dealhours">12</h2>

                        <p>Hours</p>
                    </li>
                    <li>
                        <h2 id="dealminutes">47</h2>

                        <p>Mins</p>
                    </li>
                    <li>
                        <h2 id="dealseconds">41</h2>

                        <p>Secs</p>
                    </li>
                </ul>
                <button class="btn btn-lg">SHOP NOW</button>
            </div>
        </div>
    </div>
    <!--end deal of the day-->
    <!--Product out-->
    <div class="container">
        <div class="product-out">
            <div class="title">
                <h2 class="text-center">Product Our</h2>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row product">
                            @foreach($product as $ps)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('upload')}}/{{$ps->image}}" alt="product">
                                        </a>
                                        @if($ps->sale_price == 0)
                                        <p class="onnew">New</p>
                                        @else
                                        <p class="onsale">Sale</p>
                                        @endif
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="woocommerce-loop-product__title">
                                            <a href="product-single.html">
                                                {{$ps->name}}
                                            </a>
                                        </p>
                                        <span class="price">
                                            @if($ps->sale_price > 0)
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{number_format($ps->price)}}
                                                </span>
                                            </del>
                                            @endif
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{number_format($ps->price - $ps->sale_price)}}
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                            <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product2.jpg" alt="product">
                                        </a>
                                        <p class="onsale">Sale</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Night cream</a></p>

                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>45

                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>38
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product3.jpg" alt="product">
                                        </a>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Make up</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Cleanser layde</a></p>
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
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product4.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Moisturizing cream</a></p>
                                        <span class="price">

                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>87
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product5.jpg" alt="product">
                                        </a>
                                        <p class="onsale">Sale</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Make up </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Perfect Spice</a></p>

                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>51

                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>41
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product6.jpg" alt="product">
                                        </a>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Silky smooth skin</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>93
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product7.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Whitening cream</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>45
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product8.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-single.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Water flower</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>62
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <div class="row product">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Cleanser layde</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>79
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product2.jpg" alt="product">
                                        </a>
                                        <p class="onsale">Sale</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Night cream</a></p>

                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>45

                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>38
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product3.jpg" alt="product">
                                        </a>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Make up</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Cleanser layde</a></p>
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
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product4.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Moisturizing cream</a></p>
                                        <span class="price">

                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>87
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product5.jpg" alt="product">
                                        </a>
                                        <p class="onsale">Sale</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Make up </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Perfect Spice</a></p>

                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>51

                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>41
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product6.jpg" alt="product">
                                        </a>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Silky smooth skin</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>93
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product7.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Whitening cream</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>45
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product8.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-single.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Water flower</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>62
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row product">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Cleanser layde</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>79
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product2.jpg" alt="product">
                                        </a>
                                        <p class="onsale">Sale</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Night cream</a></p>

                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>45

                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>38
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product3.jpg" alt="product">
                                        </a>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Make up</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Cleanser layde</a></p>
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
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product4.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Moisturizing cream</a></p>
                                        <span class="price">

                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>87
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product5.jpg" alt="product">
                                        </a>
                                        <p class="onsale">Sale</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Make up </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Perfect Spice</a></p>

                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>51

                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>41
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product6.jpg" alt="product">
                                        </a>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Silky smooth skin</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>93
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product7.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html">Spa</a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Whitening cream</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>45
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="product-single.html" class="wp-post-image">
                                            <img class="image-cover" src="{{url('file')}}/imager/product/product8.jpg" alt="product">
                                        </a>
                                        <p class="onnew">New</p>
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal" data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-single.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                Water flower</a></p>
                                        <span class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>62
                                                </span>
                                            </ins>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content container">
                            <div class="product-single-quick-view">
                                <div class="row product_detail">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div class="flex-quick-view">
                                            <div id="flex-slider" class="flexslider">
                                                <ul class="slides">

                                                    <li>
                                                        <img src="{{url('upload')}}/{{$ps->image}}" alt="">
                                                    </li>
                                                    <!-- <li>
                                                        <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                    </li> -->
                                                    <!-- items mirrored twice, total of 12 -->
                                                </ul>
                                            </div>
                                            <!-- <div id="flex-carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img src="{{url('upload')}}/{{$ps->image}}" alt="">
                                                    </li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12 content-product">
                                        <h2>{{$ps->name}} | ${{number_format($ps->price)}}</h2>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; (2 customer
                                            review)</p>
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                            It has survived not only five centuries, but also the leap into electronic </p>
                                        <div class="infor-product">
                                            <p><span>Sku: </span>22</p>
                                            <p><span>Category: </span>Cosmetic</p>
                                            <p><span>Tag: </span>Trendy</p>
                                            <p><span>Share: </span>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </p>
                                        </div>
                                        <div>
                                            <div class="btn-group">
                                                <button type="button" class="prev btn ">-</button>
                                                <button type="button" class="show-number btn ">1</button>
                                                <button type="button" class="next btn ">+</button>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn add-to-cart">ADD TO CART<p><i class="fas fa-cart-plus"></i></p> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="lnr lnr-cross close-quick-view" data-dismiss="modal"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Product out-->
    <!-- code review home-->
    <div class="container-fluid">
        <div class="row review-homepage" style=" background-image: url('file/imager/home/bg-review.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        ">
            <div class="container">
                <div class="row ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="content-review-homepage">
                                    <img src="{{url('file')}}/imager/home/patricsia1.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="{{url('file')}}/imager/home/patricsia2.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="content-review-homepage">
                                    <img src="{{url('file')}}/imager/home/patricsia3.jpg" alt="">
                                    <h3 class="text-center">Patricsia Petersen</h3>
                                    <p class="text-center"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </p>
                                    <p style="padding-bottom: 100px;">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have
                                        suffered alteration
                                        in some form, by injected humour, or randomised words which don't look even
                                        slightly
                                        believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end code review home-->
    <!--code product latest new-->
    <div class="container lastest">
        <div class="title">
            <h2 class="text-center" style="padding: 20px 0;">Latest News</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"><img src="{{url('file')}}/imager/product-lastest/lastest1.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html"> But I must explain to you how all
                                        this</a></h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest2.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">Neque porr quisquam dolorem</a></h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest3.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">Ut enim ad minima veniam quis
                                        nostrum</a></h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest4.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">Itaque earum rerum hic tenetur</a>
                                </h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest5.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">In a free hour,when our power</a>
                                </h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                            <a href="what-we-offer.html"> <img src="{{url('file')}}/imager/product-lastest/lastest6.jpg" class="card-img" alt="..."></a>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                            <div class="card-body">
                                <h5 class="card-title"><a href="what-we-offer.html">On the other hand,we denounce</a>
                                </h5>
                                <p class="card-text">
                                    By Sugar / May 18.2019
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end code product lastest new-->
    <!--code banner-->
    <div class="container">
        <div class="row banner">
            <div class="col-xl-6 col-lg-6 col-md-0 col-sm-0 col-0">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 banner-right">
                <h2>one day</h2>
                <div class="line-banner"></div>
                <h3>10
                    <small>%</small>
                    discount
                </h3>
                <button class="btn">05/02 - 20/10/2019</button>
            </div>
        </div>
    </div>
    <!--end code banner-->
</div>
<!--end code homepage-->

@stop()