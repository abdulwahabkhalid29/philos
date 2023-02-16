@extends('layout.scaffold')
@push('title')
Index
@endpush
@section('content')
<!-- Newsletter Popup ---------------------------------------------------->
<section id="nlpopup" data-expires="30" data-delay="10">
   <!--Close Button-->
   <a href="javascript:void(0)" class="nlpopup_close nlpopup_close_icon">
   <img src="{{asset('assets/img/close-icon-white.png')}}" alt="Newsletter Close" /></a>
   <!--End Close Button-->
   <h3 class="mb-40">Join Our Mailing List </h3>
   <p class="black mb-20">
      But I must explain to you how all this mistaken<br />
      idea of denouncing pleasure pain.
   </p>
   <form>
      <input class="input-md" name="footeremail" title="Enter Email Address.." placeholder="example@domain.com" type="email">
      <button class="btn btn-md btn-color">Subscribe</button>
   </form>
   <label class="mt-20">
   Sign up For Exclusive Updates, New Arrivals<br />
   And Insider-Only Discount.</label>
   <a class="nlpopup_close nlpopup_close_link mt-40">&#10006; Close</a>
</section>
<!-- Overlay -->
<div id="nlpopup_overlay"></div>
<!-- End Newsletter Popup ------------------------------------------------>
<!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
<section id="sidebar-right" class="sidebar-menu sidebar-right">
   <div class="cart-sidebar-wrap">
      <!-- Cart Headiing -->
      <div class="cart-widget-heading">
         <h4>Shopping Cart</h4>
         <!-- Close Icon -->
         <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
         <!-- End Close Icon -->
      </div>
      <!-- End Cart Headiing -->
      <!-- Cart Product Content -->
      <div class="cart-widget-content">
         <div class="cart-widget-product ">
            <!-- Empty Cart -->
            <div class="cart-empty">
               <p>You have no items in your shopping cart.</p>
            </div>
            <!-- EndEmpty Cart -->
            <!-- Cart Products -->
            <ul class="cart-product-item">
               <!-- Item -->
               <li>
                  <!--Item Image-->
                  <a href="#" class="product-image">
                  <img src="{{asset('assets/img/product-img/small/product_12547554.jpg')}}" alt="" /></a>
                  <!--Item Content-->
                  <div class="product-content">
                     <!-- Item Linkcollateral -->
                     <a class="product-link" href="#">Alpha Block Black Polo T-Shirt</a>
                     <!-- Item Cart Totle -->
                     <div class="cart-collateral">
                        <span class="qty-cart">1</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>399.00</span>
                     </div>
                     <!-- Item Remove Icon -->
                     <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                  </div>
               </li>
               <!-- Item -->
               <li>
                  <!--Item Image-->
                  <a href="#" class="product-image">
                  <img src="{{asset('assets/img/product-img/small/product_12547555.jpg')}}" alt="" /></a>
                  <!--Item Content-->
                  <div class="product-content">
                     <!-- Item Linkcollateral -->
                     <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>
                     <!-- Item Cart Totle -->
                     <div class="cart-collateral">
                        <span class="qty-cart">2</span>&nbsp;<span>&#215;</span>&nbsp;<span class="product-price-amount"><span class="currency-sign">$</span>299.00</span>
                     </div>
                     <!-- Item Remove Icon -->
                     <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                  </div>
               </li>
            </ul>
            <!-- End Cart Products -->
         </div>
      </div>
      <!-- End Cart Product Content -->
      <!-- Cart Footer -->
      <div class="cart-widget-footer">
         <div class="cart-footer-inner">
            <!-- Cart Total -->
            <h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$698.00</span></h4>
            <!-- Cart Total -->
            <!-- Cart Buttons -->
            <div class="cart-action-buttons">
               <a href="cart.html" class="view-cart btn btn-md btn-gray">View Cart</a>
               <a href="checkout.html" class="checkout btn btn-md btn-color">Checkout</a>
            </div>
            <!-- End Cart Buttons -->
         </div>
      </div>
      <!-- Cart Footer -->
   </div>
</section>
<!--Overlay-->
<div class="sidebar_overlay"></div>
<!-- End Sidebar Menu (Cart Menu) -------------------------------------------->
<!-- Search Overlay Menu ----------------------------------------------------->
<section class="search-overlay-menu">
   <!-- Close Icon -->
   <a href="javascript:void(0)" class="search-overlay-close"></a>
   <!-- End Close Icon -->
   <div class="container">
      <!-- Search Form -->
      <form role="search" id="searchform" action="/search" method="get">
         <div class="search-icon-lg">
            <img src="{{asset('assets/img/search-icon-lg.png')}}" alt="" />
         </div>
         <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
         <input value="" name="q" type="search" placeholder="Search..." />
         <button type="submit">
         <img src="{{asset('assets/img/search-lg-go-icon.png')}}" alt="" />
         </button>
      </form>
      <!-- End Search Form -->
   </div>
</section>
<!-- End Search Overlay Menu ------------------------------------------------>
<!--==========================================-->
<!-- wrapper -->
<!--==========================================-->
<div class="wraper">
   <!-- Header -->
   <!-- End Header -->
   <!-- Page Content Wraper -->
   <div class="page-content-wraper">
      <!-- Intro -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    @forelse ($sliders as $index=>$slider)
        <li data-target="#main-slide" data-slide-to="{{ $index }}" @if($index == 0 )class="active" @endif></li>
    @empty

    @endforelse

   </ol>
   <div class="carousel-inner">
    @forelse ($sliders as $index=>$slider)
        <div class="carousel-item @if($index == 0) active @endif">
            <img class=" w-100" src="{{asset('upload/image/'.$slider->image)}}" alt="First slider" />
            <div class="carousel-caption">
            <h4  style="font-size:50px; color:white;">{{ $slider->title }}</h4>
            <p class="wow fadeInDown heading mt-5" style="font-size:30px; color:white;" data-wow-delay=".4s">{{$slider->name}}</p>
            <a href="#" class="submit btn btn-md btn-color mt-5" data-wow-delay=".6s">{{$slider->link}}</a>
            </div>
        </div>
    @empty

    @endforelse


   </div>
   <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
   <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
   <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
   <span class="sr-only">Next</span>
   </a>
</div>
      <!-- End Intro -->
      <!-- Promo Box -->
      <section id="promo" class="section-padding-sm promo ">
         <div class="container">
            <div class="promo-box row">
               <div class="col-md-4 mtb-sm-30 promo-item">
                  <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                  <div class="info">
                     <a href="#">
                        <h6 class="normal">Delivery Free</h6>
                     </a>
                     <p>On Order Over $150</p>
                  </div>
               </div>
               <div class="col-md-4 mtb-sm-30 promo-item">
                  <div class="icon"><i class="fa fa-repeat" aria-hidden="true"></i></div>
                  <div class="info">
                     <a href="#">
                        <h6 class="normal">Exchange or Return</h6>
                     </a>
                     <p>30 Day Money Back Guarantee</p>
                  </div>
               </div>
               <div class="col-md-4 mtb-sm-30 promo-item">
                  <div class="icon"><i class="fa fa-headphones" aria-hidden="true"></i></div>
                  <div class="info">
                     <a href="#">
                        <h6 class="normal">Support</h6>
                     </a>
                     <p>24/7 Online Support</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Promo Box -->
      <!-- Promo Banner -->
      <section id="promo-banner" class="section-padding-b">
         <div class="container">
            <div class="row">
               <!--Left Side-->
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-12 mb-30">
                        <!-- banner No.1 -->
                        <div class="promo-banner-wrap">
                           <a href="#" class="promo-image-wrap">
                           <img src="{{asset('assets/img/banner/promo-banner4.jpg')}}" alt="Accesories" />
                           </a>
                        </div>
                     </div>
                     <div class="col-12 mb-sm-30">
                        <!-- banner No.2 -->
                        <div class="promo-banner-wrap">
                           <a href="#" class="promo-image-wrap">
                           <img src="{{asset('assets/img/banner/promo-banner3.jpg')}}" alt="Accesories" />
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!--Right Side-->
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-12 mb-30">
                        <!-- banner No.3 -->
                        <div class="promo-banner-wrap">
                           <a href="#" class="promo-image-wrap">
                           <img src="{{asset('assets/img/banner/promo-banner2.jpg')}}" alt="Accesories" />
                           </a>
                        </div>
                     </div>
                     <div class="col-12 mb-sm-30">
                        <!-- banner No.4 -->
                        <div class="promo-banner-wrap">
                           <a href="#" class="promo-image-wrap">
                           <img src="{{asset('assets/img/banner/promo-banner5.jpg')}}" alt="Accesories" />
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Promo Banner -->
      <!-- Product (Tab with Slider) -->
      <div class="container product-carousel">
                    <h2 class="page-title">Top Intersting</h2>
                    <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        @forelse($clothes as $clothe)
                     <div class="product-item">
                        <div class="product-item-inner">
                           <div class="product-img-wrap">
                              <a href="{{route('pages.detail',$clothe->id)}}"><img src="{{asset('upload/image/'.$clothe->image)}}" alt=""></a></a>
                           </div>
                           <div class="product-button">
                              <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                              <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                              <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                           </div>
                        </div>
                        <div class="product-detail">
                           <a class="tag" href="#">Men Fashion</a>
                           <p class="product-title"><a href="product_detail.html">{{ $clothe->name }}</a></p>
                           <div class="product-rating">
                              <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                 <span style="width: 60%"></span>
                              </div>
                              <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                           </div>
                           <p class="product-description">
                              When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                           </p>
                           <h5 class="item-price">{{ $clothe->price }}</h5>
                        </div>
                     </div>
                     @empty
                     @endforelse

                    </div>
                </div>
      <!-- End Product (Tab with Slider) -->
      <!-- Categories -->
      <section class="">
         <div class="section-padding container-fluid bg-image text-center overlay-light90" data-background-img="img/bg/bg_5.jpg')}}" data-bg-position-x="center center">
            <div class="container">
               <h2 class="page-title">Shop by Categories</h2>
            </div>
         </div>
         <div class="container container-margin-minus-t">
            <div class="row">
               @forelse($categories as $category)
               <div class="col-md-4">
                  <div class="categories-box">
                     <div class="categories-image-wrap">
                        <img src="{{asset('upload/image/'.$category->image)}}" alt="" />
                     </div>
                     <div class="categories-content">
                        <a href="{{route('pages.list',$category->id)}}">
                           <div class="categories-caption">
                              <h6 class="normal">{{ $category->category->name }}</h6>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               @empty
               @endforelse
               
               
            </div>
         </div>
      </section>
      <!-- End Categories -->
      <!-- New Product -->
      <section class="section-padding">
                <div class="container">
                    <h2 class="page-title">New Tranding</h2>
                </div>
                <div class="container">
                    <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        @forelse($clothes as $clothe)
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                 <a href="{{ route('pages.detail' , $clothe->id) }}">
                                    <img src="{{asset('upload/image/'.$clothe->image)}}" alt="">
                                    </a>
                                 </div>
                                <div class="product-button">
                                    <a href="{{route('pages.cart')}}" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="{{route('pages.cart')}}" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                    <a href="{{route('pages.cart')}}" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="product_detail.html">{{$clothe->name}}</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                </p>
                                <h5 class="item-price">{{$clothe->price}}</h5>
                            </div>
                        </div>
                        @empty
                        @endforelse
                        


                    </div>
                </div>
            </section>
      <!-- End New Product -->
      <!-- Like & Share Banner -->
      <section id="like-share" class="like-share">
         <div class="container">
            <div class="like-share-inner overlay-black40">
               <h3>Like And Share Our Page for one time <span class="color">10%</span> Off</h3>
               <ul class="social-icon">
                  <li><a href="http://facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </section>
      <!-- End Like & Share Banner -->
      <!-- Blog & News -->
      <section class="section-padding">
         <div class="container">
            <h2 class="page-title">Blog & News</h2>
         </div>
         <div class="container">
            <div id="blog-carousel" class="blog-carousel owl-carousel owl-theme nf-carousel-theme1">
               <!-- item.1 -->
               @forelse($blogs as $blog)
               
               <div class="product-item">
                  <div class="blog-box">
                  <a href="{{route('pages.blog',$blog->id)}}"><div class="blog-img-wrap">
                        <img src="{{asset('upload/image/'.$blog->image)}}" alt="philos" />
                     </div>
                     <div class="blog-box-content">
                        <div class="blog-box-content-inner">
                           <h4 class="blog-title"><a href="#">{{$blog->title}}</a></h4>
                           <p class="info"><span>by <a href="#">{{$blog->name}}</a></span><span>29 Jan 2017</span></p>
               </div></a>
                        </div>
                     </div>
                  </div>
               @empty
               @endforelse
               <!-- item.2 -->
               <!-- item.3 -->
            </div>
         </div>
      </section>
      <!-- End Blog & News -->
      <!-- Newsletter -->
      <section class="section-padding dark-bg container-fluid bg-image text-center overlay-black40" data-background-img="{{asset('assets/img/bg/bg_7.jpg')}}" data-bg-position-x="center top">
         <div class="container newsletter section-padding-b">
            <h2 class="page-title">Subscribe To Newsletter</h2>
            <form name="form-newsletter" class="newsletter-from" id="form-newsletter" method="post">
               <div class="form-input">
                  <input class="input-lg" name="frmemail" id="frmemail" placeholder="Enter Email Address..." title="Enter Email Address..." type="text">
               </div>
               <button class="btn btn-lg btn-color">Sing Up</button>
            </form>
            <p class="italic">Sign up For Exclusive Updates, New Arrivals And Insider-Only Discount.</p>
         </div>
      </section>
      <!-- Newsletter -->
      <!-- About blocks -->
      <section class="">
         <div class="container container-margin-minus-t">
            <div class="home-about-blocks">
               <div class="col-12 about-blocks-wrap">
                  <div class="row">
                     <!--Customer Say-->
                     <div class="col-sm-6 col-md-6 customer-say">
                        <div class="about-box-inner">
                           <h4 class="mb-25">Customer Say</h4>
                           <!--Customer Carousel-->
                           <div class="testimonials-carousel owl-carousel owl-theme nf-carousel-theme1">
                              <div class="product-item">
                                 <p class="large quotes">I think when we use 'stress', we are often using a kind of dummy word to try to fit many different things into one big category</p>
                                 <h6 class="quotes-people">- Jeff Dunham (Apple)</h6>
                              </div>
                              <div class="product-item">
                                 <p class="large quotes">It's true, you can never eat a pet you name. And anyway, it would be like a ventriloquist eating his dummy</p>
                                 <h6 class="quotes-people">- George Lois (microsoft)</h6>
                              </div>
                           </div>
                           <!--End Customer Carousel-->
                        </div>
                     </div>
                     <!--About Shop-->
                     <div class="col-sm-6 col-md-6 about-shop">
                        <div class="about-box-inner">
                           <h4 class="mb-25">About Philos</h4>
                           <p class="mb-20">Welcome to <b class="black">Philos</b> - RandomText is a tool designers and developers can use to quickly grab dummy text in either Lorem Ipsum or Gibberish format.</p>
                           <a href="#" class="btn btn-xs btn-black">More <i class="fa fa-angle-right right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End About blocks -->
      <!-- Brnad Logo -->
      <div class="container product-carousel">
                    <h2 class="page-title">Popular Posts</h2>
                    <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        @forelse($popularPosts as $clothe)
                     <div class="product-item">
                        <div class="product-item-inner">
                           <div class="product-img-wrap">
                              <a href="{{route('pages.detail',$clothe->id)}}"><img src="{{asset('upload/image/'.$clothe->image)}}" alt=""></a></a>
                           </div>
                           <div class="product-button">
                              <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                              <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                              <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                           </div>
                        </div>
                        <div class="product-detail">
                           <a class="tag" href="#">Men Fashion</a>
                           <p class="product-title"><a href="product_detail.html">{{ $clothe->name }}</a></p>
                           <div class="product-rating">
                              <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                 <span style="width: 60%"></span>
                              </div>
                              <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                           </div>
                           <p class="product-description">
                              When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                           </p>
                           <h5 class="item-price">{{ $clothe->price }}</h5>
                        </div>
                     </div>
                     @empty
                     @endforelse

                    </div>
                </div>
      <!-- End Brnad Logo -->
      <!-- Instagram -->
      <section class="section-padding instagram bg-gray">
         <div class="container text-center">
            <h2 class="page-title">Philos on Instagram</h2>
            <p class="">Follow Us <a class="strong" href="#">@MayShop</a></p>
         </div>
         <div class="container">
            <ul class="intagram-feed">
               <li>
                  <a href="#">
                  <img src="{{asset('assets/img/instagram/insta-1.jpg')}}" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                  <img src="{{asset('assets/img/instagram/insta-2.jpg')}}" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                  <img src="{{asset('assets/img/instagram/insta-3.jpg')}}" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                  <img src="{{asset('assets/img/instagram/insta-4.jpg')}}" alt="">
                  </a>
               </li>
               <li>
                  <a href="#">
                  <img src="{{asset('assets/img/instagram/insta-5.jpg')}}" alt="">
                  </a>
               </li>
            </ul>
         </div>
      </section>
      <!-- End Instagram -->
   </div>
   <!-- End Page Content Wraper -->
   <!-- Footer Section -------------->
   <!-- End Footer Section -------------->
</div>
<!-- End wrapper =============================-->
<!--==========================================-->
<!-- JAVASCRIPT -->
<!--==========================================-->
<!-- custom js -->
<!-- end jquery -->
@endsection