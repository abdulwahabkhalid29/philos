@extends('layout.scaffold')
@push('title')
Contact
@endpush
@section('content')

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
                                <span>Contact Us</span>
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
                        <div class="col-md-12">
                            <div id="map" class="map">
                                <img src="{{asset('asstes/img/capture.PNG')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-xs-30">
                            <h2 class="normal"><span>Stay In Touch</span></h2>
                            <p class="mb-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                            <h6>Company address</h6>
                            <p class="mb-25">
                                1 Wintergreen Dr. Huntley,
                                <br>
                                NY 11510,
                                <br>
                                United States
                            </p>
                            <h6>Contact Information</h6>
                            <ul class="Contact-information mb-25">
                                <li><i class="fa fa-envelope" aria-hidden="true"></i>info@sky.com</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>(013) 456789</li>
                            </ul>
                            <hr>
                            <div class="product-share mtb-30">
                                <ul class="list-none">
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="http://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-6 offset-md-2">
                            <h2 class="normal"><span>Contact Us</span></h2>
                            <form class="Contact-form" action="{{route('contact.store')}}" method="POST">
                                @csrf
                                <div class="form-field-wrapper">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input id="author" class="input-md form-full-width" name="name" placeholder=" EnterYour Name " value="" size="30" aria-required="true" required="" type="text">
                                   <small class="text-danger">@error ('name') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-field-wrapper">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input id="author-email" class="input-md form-full-width" name="email" placeholder="Enter Your Email Address " value="" size="30" aria-required="true" required="" type="email">
                                    <small class="text-danger">@error ('email') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-field-wrapper">
                                    <label>Your subject <span class="required">*</span></label>
                                    <input id="subject" class="input-md form-full-width" name="subject" placeholder="Enter Your Subject " value="" size="30" aria-required="true" required="" type="text">
                                    <small class="text-danger">@error ('subject') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-field-wrapper">
                                    <label> Number <span class="required">*</span></label>
                                    <input id="author" class="input-md form-full-width" name="number" placeholder=" EnterYour Number " value="" size="30" aria-required="true" required="" type="number">
                                    <small class="text-danger">@error ('number') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-field-wrapper">
                                    <label>Comments<span class="required">*</span></label>
                                    <textarea id="comment" class="form-full-width" name="comment" placeholder="Enter Your Subject " cols="45" rows="8" aria-required="true" required=""></textarea>
                                    <small class="text-danger">@error ('comment') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-field-wrapper">
                                    <input name="submit" id="submit" class="submit btn btn-md btn-color" value="Submit" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Page Content -->

        </div>
        <!-- End Page Content Wraper -->


    </div>
 @endsection
