@extends('layout.main')
@section('title', 'Home page')
@section('main')


<!--code content-homepage-->
<div class="content-homepage">
    <!-- slide-homepage-1-->
    <div class="slide-index2 slide-index3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slide-homepage5.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 content-slide">
                                    <span>cosmetic & beauty</span>
                                    <p>Get a $ 20 voucher right now</p>
                                    <h2>White Body </h2>
                                    <a href="product-list.html">view now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slide-homepage6.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 content-slide">
                                    <span>Spa & make up</span>
                                    <p>Get a $ 20 voucher right now</p>
                                    <h2>Nutrition </h2>
                                    <a href="product-list.html">view now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('file/imager/home/slide-homepage5.jpg')">
                        <div class="container">
                            <div class="row">
                                <div class=" col-lg-6 col-md-8 content-slide">
                                    <span>Spa & make up</span>
                                    <p>Give summer nutrients</p>
                                    <h2>White Body </h2>
                                    <a href="product-list.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-slide-homepage">
                <ul class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        <p>1</p>
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                        <p>2</p>
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                        <p>3</p>
                    </li>
                </ul>

            </div>
        </div>

    </div>
    <!--end slide-homepage-1-->
    <!--Product out-->
    <div class="container">
        <div class="row content-homepage-home3">
            <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12  layer-content-homepage">
                <img src="{{url('file')}}/imager/product/beauty-homepage-v3.jpg" alt="">
            </div>
            <div class=" col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="product-out">
                    <div class="title">
                        <h2 class="text-center">Beauty</h2>
                    </div>
                    <div id="demo-slide1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-slide1" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-slide1" data-slide-to="1"></li>
                            <li data-target="#demo-slide1" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach($product_new as $ps)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="row product">
                                    @foreach($ps as $psItem)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
                                                    <img class="image-cover" src="{{url('upload')}}/{{$ps->image}}" alt="product">
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
                                                <p class="woocommerce-loop-product__title">
                                                    <a href="product-single.html">
                                                        {{$ps->name}}
                                                    </a>
                                                </p>
                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>
                                                            {{number_format($ps->price)}}
                                                        </span>
                                                    </ins>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    </div> -->
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="carousel-item">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div> -->
                        </div>
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
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail.jpg" alt="">
                                                        </li>
                                                        <!-- items mirrored twice, total of 12 -->
                                                    </ul>
                                                </div>
                                                <div id="flex-carousel" class="flexslider">
                                                    <ul class="slides">
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail1.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail2.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail3.jpg" alt="">
                                                        </li>
                                                        <li>
                                                            <img src="{{url('file')}}/imager/product-detail/product_detail4.jpg" alt="">
                                                        </li>
                                                        <!-- items mirrored twice, total of 12 -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-12 content-product">
                                            <h2>Whitening cream | $65</h2>
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
    </div>
    <!--banner - product-->
    <div class="container">
        <div class="banner-product">
            <a href="#"><img src="{{url('file')}}/imager/home/banner-1-product.jpg" alt=""></a>
        </div>
    </div>
    <!--end banner product-->
    <div class="container">
        <div class="row content-homepage-home3">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="product-out">
                    <div class="title">
                        <h2 class="text-center">Spa</h2>
                    </div>
                    <div id="demo-slide2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-slide2" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-slide2" data-slide-to="1"></li>
                            <li data-target="#demo-slide2" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div>
                            <!-- <div class="carousel-item">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layer-content-homepage">
                <img src="{{url('file')}}/imager/product/beauty-homepage2-v3.jpg" alt="">
            </div>
        </div>
    </div>
    <!--banner - product-->
    <div class="container">
        <div class="banner-product">
            <a href="#"> <img src="{{url('file')}}/imager/home/banner-2-product.jpg" alt=""></a>
        </div>
    </div>
    <!--end banner product-->
    <div class="container">
        <div class="row content-homepage-home3">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layer-content-homepage">
                <img src="{{url('file')}}/imager/product/beauty-homepage3-v3.jpg" alt="">
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="product-out">
                    <div class="title">
                        <h2 class="text-center">Make up</h2>
                    </div>
                    <div id="demo-slide3" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo-slide3" data-slide-to="0" class="active"></li>
                            <li data-target="#demo-slide3" data-slide-to="1"></li>
                            <li data-target="#demo-slide3" data-slide-to="2"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row product">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-img-top">
                                                <a href="#" class="wp-post-image">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Product out-->
    <!--blog-homepage-->
    <div class="blog-homepage3">
        <div class="container">
            <div class="content-masonry">
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-1.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html"> Sed ut perspiciatis
                                                    unde</a></h5>

                                            <p class="card-text">But I must explain to you how all this mistaken idea of
                                                denouncing pleasure and praising pain was born and I will give you.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-2.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Et harum quidem rerum</a>
                                            </h5>

                                            <p class="card-text">Nam libero tempore, cum soluta nobis est eligendi optio
                                                cumque nihil impedit quo minus id quod maxime placeat.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-3.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Temporibus autem quib</a>
                                            </h5>
                                            <p class="card-text">On the other hand, we denounce with righteous
                                                indignation and dislike men who are so beguiled and demoralized.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-7.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">The standard chunk</a>
                                            </h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-8.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Excepteur sint occae</a>
                                            </h5>
                                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-9.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Nemo enim ipsam</a></h5>
                                            <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor
                                                sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                                        </div>
                                        <div class="card-body share">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-4.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">There are many
                                                    variations</a></h5>
                                            <p class="card-text">If you are going to use a passage of Lorem Ipsum, you
                                                need to be sure there isn't anything embarrassing hidden.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-5.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">All the Lorem Ipsum</a>
                                            </h5>
                                            <p class="card-text">It uses a dictionary of over 200 Latin words, combined
                                                with a handful of model sentence structures, to generate.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="card">
                                        <img src="{{url('file')}}/imager/blog/Blog_Masonry-6.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="blog-single.html">Contrary to popular</a>
                                            </h5>
                                            <p class="card-text">Richard McClintock, a Latin professor at Hampden-Sydney
                                                College in Virginia, looked up one of the more obscure Latin.</p>
                                        </div>
                                        <div class="card-body">
                                            <span>20Th October 2019</span>
                                            <a href="javascrip:void(0)" class="card-link share">Share
                                            </a>
                                            <div class="icon-share">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-facebook"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end blog homepage-->
    <div class="best-new">
        <div class="container">
            <div class="row product">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>Best Sellers</h2>
                        </div>
                        <div class="float-right btn-group">
                            <div class="btn-left">
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="lnr lnr-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="btn-right">
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/best1.jpg" alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Nutritional herbs</a></p>

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
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/best2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Against aging</a></p>

                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/best1.jpg" alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Nutritional herbs</a></p>

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
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/best2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Against aging</a></p>

                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/best1.jpg" alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Nutritional herbs</a></p>

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
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/best2.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Against aging</a></p>

                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>New Arrivals</h2>
                        </div>
                        <div class="float-right btn-group">
                            <div class="btn-left">
                                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                    <span class="lnr lnr-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="btn-right">
                                <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                    <span class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/new1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Baebody eye cream</a></p>

                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/new2.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Eye gel for dark </a></p>
                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/new1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Baebody eye cream</a></p>

                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class=" col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/new2.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Eye gel for dark </a></p>
                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/new1.jpg" alt="product">
                                            </a>
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Baebody eye cream</a></p>

                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="{{url('file')}}/imager/product-popular/new2.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a href="product-single.html">
                                                        Eye gel for dark </a></p>
                                                <span class="price">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>79
                                                        </span>
                                                    </ins>
                                                </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end best and new-->
    </div>
    <!--logo-->
    <div class="logo-homepage3">
        <div class="owl-carousel owl-theme">
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo1.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo2.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo3.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo4.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo5.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo6.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo1.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo2.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo3.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo4.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo5.png" alt=""></a></div>
            <div class="item"><a href="#"><img src="{{url('file')}}/imager/home/logo6.png" alt=""></a></div>
        </div>
    </div>
    <!--end logo-->
</div>
<!--end code homepage-->

@stop()