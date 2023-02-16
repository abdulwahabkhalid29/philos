@extends('layout.scaffold')
@push('title')
Detail
@endpush
@section('content')
    <!-- Newsletter Popup ---------------------------------------------------->
    <section id="nlpopup" data-expires="30" data-delay="10">
        <!--Close Button-->
        <a href="javascript:void(0)" class="nlpopup_close nlpopup_close_icon">
            <img src="{{asset('assets/img/close-icon-white.png')}}" alt="Newsletter Close"></a>
        <!--End Close Button-->

        <h3 class="mb-40">Join Our Mailing List </h3>
        <p class="black mb-20">
            But I must explain to you how all this mistaken<br>
            idea of denouncing pleasure pain.
        </p>
        <form>
            <input class="input-md" name="footeremail" title="Enter Email Address.." placeholder="example@domain.com" type="email">
            <button class="btn btn-md btn-color">Subscribe</button>
        </form>
        <label class="mt-20">
            Sign up For Exclusive Updates, New Arrivals<br>
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
                                <img src="{{asset('assets/img/product-img/small/product_12547554.jpg')}}" alt=""></a>

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
                                <img src="{{asset('assets/img/product-img/small/product_12547555.jpg')}}" alt=""></a>

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
                    <img src="{{asset('assets/img/search-icon-lg.png')}}" alt="">
                </div>
                <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
                <input value="" name="q" type="search" placeholder="Search...">
                <button type="submit">
                    <img src="{{asset('assets/img/search-lg-go-icon.png')}}" alt="">
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


        <!-- Page Content Wraper -->
        <div class="page-content-wraper">
            <!-- Bread Crumb -->
            <section class="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb-link">
                                <a href="#">Home</a>
                                <a href="#">Categories</a>
                                <span>Men Polos & Tees</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bread Crumb -->

            <!-- Page Content -->
            <section id="product-ID_XXXX" class="content-page single-product-content">

                <!-- Product -->
                <div id="product-detail" class="container">
                    <div class="row">
                        <!-- Product Image -->
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="product-page-image">
                                <!-- Slick Image Slider -->
                            
                                <div class="product-image-slider product-image-gallery" id="product-image-gallery" data-pswp-uid="3">
                                    <div class="item">
                                        <a class="product-gallery-item" href="" data-size="" data-med="img/product-img/single/product_12547007_1.jpg')}}" data-med-size="">
                                            <img src="{{asset('upload/image/'.$clothe->image)}}" alt="image 1">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-gallery-item" href="img/product-img/single/product_12547007_2.jpg')}}" data-size="" data-med="img/product-img/single/product_12547007_2.jpg')}}" data-med-size="">
                                            <img src="{{asset('assets/img/product-img/single/product_12547007_2.jpg')}}" alt="image 2">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-gallery-item" href="img/product-img/single/product_12547007_3.jpg')}}" data-size="" data-med="img/product-img/single/product_12547007_3.jpg')}}" data-med-size="">
                                            <img src="{{asset('assets/img/product-img/single/product_12547007_3.jpg')}}" alt="image 3">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-gallery-item" href="img/product-img/single/product_12547007_4.jpg')}}" data-size="" data-med="img/product-img/single/product_12547007_4.jpg')}}" data-med-size="">
                                            <img src="{{asset('assets/img/product-img/single/product_12547007_4.jpg')}}" alt="image 4">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-gallery-item" href="img/product-img/single/product_12547007_5.jpg')}}" data-size="" data-med="img/product-img/single/product_12547007_5.jpg')}}" data-med-size="">
                                            <img src="{{asset('assets/img/product-img/single/product_12547007_5.jpg')}}" alt="image 5">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a class="product-gallery-item" href="img/product-img/single/product_12547007_6.jpg')}}" data-size="" data-med="img/product-img/single/product_12547007_6.jpg')}}" data-med-size="">
                                            <img src="{{asset('assets/img/product-img/single/product_12547007_6.jpg')}}" alt="image 1">
                                        </a>
                                    </div>
                                </div>
                                <!-- End Slick Image Slider -->

                                <a href="javascript:void(0)" id="zoom-images-button" class="zoom-images-button"><i class="fa fa-expand" aria-hidden="true"></i></a>


                            </div>

                            <!-- Slick Thumb Slider -->
                            <div class="product-image-slider-thumbnails">
                                <div class="item">
                                    <img src="{{asset('assets/img/product-img/single/product_12547007_1.jpg')}}" alt="image 1">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/img/product-img/single/product_12547007_2.jpg')}}" alt="image 1">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/img/product-img/single/product_12547007_3.jpg')}}" alt="image 1">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/img/product-img/single/product_12547007_4.jpg')}}" alt="image 1">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/img/product-img/single/product_12547007_5.jpg')}}" alt="image 1">
                                </div>
                                <div class="item">
                                    <img src="{{asset('assets/img/product-img/single/product_12547007_6.jpg')}}" alt="image 1">
                                </div>
                            </div>
                            <!-- End Slick Thumb Slider -->
                        </div>
                        <!-- End Product Image -->

                        <!-- Product Content -->
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-30">
                            <div class="product-page-content">
                                <h2 class="product-title">{{$clothe->name}} <i class="fa fa-eye" style="margin-left:350px;"> {{$clothe->views}}</i></h2>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <div class="product-price">
                                    <del>$499.00</del><span><span class="product-price-sign">$</span><span class="product-price-text">{{$clothe->price}}</span></span>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                </p>
                                <div class="row product-filters">
                                    <form class="col-md-6 filters-color">
                                        <label for="select-color">Select Color</label>

                                        <!--<select name="select-color" id="select-color" class="nice-select-box select-color">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="#f00">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="orange">Orange</option>
                                            <option value="green">Green</option>
                                            <option value="black">Black</option>
                                            <option value="gray">Gray</option>
                                        </select>-->

                                        <div class="color-selector">
                                            <div class="entry active" style="background: #000;">&nbsp;</div>
                                            <div class="entry" style="background: #7eabe9;">&nbsp;</div>
                                            <div class="entry" style="background: #f27123;">&nbsp;</div>
                                            <div class="entry" style="background: #d1d1d1;">&nbsp;</div>
                                        </div>
                                    </form>
                                    <form class="col-md-6 filters-size">
                                        <label for="select-size">Select Size</label>
                                        <!--<select name="select-size" id="select-size" class="nice-select-box">
                                            <option value="" selected="selected">Choose an option</option>
                                            <option value="l">L</option>
                                            <option value="m">M</option>
                                            <option value="s">S</option>
                                            <option value="x">X</option>
                                            <option value="xl">XL</option>
                                            <option value="xs">XS</option>
                                            <option value="xxl">XXL</option>
                                        </select>-->
                                        <div class="size-selector">
                                            <div class="entry active">S</div>
                                            <div class="entry">M</div>
                                            <div class="entry">L</div>
                                            <div class="entry">X</div>
                                            <div class="entry">XL</div>
                                        </div>
                                    </form>
                                </div>
                                <form class="single-variation-wrap">
                                    <div class="product-quantity">
                                        <span data-value="+" class="quantity-btn quantityPlus"></span>
                                        <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number">
                                        <span data-value="-" class="quantity-btn quantityMinus"></span>
                                    </div>
                                    <a href="{{route('pages.cart')}}" ><button type="submit" class="btn btn-lg btn-black"> <i class="fa fa-shopping-bag" ></i>Add to cart</button></a>
                                </form>
                                <div class="single-add-to-wrap">
                                    <a class="single-add-to-wishlist"><i class="fa fa-heart left" aria-hidden="true"></i><span>Add to Wishlist</span></a>
                                    <a class="single-add-to-compare "><i class="fa fa-refresh left" aria-hidden="true"></i><span>Add to Compare</span></a>
                                </div>
                                <div class="product-meta">
                                    <span>SKU : <span class="sku" itemprop="sku">005687</span></span>
                                    <span>Category : <span class="category" itemprop="category">{{ $clothe->category->name }}</span></span>
                                </div>
                                <div class="product-share">
                                    <span>Share :</span>
                                    <ul>
                                        <li><a href="../../login.php?u=http://nileforest.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://plus.google.com/share?url=http://nileforest.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="mailto:?subject=Check this http://nileforest.com/" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="http://pinterest.com/pin/create/button/?url=http://nileforest.com/exampleImage.jpg')}}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product -->

                <!-- Product Content Tab -->
                <div class="product-tabs-wrapper container">
                    <ul class="product-content-tabs nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <a class="active" href="#tab_description" role="tab" data-toggle="tab">Descriptiont</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="#tab_additional_information" role="tab" data-toggle="tab">Additional Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="#tab_reviews" role="tab" data-toggle="tab">Reviews (<span>3</span>)</a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="#tab_custom" role="tab" data-toggle="tab">Custom Tab</a>
                        </li>

                    </ul>
                    <div class="product-content-Tabs_wraper tab-content container">
                        <div id="tab_description" role="tabpanel" class="tab-pane fade in active">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_description-coll">Description</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_description-coll" class="shop_description product-collapse collapse container">
                                <div class="row">
                                    <div class=" col-md-6">
                                    {{$clothe->description}}
                                </div>

                                </div>
                            </div>
                            <!-- End Accordian Content -->
                        </div>

                        <div id="tab_additional_information" role="tabpanel" class="tab-pane fade">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_additional_information-coll">Additional Information</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_additional_information-coll" class="container product-collapse collapse">

                                <table class="shop_attributes">
                                    <tbody>
                                        <tr>
                                            <th>Color</th>
                                            <td>Black, Gray, White</td>
                                        </tr>
                                        <tr>
                                            <th>Weight</th>
                                            <td>5 kg</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td>60 x 40 x 60 cm</td>
                                        </tr>
                                        <tr>
                                            <th>Washcare</th>
                                            <td>Dry Clean</td>
                                        </tr>
                                        <tr>
                                            <th>Composition</th>
                                            <td>100% Polyester</td>
                                        </tr>
                                        <tr>
                                            <th>Lining composition</th>
                                            <td>100% Polyester</td>
                                        </tr>
                                        <tr>
                                            <th>Other info</th>
                                            <td>Ullamcorper nisl mus integer mollis vestibulu</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- End Accordian Content -->
                        </div>
                        <div id="tab_reviews" role="tabpanel" class="tab-pane fade">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_reviews-coll">Reviews (0)</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_reviews-coll" class=" product-collapse collapse container">
                                <div class="row">
                                    <div class="review-form-wrapper col-md-6">
                                        <h6 class="review-title">Add a Review </h6>
                                        <form class="comment-form">
                                            <div class="form-field-wrapper">
                                                <label>Your Rating</label>
                                                <p class="stars">
                                                    <span>
                                                        <a class="star-1" href="#">1</a>
                                                        <a class="star-2" href="#">2</a>
                                                        <a class="star-3" href="#">3</a>
                                                        <a class="star-4 active" href="#">4</a>
                                                        <a class="star-5" href="#">5</a>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <label>Your Review <span class="required">*</span></label>
                                                <textarea id="comment" class="form-full-width" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                            </div>
                                            <div class="form-field-wrapper">
                                                <label>Name <span class="required">*</span></label>
                                                <input id="author" class="input-md form-full-width" name="author" value="" size="30" aria-required="true" required="" type="text">
                                            </div>
                                            <div class="form-field-wrapper">
                                                <label>Email <span class="required">*</span></label>
                                                <input id="email" class="input-md form-full-width" name="email" value="" size="30" aria-required="true" required="" type="email">
                                            </div>
                                            <div class="form-field-wrapper">
                                                <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="comments col-md-6">
                                        <h6 class="review-title">Customer Reviews</h6>
                                        <!--<p class="review-blank">There are no reviews yet.</p>-->
                                        <ul class="commentlist">
                                            <li id="comment-101" class="comment-101">
                                                <img src="{{asset('assets/img/avatar.jpg')}}" class="avatar" alt="author">
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 100%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong itemprop="author">James Koster</strong>
                                                        &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">April 25, 2016</time>
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>Wow Amazing!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="102" class="comment-102">
                                                <img src="{{asset('assets/img/avatar.jpg')}}" class="avatar" alt="author">
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 80%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong itemprop="author">Michel</strong>
                                                        &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">April 14, 2016</time>
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>Wow Special!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="comment-103" class="comment-103">
                                                <img src="{{asset('assets/img/avatar.jpg')}}" class="avatar" alt="author">
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 60%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <em>Your comment is awaiting approval</em>
                                                        <!-- <strong itemprop="author">Kerry</strong>
                                                    &nbsp;&mdash;&nbsp;
                                                    <time itemprop="datePublished" datetime="">march 19, 2016</time>-->
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>When an unknown printer took a galley!</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordian Content -->
                        </div>
                        <div id="tab_custom" role="tabpanel" class="tab-pane fade">
                            <!-- Accordian Title -->
                            <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_custom-coll">Custom</h6>
                            <!-- End Accordian Title -->
                            <!-- Accordian Content -->
                            <div id="tab_custom-coll" class="product-collapse collapse container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{asset('assets/img/blog/blog_02.jpg')}}" alt="shipping delivery">
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="normal"><span>When an unknown printer took a galley of type.</span></h3>
                                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged. </p>
                                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged. </p>
                                        <a href="#" class="btn btn-sm btn-black mt-20">More Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordian Content -->
                        </div>
                    </div>
                </div>
                <!-- End Product Content Tab -->

                <!-- Product Carousel -->
                <div class="container product-carousel">
                    <h2 class="page-title">Related Products</h2>
                    <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        @forelse($clothes as $clothe)
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="{{ route('pages.detail',$clothe->id) }}">
                                    <img src="{{asset('upload/image/'.$clothe->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Cart"><i class="fa fa-shopping-bag"></i></a>
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Add To Whishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Quick&nbsp;View"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="product_detail.html">{{$clothe->name}}</a> </p>
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
                <!-- End Product Carousel -->

            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

    

    </div>
    <!-- End wrapper =============================-->
@endsection