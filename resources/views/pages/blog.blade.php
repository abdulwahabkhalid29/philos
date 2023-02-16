@extends('layout.scaffold')
@push('title')
Blog
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


        <!-- Page Content Wraper -->
        <div class="page-content-wraper">
            <!-- Bread Crumb -->
            <section class="breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav class="breadcrumb-link">
                                <a href="#">Home</a>
                                <span>Blog Page</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bread Crumb -->

            <!-- Page Content -->
            <section class="content-page">
                <div class="container">
                    <div class="row">
                        <!-- Blog Content -->
                        <div class="col-md-9 blog-entry style-1">
                            <div class="blog-box">
                                <div class="blog-img-wrap">
                                    <img src="{{asset('upload/image/'.$blog->image)}}" alt="philos" />
                                </div>
                                <div class="blog-box-content">
                                    <div class="blog-box-content-inner">
                                        <h4 class="blog-title"><a href="blog-single.html">{{ $blog->title }}</a></h4>
                                        <p class="info"><span>by <a href="#">{{ $blog->name }}</a></span><span>{{ date('d M Y' , strtotime( $blog->created_at ))}}</span></p>
                                        <div class="blog-description-content">
                                        {{ $blog->description }}
                                    </div>
                                        <a class="btn btn-xs btn-gray">{{ $blog->link }} <i class="fa fa-long-arrow-right right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-comments mb-60">
                        
                        
                        <div class="comments col-md-6">
                            <h5 class="review-title">Customer Reviews</h5>
                            <!--<p class="review-blank">There are no reviews yet.</p>-->
                            <ul class="commentlist">
                                @forelse($comments as $comment)
                                <li id="comment-101" class="comment-101">
                                    @if(!empty($comment->profile->thumbnail))
                                    <img width="250px" height="150px" src="{{asset('upload/profile/'.$comment->profile->thumbnail)}}" class="avatar">
                                    @else
                                    <img height="100px" width="148px" src="{{asset('assets/img/avatar.jpg')}}" alt="" class="avatar">
                                    @endif
                                                <div class="comment-text">
                                                    <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                        <span style="width: 100%"></span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong itemprop="author">{{ $comment->user->name }}</strong>
                                                        &nbsp;—&nbsp;
                                                    <time itemprop="datePublished" datetime="">{{date('j F, Y',strtotime($comment->created_at))}}</time>
                                                    </p>
                                                    <div class="description" itemprop="description">
                                                        <p>{{$comment->comment}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @empty
                                            no data found
                                            @endforelse
                                        </ul>
                                    </div>
                                    </div>

                     <div class="leave-comment">
                        <h4 class="blog-section-title border-left mb-30 mt-5">leave your comment</h4>
                        <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                              <div class="col-md-12">
                                 <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                 <textarea name="comment" class="custom-textarea" cols="60" rows="10"  placeholder="Your comment here..." ></textarea><br><br>
                                 <button class="btn btn-sm btn-color" type="submit">submit comment</button>
                              </div>
                           </div>
                        </form>
                     </div>
                        </div>
                        
                        <!-- End Blog Content -->
                        
                        <!-- Sidebar -->
                        <div class="sidebar-container col-md-3">

                            <!-- Categories -->

                            <!-- Recent Posts -->
                            <div class="widget-sidebar widget-product">
                                <h6 class="widget-title">Recent Posts</h6>
                                <ul class="widget-content">

                                    <!--Item-->
                                    @forelse($blogs as $blog)
                                    <li>
                                        <a class="product-img" href="{{ route('pages.blog' , $blog->id) }}">
                                            <img src="{{asset('upload/image/'.$blog->image)}}" alt="">
                                        </a>
                                        <div class="product-content">
                                            <a class="product-link" href="{{ route('pages.blog' , $blog->slug) }}">{{$blog->title}}</a>
                                            <span class="date-description">{{ date('d M Y' , strtotime( $blog->created_at ))}}</span>
                                        </div>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>


                            <!-- Tag -->
                            <div class="widget-sidebar widget-filter-tag">
                                <h6 class="widget-title">Popular Tag</h6>
                                <ul class="widget-content">
                                    <li>
                                        <a href="#">Shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">Bag</a>
                                    </li>
                                    <li>
                                        <a href="#">Vintage</a>
                                    </li>
                                    <li>
                                        <a href="#">Sweaters</a>
                                    </li>
                                    <li>
                                        <a href="#">t-shirt</a>
                                    </li>
                                    <li>
                                        <a href="#">white</a>
                                    </li>
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">New</a>
                                    </li>
                                    <li>
                                        <a href="#">Popular</a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                        <!-- End Sidebar -->

                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->



    </div>
@endsection