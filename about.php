<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from eazzy.me/html/bella-watch/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 May 2016 19:23:08 GMT -->
<head>
       <?php
         include "htmlhead.inc";
       ?>
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
       <?php
         include "preloader.inc";
       ?>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- Popup: Shopping cart items -->
          <?php
             include "shoppingcart.inc";
          ?>
            <!-- /Popup: Shopping cart items -->

            <!-- Header top bar -->
           <?php
             include "header.inc";
           ?>
            <!-- /Header top bar -->

            <!-- HEADER -->
            <header class="header fixed">
                <div class="header-wrapper">
                    <div class="container">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index-2.html"><img src="assets/img/logo-bella-shop.png" alt="Bella Shop"/></a>
                        </div>
                        <!-- /Logo -->

                        <!-- Header search -->
                        <div class="header-search">
                            <input class="form-control" type="text" placeholder="What are you looking?"/>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <!-- /Header search -->

                        <!-- Header shopping cart -->
                        <div class="header-cart">
                            <div class="cart-wrapper">
                                <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                                <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
                                <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
                                <!-- Mobile menu toggle button -->
                                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                                <!-- /Mobile menu toggle button -->
                            </div>
                        </div>
                        <!-- Header shopping cart -->

                    </div>
                </div>
                <div class="navigation-wrapper">
                    <div class="container">
                        <!-- Navigation -->
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li><a href="index-2.html">Homepage</a>
                                    <ul>
                                        <li><a href="index-2.html">Homepage 1</a></li>
                                        <li><a href="index-3.html">Homepage 2</a></li>
                                        <li><a href="index-4.html">Homepage 3</a></li>
                                        <li><a href="index-5.html">Homepage 4</a></li>
                                        <li><a href="index-6.html">Homepage 5</a></li>
                                        <li><a href="index-7.html">Homepage 6</a></li>
                                        <li><a href="index-8.html">Homepage 7</a></li>
                                        <li><a href="index-9.html">Homepage 8</a></li>
                                        <li><a href="index-10.html">Homepage 9</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Shop</a>
                                    <ul>
                                        <li><a href="category.html">Shop Sidebar Left</a></li>
                                        <li><a href="category-right.html">Shop Sidebar Right</a></li>
                                        <li><a href="category-list.html">Shop List View</a></li>
                                        <li><a href="product-details.html">Product Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Sidebar Left </a></li>
                                        <li><a href="blog-right.html">Blog Sidebar Right</a></li>
                                        <li><a href="blog-post.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio 3 columns</a></li>
                                        <li><a href="portfolio-4col.html">Portfolio 4 columns</a></li>
                                        <li><a href="portfolio-alt.html">Portfolio Alternate</a></li>
                                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu"><a href="#">Features</a>
                                    <ul>
                                        <li class="row">
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Womens</span></h4>
                                                <ul>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Rompers & Jumpsuits</a></li>
                                                    <li><a href="#">Bodysuits</a></li>
                                                    <li><a href="#">Shirts & Blouses</a></li>
                                                    <li><a href="#">Coats & Jackets</a></li>
                                                    <li><a href="#">Blazers</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Mens</span></h4>
                                                <ul>
                                                    <li><a href="#">T-Shirts & Vests</a></li>
                                                    <li><a href="#">Sweaters & Cardigans</a></li>
                                                    <li><a href="#">Hoodies & Sweats</a></li>
                                                    <li><a href="#">Coats & Jackets</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Pages</span></h4>
                                                <ul>
                                                    <li><a href="shortcodes.html"><strong>Shortcodes</strong></a></li>
                                                    <li><a href="typography.html"><strong>Typography</strong></a></li>
                                                    <li><a href="coming-soon.html"><strong>Coming soon</strong></a></li>
                                                    <li><a href="error-page.html"><strong>404 Page</strong></a></li>
                                                    <li><a href="about.html"><strong>About</strong></a></li>
                                                    <li><a href="login.html"><strong>Login</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 visible-xs">
                                                <h4 class="block-title"><span>My Account</span></h4>
                                                <ul>
                                                    <li><a href="accountinformation.html"> Account Information </a></li>
                                                    <li><a href="myaccount.html">My Account</a></li>                                        
                                                    <li><a href="cng-pw.html">Change Password</a></li>
                                                    <li><a href="address-book.html">Address Books</a></li>
                                                    <li><a href="order-history.html">Order History</a></li>
                                                    <li><a href="review-rating.html">Reviews and Ratings</a></li>
                                                    <li><a href="return.html">Returns Requests</a></li>
                                                    <li><a href="newsletter.html">Newsletter</a></li>
                                                    <li><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Header styles</span></h4>
                                                <ul>
                                                    <li><a href="index-style-1.html"><strong>Header style 1</strong></a></li>
                                                    <li><a href="index-style-2.html"><strong>Header style 2</strong></a></li>
                                                    <li><a href="index-style-3.html"><strong>Header style 3</strong></a></li>
                                                    <li><a href="index-style-4.html"><strong>Header style 4</strong></a></li>
                                                    <li><a href="index-style-5.html"><strong>Header style 5</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="product-list">
                                                    <div class="media">
                                                        <a class="pull-left media-link" href="#">
                                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                            <div class="rating">
                                                                <span class="star"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span>
                                                            </div>
                                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left media-link" href="#">
                                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                            <div class="rating">
                                                                <span class="star"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span>
                                                            </div>
                                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Men</a></li>
                                <li><a href="category.html">Women</a></li>
                                <li><a href="category.html">Kids</a></li>
                                <li><a href="category.html">New</a></li>
                                <li class="sale"><a href="category.html">Sale</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs">
                    <div class="container">
                        <div class="page-header">
                            <h1>About Us</h1>
                        </div>
                        <ul class="breadcrumb"></ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->

                <!-- PAGE -->
                <section class="page-section color">
                    <div class="container">

                        <p class="text-center lead"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis.</p>
                        <hr class="page-divider"/>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="assets/img/preview/team/team-1.jpg" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title">Standard Name <small>Support team</small></h4>
                                        <ul class="social-icons">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="assets/img/preview/team/team-2.jpg" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title">Standard Name <small>Support team</small></h4>
                                        <ul class="social-icons">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="assets/img/preview/team/team-3.jpg" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title">Standard Name <small>Support team</small></h4>
                                        <ul class="social-icons">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail thumbnail-team no-border no-padding">
                                    <div class="media">
                                        <img class="img-circle" src="assets/img/preview/team/team-4.jpg" alt=""/>
                                    </div>
                                    <div class="caption">
                                        <h4 class="caption-title">Standard Name <small>Support team</small></h4>
                                        <ul class="social-icons">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Top Sellers</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-1.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Alange Soehne : Lange 1</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Alange Soehne : Lange 2</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Breguet : Classique 9068</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Mens Watches</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-4.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : Fifty Fathoms Automatic</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-5.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5025-3630-52A</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-6.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5066F-1140-52B</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Womens Watches</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-7.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5025-3630-52A</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-8.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5015-1144-52</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-9.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : Women</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">About Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">News Letter</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-categories">
                                    <h4 class="widget-title">Information</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-tag-cloud">
                                    <h4 class="widget-title">Item Tags</h4>
                                    <ul>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Top Sellers</a></li>
                                        <li><a href="#">E commerce</a></li>
                                        <li><a href="#">Hot Deals</a></li>
                                        <li><a href="#">Supplier</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Theme</a></li>
                                        <li><a href="#">Template</a></li>
                                        <li><a href="#">Jthemes</a></li>
                                        <li><a href="#">Themeforest</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="copyright">Copyright 2015 BELLA SHOP   |   All Rights Reserved   |   Designed By Jthemes</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="payments">
                                    <ul>
                                        <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /WRAPPER -->

        <!-- JS Global -->
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="assets/plugins/superfish/js/superfish.min.js"></script>
        <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/plugins/jquery.sticky.min.js"></script>
        <script src="assets/plugins/jquery.easing.min.js"></script>
        <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
        <script src="assets/plugins/smooth-scrollbar.min.js"></script>

        <!-- JS Page Level -->
        <script src="assets/js/theme.js"></script>

        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="assets/plugins/jquery.cookie.js"></script>
        <script src="assets/js/theme-config.js"></script>
        <!--<![endif]-->

    </body>

<!-- Mirrored from eazzy.me/html/bella-watch/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 May 2016 19:23:14 GMT -->
</html>