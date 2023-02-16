@extends('layout.scaffold1')
@push('title')
login
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
                                <a href="{{route('pages.index')}}">Home</a>
                                <span>Login & Register</span>
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
                        <div class="col-md-6">
                            <div class="form-border-box">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h2 class="normal"><span>Login Customers</span></h2>
                                    <p>Lorem ipsum dolor amet, conse adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="form-field-wrapper mt-4">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-md form-full-width" placeholder="Enter Your Email " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <p class="text-danger small">{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-field-wrapper mt-4">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-md form-full-width" placeholder="Enter Your password" name="password" required autocomplete="current-password">                                        @error('password')
                                        <span class="invalid-feedback " role="alert">
                                           <p class="text-danger small">{{ $message }}</p>
                                        </span>
                                        @enderror
                                    </div>
                                    <a href="{{route('register')}}">Don't have an account</a>
                                    <div class="form-field-wrapper mt-4">
                                        <input name="submit" id="submit" class="submit btn btn-md btn-black" value="Sign In" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-border-box">
                                <form>
                                    <h2 class="normal"><span>New Customers</span></h2>
                                    <p>Lorem ipsum dolor amet, conse adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="form-field-wrapper">
                                        <input name="submit" id="submit1" class="submit btn btn-md btn-color" value="Create An Account" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->

    </div>



@endsection