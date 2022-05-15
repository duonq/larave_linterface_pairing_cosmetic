@extends('layout.main')
@section('title', 'Products page')
@section('main')

<!--title detail-->
<div class="title-page" style="background-image: url('file/imager/shop/Shop_3Columns-title.jpg');background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-6 inner-title-page">
        <h1>Shop</h1>
        <p><span>Home</span> / Shop / Product List</p>
      </div>
    </div>
  </div>
</div>
<!--end title detail-->
<!--product list-->
<div class="container">
  <div class="prodcut-list">
    <div class="row">
      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="row header-show-list">
          <div class="col-md-6 col-sm-12 col-12">
            <p>Showing 1–12 of 24 results</p>
          </div>
          <div class="col-md-6 col-sm-12 col-12">
            <select class="float-right">
              <option>Default sorting</option>
              <option>Sort by average rating</option>
              <option>Sort by latest</option>
              <option>Sort by price: low to high</option>
              <option>Sort by price: high to low</option>
            </select>
          </div>
        </div>
        <div class="row product">
          @foreach($product_sale as $ps)
          <div class="col-md-4 col-sm-6 col-12">
            <div class="card">
              <div class="card-img-top">
                <a href="product-single.html" class="wp-post-image">
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
                      <span class="woocommerce-Price-currencySymbol">$</span>{{$ps->price}}
                    </span>
                  </ins>
                </span>
              </div>
            </div>

          </div>
          @endforeach
          <!-- <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
                <p class="card-title"><a href="product-list.html">Beauty </a></p>
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          <div class="col-md-4 col-sm-6 col-12">
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
          </div> -->
          <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#"> > </a></li>
          </ul>
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
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="content-blog-left">
          <div class="search-blog">
            <input type="text" placeholder="Search" class="float-left">
            <button class="btn float-right"><span class="lnr lnr-chevron-right"></span></button>
          </div>
          <div class="filter-price">
            <h2>Filter By Price</h2>

            <p></p>
            <span class="float-left">Price: $6 - $54</span>
            <button class="btn float-right">FILTER</button>
          </div>
          <div class="category-blog">
            <h2>Categories</h2>

            <a href="#"> Beauty (23)</a>
            <a href="#">BB Creams (20)</a>
            <a href="#">Make Up (31)</a>
            <a href="#">Spa (08)</a>
            <a href="#">Skin care (15)</a>
          </div>
          <div class="popular-item">
            <h2>Popular Items</h2>
            <div class="card">
              <div class="row no-gutters">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                  <a href="product-single.html"><img src="{{url('file')}}/imager/product-popular/popular-item1.jpg" class="card-img" alt="..."></a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                  <div class="card-body">
                    <h5 class="card-title woocommerce-loop-product__title"><a href="product-single.html">Skin reaction</a></h5>
                    <p class="card-text price">
                      <ins>
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>56
                        </span>
                      </ins>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row no-gutters">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                  <a href="product-single.html"><img src="{{url('file')}}/imager/product-popular/popular-item2.jpg" class="card-img" alt="..."></a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                  <div class="card-body">
                    <h5 class="card-title woocommerce-loop-product__title"><a href="product-single.html">Face cream</a> </h5>
                    <p class="card-text price">
                      <ins>
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>48
                        </span>
                      </ins>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="row no-gutters">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                  <a href="product-single.html"><img src="{{url('file')}}/imager/product-popular/popular-item3.jpg" class="card-img" alt="..."></a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                  <div class="card-body">
                    <h5 class="card-title woocommerce-loop-product__title"><a href="product-single.html">Hydrating primer</a> </h5>
                    <p class="card-text price">
                      <ins>
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>83
                        </span>
                      </ins>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tag-blog">
            <h2>Tag</h2>
            <div class="link-blog">
              <a href="#">Nature</a>
              <a href="#">Oragnic</a>
              <a href="#">Fresh</a>
              <a href="#">Vegan</a>
              <a href="#">Spa</a>
            </div>
          </div>
          <div class="lastest-img">
            <img src="{{url('file')}}/imager/portfolio/Portfolio_Single_Images_item.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end product list-->

@stop()