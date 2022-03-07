@extends('layout.main')
@section('titel', 'offer')
@section('main')

<div class="content-what-we-offer">
  <!--title page-->
  <div class="title-page" style="background-image: url('file/imager/title-page1.jpg');background-position: center center;background-size: cover;">
    <div class="container">
      <div class="row">
        <div class=" col-md-8 inner-title-page">
          <h1>What We Offer</h1>
          <p><span>Home</span>/ What We Offer</p>
        </div>
      </div>
    </div>
  </div>
  <!--end title page-->
  <!--component what we offer-->
  <div class="container">
    <div class="row component-item">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12  component-item-detail">
        <img src="{{ url('file')}}/imager/what-we-offer/component-item1.png" alt="">
        <div class="component-item-content-detail">
          <h2>1.<small>Organic Cream</small></h2>
          <p>It is a long established fact that a reader will be distracted by the readable.</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 component-item-detail">
        <img src="{{ url('file')}}/imager/what-we-offer/component-item2.png" alt="">
        <div class="component-item-content-detail">
          <h2>2.<small>Natutral extracts</small></h2>
          <p>Many desktop publishing packages and web page editors now use Lorem.</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 component-item-detail">
        <img src="{{ url('file')}}/imager/what-we-offer/component-item3.png" alt="">
        <div class="component-item-content-detail">
          <h2>3.<small>Quality assurance</small></h2>
          <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined.</p>
        </div>
      </div>
    </div>
  </div>
  <!--end component what we offer-->
  <!-- product what we offer-->
  <div class="product-what-we-offer">
    <div class="product-what-we-offer-left">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img">
            <img src="{{ url('file')}}/imager/what-we-offer/product_WhatWeOffe1.jpg" alt="">
            <p class="rotated-text-left">BEAUTY</p>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class=" product-what-we-offer-content">
              <h2>Et harum quidem rerum</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                illo
                inventore
                veritatis
                et quasi architecto beatae vitae dicta sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
              </p>
              <button type="button" class="btn btn-light">View more</button>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="product-what-we-offer-right">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img on-top">
            <img src="{{ url('file')}}/imager/what-we-offer/product_WhatWeOffe2.jpg" alt="">
            <p class="rotated-text-right">SPA</p>
          </div>

          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class="product-what-we-offer-content">
              <h2>There are many variations</h2>
              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                on the Internet tend to repeat predefined chunks as necessary, making this the first
                true generator on the Internet.
              </p>
              <button type="button" class="btn btn-light">View more</button>
            </div>
          </div>
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img on-bottom">
            <img src="{{ url('file')}}/imager/what-we-offer/product_WhatWeOffe2.jpg" alt="">
            <p class="rotated-text-right">SPA</p>
          </div>
        </div>
      </div>
    </div>

    <div class="product-what-we-offer-left bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img">
            <img src="{{ url('file')}}/imager/what-we-offer/product_WhatWeOffe3.jpg" alt="">
            <p class="rotated-text-left">MAKE UP</p>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
            <div class="product-what-we-offer-content">
              <h2>Et harum quidem rerum</h2>
              <p>Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                illo
                inventore
                veritatis
                et quasi architecto beatae vitae dicta sunt explicabo.
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
              </p>
              <button type="button" class="btn btn-light">View more</button>
            </div>
          </div>
          <div style="border-bottom: 1px solid #e6e6e6;height: 1px;width: 100%;margin: 120px 15px 0 15px;">
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--end product what we offer-->
</div>

@stop()