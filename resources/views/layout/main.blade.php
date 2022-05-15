<!doctype html>
<html lang="en">

<!-- Mirrored from html.physcode.com/uray/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 02:40:53 GMT -->

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="{{url('file')}}/asset/css/owl.carousel.css">
  <link rel="stylesheet" href="{{url('file')}}/asset/css/owl.theme.default.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/style68b3.css?ver=1">
  <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/flexslider.css">
  <link rel="stylesheet" type="text/css" href="{{url('file')}}/asset/css/bootstrap.min.css">
  <link href="{{url('file')}}/asset/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500,600,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Elsie" rel="stylesheet">
  <link rel="icon" href="favicon.png" type="image/png">
  <title>@yield('title')</title>
</head>

<body>

  <!--header-->
  <!--header desktop-->
  <div class="header">
    <div class="container-fluid search-header">
      <form>
        <input type="text" placeholder="Search">
        <span class="close-search">X</span>
      </form>
    </div>
    <div class="container-fluid">
      <div class="header-desktop ">
        <div class=" header-menu-desktop d-flex justify-content-between">
          <div>
            <div class="logo">
              <a href="{{route('home')}}"><img src="{{url('file')}}/imager/home/Logo.png" alt=""></a>
            </div>
          </div>
          <div>
            <div class="menu">
              <ul>
                <li><a href="{{route('home')}}" class="menu-active">home</a>
                </li>
                <li><a href="{{route('about')}}">page</a>
                  <ul>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('offers')}}">What We Offer</a></li>
                    <li><a href="{{route('our-team')}}">Our Team</a></li>
                  </ul>
                </li>
                <li><a href="{{route('products')}}">shop</a>
                  <ul>
                    @foreach($cats as $cat)
                    <li><a href="{{route('home.category', $cat->id)}}">{{$cat->name}}</a></li>
                    @endforeach
                </li>
                <li><a href="{{route('cart')}}">Page</a><span class="lnr lnr-chevron-right"></span>
                  <ul>
                    <li><a href="{{route('my-account')}}">My Account</a></li>
                    <li><a href="{{route('cart')}}">Cart</a></li>
                    <li><a href="{{route('wish-list')}}">Wish List</a></li>
                    <li><a href="{{route('check-out')}}">Check Out</a></li>
                  </ul>
                </li>
              </ul>
              </li>
              <li><a href="{{route('blogs')}}">blog</a>
                <ul>
                  <li><a href="{{route('blog-masonry')}}">Masonry</a></li>
                  <li><a href="{{route('blog-single')}}">Single</a></li>
                </ul>
              </li>
              <li><a href="{{route('contact')}}">contact</a></li>
              </ul>
            </div>
          </div>
          <div>
            <div class="header-right">
              <ul class="list-inline">
                <li><a href="#" class="cart-index">
                    <img src="{{url('file')}}/imager/home/bag-2.png" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
                    <div class="number-cart">
                      2
                    </div>
                  </a>
                  <div class="widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                      <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                          <a class="product-image" href="#">
                            <img src="{{url('file')}}/imager/home/cart-home1.jpg" alt="cart-1">
                          </a>
                          <a class="product-title" href="#">Skin recreation</a>

                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            56
                          </span>
                          <span class="quantity">
                            Qty: 1
                          </span>
                          <a href="#" class="remove">
                            <span class="lnr lnr-cross"></span>
                          </a>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                          <a class="product-image" href="#">
                            <img src="{{url('file')}}/imager/home/cart-home2.jpg" alt="cart-2">
                          </a>
                          <a class="product-title" href="#">Face cream</a>

                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            48
                          </span>
                          <span class="quantity">
                            Qty: 2
                          </span>
                          <a href="#" class="remove">
                            <span class="lnr lnr-cross"></span>
                          </a>
                        </li>
                      </ul>
                      <p class="woocommerce-mini-cart__total total">
                        <span>Order Total:</span>
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>
                          200
                        </span>
                      </p>
                      <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="{{route('cart')}}" class="button wc-forward au-btn btn-small">VIEW CART &
                          CHECKOUT</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li><a href="javascript:void(0)" class="search-header1"><img src="{{url('file')}}/imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                </li>
                <li><a href="javascript:void(0)" class="introduce1"><img src="{{url('file')}}/imager/home/control-introduce.png" alt="" style="width: 16px;height: 16px;margin-top: -10px;"></a>
                </li>
              </ul>

            </div>
          </div>
          <div class="introduce">
            <div class="content-introduce">
              <h3>follow instagram</h3>
              <p>@Ura.cosmetic_beauty</p>
              <div class="img-controduce">
                <img src="{{url('file')}}/imager/home/introduce.jpg" alt="">
                <img src="{{url('file')}}/imager/home/introduce1.jpg" alt="">
                <img src="{{url('file')}}/imager/home/introduce2.jpg" alt="">
                <img src="{{url('file')}}/imager/home/introduce3.jpg" alt="">
                <img src="{{url('file')}}/imager/home/introduce4.jpg" alt="">
                <img src="{{url('file')}}/imager/home/introduce5.jpg" alt="">
              </div>
              <h4>newsletter</h4>
              <p>Subcribe to our newsletter</p>
              <input type="text" placeholder="Email">
              <button class="bt"><i class="fas fa-angle-right"></i></button>
              <div class="icon-introduce">
                <a href="#" style="margin-left: 95px;"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
              <span class="lnr lnr-cross close-introduce"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end header desktop-->
  <!--header mobile-->
  <div class="header">
    <div class="container-fluid search-header">
      <form>
        <input type="text" placeholder="Search">
        <span class="close-search">X</span>
      </form>
    </div>
    <div class="container-fluid">
      <div class="header-mobile">
        <div class="header-menu-mobile d-flex justify-content-between">
          <div>
            <button><span class="lnr lnr-menu click-mobile"></span></button>
          </div>
          <div class="logo">
            <img src="{{url('file')}}/imager/home/Logo.png" alt="">
          </div>
          <div>
            <div class="row header-right">
              <ul class="list-inline">
                <li><a href="#" class="cart-index">
                    <img src="{{url('file')}}/imager/home/bag-2.png" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
                    <div class="number-cart">
                      2
                    </div>
                  </a>
                  <div class="widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                      <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                          <a class="product-image" href="#">
                            <img src="{{url('file')}}/imager/home/cart-home1.jpg" alt="cart-1">
                          </a>
                          <a class="product-title" href="#">Skin recreation</a>

                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            56
                          </span>
                          <span class="quantity">
                            Qty: 1
                          </span>
                          <a href="#" class="remove">
                            <span class="lnr lnr-cross"></span>
                          </a>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                          <a class="product-image" href="#">
                            <img src="{{url('file')}}/imager/home/cart-home2.jpg" alt="cart-2">
                          </a>
                          <a class="product-title" href="#">Face cream</a>

                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>
                            48
                          </span>
                          <span class="quantity">
                            Qty: 2
                          </span>
                          <a href="#" class="remove">
                            <span class="lnr lnr-cross"></span>
                          </a>
                        </li>
                      </ul>
                      <p class="woocommerce-mini-cart__total total">
                        <span>Order Total:</span>
                        <span class="woocommerce-Price-amount amount">
                          <span class="woocommerce-Price-currencySymbol">$</span>
                          200
                        </span>
                      </p>
                      <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="#" class="button wc-forward au-btn btn-small">VIEW CART &
                          CHECKOUT</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li><a href="javascript:void(0)" class="search-header1"><img src="{{url('file')}}/imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                </li>
                <li><a href="javascript:void(0)" class="introduce1"><img src="{{url('file')}}/imager/home/control-introduce.png" alt="" style="width: 16px;height: 16px;margin-top: -10px;"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="introduce">
        <div class="content-introduce">
          <h3>follow instagram</h3>
          <p>@Ura.cosmetic_beauty</p>
          <div class="img-controduce">
            <img src="{{url('file')}}/imager/home/introduce.jpg" alt="">
            <img src="{{url('file')}}/imager/home/introduce1.jpg" alt="">
            <img src="{{url('file')}}/imager/home/introduce2.jpg" alt="">
            <img src="{{url('file')}}/imager/home/introduce3.jpg" alt="">
            <img src="{{url('file')}}/imager/home/introduce4.jpg" alt="">
            <img src="{{url('file')}}/imager/home/introduce5.jpg" alt="">
          </div>
          <h4>newsletter</h4>
          <p>Subcribe to our newsletter</p>
          <input type="text" placeholder="Email">
          <button class="bt"><i class="fas fa-angle-right"></i></button>
          <div class="icon-introduce">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <span class="lnr lnr-cross close-introduce"></span>
        </div>
      </div>
      <div class="menu-mobile">
        <ul>
          <li><a href="{{route('home')}}" class="menu-active">home</a><span class="lnr lnr-chevron-down drop-link"></span>
            <!-- <ul class="drop-menu">
              <li><a href="index.html">Home Page_v1</a></li>
              <li><a href="index2.html">Home Page_v2</a></li>
              <li><a href="index3.html">Home Page_v3</a></li>
            </ul> -->
          </li>
          <li><a href="{{route('about')}}">page</a><span class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('offers')}}">What We Offer</a></li>
              <li><a href="{{route('our-team')}}">Our Team</a></li>
              <!-- <li><a href="comming-soon.html">Comming Soon</a></li>
              <li><a href="error-page.html">Error Page</a></li> -->
            </ul>
          </li>
          <li><a href="{{route('products')}}">shop</a><span class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
              <li><a href="{{route('products')}}">Product List</a></li>
              <li><a href="{{route('product-single')}}">Product Single</a></li>
              <li><a href="{{route('shop')}}">Layouts</a><span class="lnr lnr-chevron-down drop-link"></span>
                <!-- <ul class="drop-menu">
                  <li><a href="shop-2-colum.html">2 Colums</a></li>
                  <li><a href="shop-3-colum.html">3 Colums</a></li>
                  <li><a href="shop-4-colum.html">4 Colums</a></li>

                </ul> -->
              </li>
              <li><a href="cart.html">Shop Page</a><span class="lnr lnr-chevron-down drop-link"></span>
                <ul class="drop-menu">
                  <li><a href="{{route('my-account')}}">My Account</a></li>
                  <li><a href="{{route('cart')}}">Cart</a></li>
                  <li><a href="{{route('wish-list')}}">Wish List</a></li>
                  <li><a href="{{route('check-out')}}">Check Out</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{route('blog-single')}}">blog</a><span class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
              <li><a href="{{route('blog-masonry')}}">Masonry</a></li>
              <!-- <li><a href="blog-standard-right-siderbar.html">Standard</a><span class="lnr lnr-chevron-down drop-link"></span>
                <ul class="drop-menu">
                  <li><a href="blog-standard-right-siderbar.html">Right Sidebar</a></li>
                  <li><a href="blog-standard-left-siderbar.html">Left Sidebar</a></li>
                  <li><a href="blog-standard-no-sliderbar.html">No Sidebar</a></li>
                </ul>
              </li> -->
              <li><a href="{{route('blog-single')}}">Single</a></li>
            </ul>
          </li>
          <li><a href="{{route('contact')}}">contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--end header mobile-->
  <!--end header-->

  <!--code content-homepage-->
  @yield('main')
  <!--end code homepage-->
  <!--footer-->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <img src="{{url('file')}}/imager/home/Logo.png" alt="">
          <ul class="list-inline">
            <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</li>
            <li><a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="content-footer">
            <h2>Locate Us</h2>
            <ul class="list-inline">
              <li>No 40 Baria sreet 133/2</li>
              <li>+ (156) 1800-366-6666</li>
              <li>Eric-82@example.com</li>
              <li>www.uray.com</li>
            </ul>
          </div>

        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="content-footer">
            <h2>Profile</h2>
            <ul class="list-inline">
              <li><a href="my-account.html">My account</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="#">Order Tracking</a></li>
              <li><a href="#">Help & Support</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 ">
          <h2>Newsletter</h2>
          <ul class="list-inline">
            <li>Subscribe to our newsletter</li>
            <li><input type="text" placeholder="Email">
              <button> ></button>
            </li>
            <li>@2019 Uray.Get The Theme</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end footer-->
  <script type="text/javascript" src="{{url('file')}}/asset/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="{{url('file')}}/asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{url('file')}}/asset/js/jquery.flexslider-min.js"></script>
  <script src="{{url('file')}}/asset/js/owl.carousel.js"></script>
  <script type="text/javascript" src="{{url('file')}}/asset/js/custom.js"></script>
</body>

<!-- Mirrored from html.physcode.com/uray/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 02:42:35 GMT -->

</html>