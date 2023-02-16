@extends('layout.scaffold')
@push('title')
Cart
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
                                <span>Cart</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Bread Crumb -->

            <!-- Page Content -->
            <section class="content-page">
                <div class="container mb-80">
                    <div class="row">
                        <div class="col-sm-12">
                            <article class="post-8">
                                <form class="cart-form" action="#" method="post">
                                    <div class="cart-product-table-wrap responsive-table">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-remove"></th>
                                                    <th class="product-thumbnail"></th>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-remove">
                                                        <a href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a>
                                                            <img src="{{asset('assets/img/product-img/small/product_12547554.jpg')}}" alt="" /></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a>Alpha Block Black Polo T-Shirt</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="product-price-amount amount"><span class="currency-sign">$</span>399.00</span>
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity">
                                                            <span data-value="+" class="quantity-btn quantityPlus"></span>
                                                            <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number" />
                                                            <span data-value="-" class="quantity-btn quantityMinus"></span>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="product-price-sub_totle amount"><span class="currency-sign">$</span>399.00</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="product-remove">
                                                        <a href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a>
                                                            <img src="{{asset('assets/img/product-img/small/product_12547555.jpg')}}" alt="" /></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a>Red Printed Round Neck T-Shirt</a>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="product-price-amount amount"><span class="currency-sign">$</span>299.00</span>
                                                    </td>
                                                    <td>
                                                        <div class="product-quantity">
                                                            <span data-value="+" class="quantity-btn quantityPlus"></span>
                                                            <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="2" title="Quantity" type="number" />
                                                            <span data-value="-" class="quantity-btn quantityMinus"></span>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="product-price-sub_totle amount"><span class="currency-sign">$</span>598.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row cart-actions">
                                        <div class="col-md-6">
                                            <div class="coupon">
                                                <input class="input-md" id="coupon_code" name="coupon_code" title="Coupon Code" value="" placeholder="Enter Coupon Code" type="text">
                                                <input class="btn btn-md btn-black" name="coupon_code" value="Apply Coupon" type="submit" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <input class="btn btn-md btn-gray" name="update_cart" value="Update cart" disabled="" type="submit">
                                        </div>
                                    </div>
                                </form>
                                <div class="cart-collateral">
                                    <div class="cart_totals">
                                        <h3>Cart totals</h3>
                                        <div class="responsive-table">
                                            <table>
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="product-price-amount amount"><span class="currency-sign">$</span>997.00</span></td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td>
                                                            <ul id="shipping_method">
                                                                <li>
                                                                    <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_flat_rate" value="legacy_flat_rate" class="shipping_method" checked="checked" type="radio">
                                                                    <label for="shipping_method_0_legacy_flat_rate">Flat Rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>12.00</span></label>
                                                                </li>
                                                                <li>
                                                                    <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_free_shipping" value="legacy_free_shipping" class="shipping_method" type="radio">
                                                                    <label for="shipping_method_0_legacy_free_shipping">Free Shipping</label>
                                                                </li>
                                                                <li>
                                                                    <input name="shipping_method[0]" data-index="0" id="shipping_method_0_legacy_local_delivery" value="legacy_local_delivery" class="shipping_method" type="radio">
                                                                    <label for="shipping_method_0_legacy_local_delivery">Local Delivery</label>
                                                                </li>
                                                            </ul>
                                                            <form>
                                                                <p>
                                                                    <a href="#">Calculate shipping</a>
                                                                </p>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td><span class="product-price-amount amount"><span class="currency-sign">$</span>1009.00</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="product-proceed-to-checkout">
                                            <a class="btn btn-lg btn-color form-full-width" href="checkout.html">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->


    </div>
@endsection