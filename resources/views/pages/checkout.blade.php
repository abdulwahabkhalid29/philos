@extends('layout.scaffold')
@push('title')
Checkout
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
                                <span>Checkout</span>
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
                                <p class="checkout-info">
                                    Returning customer? <strong><a href="login-register.html">Click here to login</a></strong>
                                </p>
                                <p class="checkout-info">
                                    Have a coupon? <strong><a href="#">Click here to enter your code</a></strong>
                                </p>
                                <form class="product-checkout mt-45">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Billing details</h3>
                                            <div class="row">
                                                <div class="form-field-wrapper form-center col-sm-6">
                                                    <label for="billing_first_name" class="left">
                                                        First Name
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_first_name" title="First Name" value="" placeholder="First Name" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-6">
                                                    <label for="billing_last_name" class="left">
                                                        Last Name
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_last_name" title="Last Name" value="" placeholder="Last Name" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_company" class="left">Company Name</label>
                                                    <input class="input-md form-full-width" name="billing_company" title="Company Name" value="" placeholder="Company Name" type="text">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_country" class="left">
                                                        County
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <select name="billing_country" id="billing_country" class="input-md form-full-width" autocomplete="country" tabindex="-1" aria-hidden="true" required="" aria-required="true">
                                                        <option value="">Select a country�</option>
                                                        <option value="AX">�land Islands</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="PW">Belau</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Cura�ao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN" selected="selected">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao S.A.R., China</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="ST">S�o Tom� and Pr�ncipe</option>
                                                        <option value="BL">Saint Barth�lemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syria</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                        <option value="UM">United States (US) Minor Outlying Islands</option>
                                                        <option value="VI">United States (US) Virgin Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_address" class="left">
                                                        Address
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width mb-20" name="billing_address" title="Address" value="" placeholder="Street Address" type="text" required="" aria-required="true">
                                                    <input class="input-md form-full-width" name="billing_address_op" title="Address" value="" placeholder="Apartment, suite, unit etc. (optional)" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_town_city" class="left">
                                                        Town / City
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_town_city" title="Town / City" value="" placeholder="" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_state_county" class="left">
                                                        State / County
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_state_county" title="State / County" value="" placeholder="" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_state" class="left">
                                                        State / County
                                                        <abbr class="form-required" title="required">*</abbr></label>

                                                    <select name="billing_state" id="billing_state" class="input-md form-full-width" autocomplete="address-level1" data-placeholder="" tabindex="-1" aria-hidden="true" required="" aria-required="true">
                                                        <option value="">Select an option...</option>
                                                        <option value="AP">Andhra Pradesh</option>
                                                        <option value="AR">Arunachal Pradesh</option>
                                                        <option value="AS">Assam</option>
                                                        <option value="BR">Bihar</option>
                                                        <option value="CT">Chhattisgarh</option>
                                                        <option value="GA">Goa</option>
                                                        <option value="GJ">Gujarat</option>
                                                        <option value="HR">Haryana</option>
                                                        <option value="HP">Himachal Pradesh</option>
                                                        <option value="JK">Jammu and Kashmir</option>
                                                        <option value="JH">Jharkhand</option>
                                                        <option value="KA">Karnataka</option>
                                                        <option value="KL">Kerala</option>
                                                        <option value="MP">Madhya Pradesh</option>
                                                        <option value="MH">Maharashtra</option>
                                                        <option value="MN">Manipur</option>
                                                        <option value="ML">Meghalaya</option>
                                                        <option value="MZ">Mizoram</option>
                                                        <option value="NL">Nagaland</option>
                                                        <option value="OR">Orissa</option>
                                                        <option value="PB">Punjab</option>
                                                        <option value="RJ">Rajasthan</option>
                                                        <option value="SK">Sikkim</option>
                                                        <option value="TN">Tamil Nadu</option>
                                                        <option value="TS">Telangana</option>
                                                        <option value="TR">Tripura</option>
                                                        <option value="UK">Uttarakhand</option>
                                                        <option value="UP">Uttar Pradesh</option>
                                                        <option value="WB">West Bengal</option>
                                                        <option value="AN">Andaman and Nicobar Islands</option>
                                                        <option value="CH">Chandigarh</option>
                                                        <option value="DN">Dadra and Nagar Haveli</option>
                                                        <option value="DD">Daman and Diu</option>
                                                        <option value="DL">Delhi</option>
                                                        <option value="LD">Lakshadeep</option>
                                                        <option value="PY">Pondicherry (Puducherry)</option>
                                                    </select>
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_postcode" class="left">
                                                        Postcode / ZIP
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_postcode" title="Postcode" value="" placeholder="" type="text" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-6">
                                                    <label for="billing_phone" class="left">
                                                        Phone
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_phone" title="phone" value="" placeholder="(+00) 123 456 7890" type="tel" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-6">
                                                    <label for="billing_email" class="left">
                                                        Email
                                                        <abbr class="form-required" title="required">*</abbr></label>
                                                    <input class="input-md form-full-width" name="billing_email" title="Enter Email" value="" placeholder="Enter Email" type="email" required="" aria-required="true">
                                                </div>
                                                <div class="form-field-wrapper form-center col-sm-12">
                                                    <label for="billing_email" class="left">
                                                        <input class="" id="createaccount" name="createaccount" value="1" type="checkbox">
                                                        <span>Create an account?</span></label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-order-review">
                                                <h3>Your order</h3>
                                                <div class="product-checkout-review-order">
                                                    <div class="responsive-table">
                                                        <table class="">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-total">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="cart_item">
                                                                    <td class="product-name">Alpha Block Black Polo T-Shirt<strong> x 1</strong></td>
                                                                    <td class="product-total">
                                                                        <span class="product-price-amount amount"><span class="currency-sign">$</span>399.00</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="cart_item">
                                                                    <td class="product-name">Red Printed Round Neck T-Shirt<strong> x 2</strong></td>
                                                                    <td class="product-total">
                                                                        <span class="product-price-amount amount"><span class="currency-sign">$</span>598.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr class="cart-subtotal">
                                                                    <th>Subtotal</th>
                                                                    <td>
                                                                        <strong><span class="product-price-amount amount"><span class="currency-sign">$</span>997.00</span></strong>
                                                                    </td>
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
                                                                    </td>
                                                                </tr>
                                                                <tr class="order-total">
                                                                    <th>Total</th>
                                                                    <td>
                                                                        <span class="product-price-amount amount"><span class="currency-sign">$</span>1009.00</span>
                                                                    </td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                    <div class="product-checkout-payment">
                                                        <ul>
                                                            <li>
                                                                <input id="payment_method_bacs" name="payment_method" value="bacs" checked="checked" type="radio">
                                                                <label for="payment_method_bacs">Direct Bank Transfer</label>
                                                                <div class="payment_box payment_method_bacs">
                                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <input id="payment_method_cheque" name="payment_method" value="cheque" type="radio">
                                                                <label for="payment_method_cheque">Check payments</label>
                                                            </li>
                                                            <li>
                                                                <input id="payment_method_cod" name="payment_method" value="cod" type="radio">
                                                                <label for="payment_method_cod">Cash on Delivery</label>
                                                            </li>
                                                            <li>
                                                                <input id="payment_method_paypal" name="payment_method" value="paypal" type="radio">
                                                                <label for="payment_method_paypal">
                                                                    PayPal<img class="paypal-img" src="{{asset('assets/img/AM_mc_vs_ms_ae_UK.png')}}">
                                                                    <a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">What is PayPal?</a>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                        <div class="place-order">
                                                            <a class="btn btn-lg btn-color form-full-width" href="#">Place Order</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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