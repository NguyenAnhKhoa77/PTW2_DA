@extends('fontend.black')
@section('content')
    <main class="main">
        <div class="intro-slider-container">
            <div class="nav-inside">
                <div class="intro-slide">
                    <div class="container intro-content">
                        <h3 class="intro-subtitle">Bedroom Furniture</h3>
                        <h1 class="intro-title">Find Comfort <br>That Suits You.</h1>
                        <a href="category.html" class="btn btn-primary">
                            <span>Shop Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End .intro-slide -->

                <div class="intro-slide">
                    <div class="container intro-content">
                        <h3 class="intro-subtitle">Deals and Promotions</h3>
                        <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span
                                class="text-primary"><sup>$</sup>49,99</span></h1>
                        <a href="category.html" class="btn btn-primary">
                            <span>Shop Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End .intro-slide -->

                <div class="intro-slide">
                    <div class="container intro-content">
                        <h3 class="intro-subtitle">Living Room</h3>
                        <h1 class="intro-title">
                            Make Your Living Room <br>Work For You.<br>
                            <span class="text-primary">
                                <sup class="text-white font-weight-light">from</sup><sup>$</sup>9,99
                            </span>
                        </h1>
                        <a href="category.html" class="btn btn-primary">
                            <span>Shop Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End .intro-slide -->
            </div><!-- End .owl-carousel owl-simple -->
        </div><!-- End .intro-slider-container -->
        <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

        <div class="mb-3"></div><!-- End .mb-6 -->

        <div class="container">
            <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab"
                        role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab"
                        aria-controls="products-sale-tab" aria-selected="false">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab"
                        aria-controls="products-top-tab" aria-selected="false">Top Rated</a>
                </li>
            </ul>
        </div><!-- End .container -->

        <div class="container-fluid">
            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel"
                    aria-labelledby="products-featured-link">
                    <div class="product-stage">
                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-1-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-1-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $251,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-2-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-2-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Octo 4240</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $746,00
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #1f1e18;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-3-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-3-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $970,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-4-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-4-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$337,00</span>
                                    <span class="old-price">Was $449,00</span>
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #878883;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-5-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-5-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $675,00
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #74543e;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-6-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-6-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $457,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-1-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-1-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $251,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel"
                    aria-labelledby="products-sale-link">
                    <div class="product-stage">
                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-5-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-5-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $675,00
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #74543e;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-6-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-6-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Elephant Armchair</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $457,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-1-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-1-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $251,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel"
                    aria-labelledby="products-top-link">
                    <div class="product-stage">
                        <div class="product ">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-2-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-2-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Octo 4240</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $746,00
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #1f1e18;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <span class="product-label label-circle label-new">New</span>
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-3-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-3-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Flow Slim Armchair</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    $970,00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->

                        <div class="product ">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/products/product-4-1.jpg" alt="Product image"
                                        class="product-image">
                                    <img src="fontend/images/demos/demo-2/products/product-4-2.jpg" alt="Product image"
                                        class="product-image-hover">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist"><span>add to
                                            wishlist</span></a>
                                </div><!-- End .product-action-vertical -->

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$337,00</span>
                                    <span class="old-price">Was $449,00</span>
                                </div><!-- End .product-price -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #878883;"><span
                                            class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #dfd5c2;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container-fluid -->

        <div class="mb-5"></div><!-- End .mb-5 -->

        <div class="bg-light deal-container pt-5 pb-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="deal">
                            <div class="deal-content">
                                <h4>Limited Quantities</h4>
                                <h2>Deal of the Day</h2>

                                <h3 class="product-title"><a href="product.html">POÄNG</a></h3>
                                <!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">$149.00</span>
                                    <span class="old-price">Was $240.00</span>
                                </div><!-- End .product-price -->

                                <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->

                                <a href="product.html" class="btn btn-primary">
                                    <span>Shop Now</span><i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .deal-content -->
                            <div class="deal-image">
                                <a href="product.html">
                                    <img src="fontend/images/demos/demo-2/deal/product-1.jpg" alt="image">
                                </a>
                            </div><!-- End .deal-image -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-9 -->

                    <div class="col-lg-3">
                        <div class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block">
                            <a href="#">
                                <img src="fontend/images/demos/demo-2/banners/banner-5.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-top banner-content-center">
                                <h4 class="banner-subtitle">The Best Choice</h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title">AGEN</h3><!-- End .banner-title -->
                                <div class="banner-text text-primary">$49.99</div><!-- End .banner-text -->
                                <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .bg-light -->

        <div class="mb-6"></div><!-- End .mb-6 -->

        <div class="container">
            <div class="heading heading-center mb-3">
                <h2 class="title">Top Selling Products</h2><!-- End .title -->

                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab"
                            role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab" role="tab"
                            aria-controls="top-fur-tab" aria-selected="false">Furniture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-decor-link" data-toggle="tab" href="#top-decor-tab" role="tab"
                            aria-controls="top-decor-tab" aria-selected="false">Decoration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-light-link" data-toggle="tab" href="#top-light-tab" role="tab"
                            aria-controls="top-light-tab" aria-selected="false">Lighting</a>
                    </li>
                </ul>
            </div><!-- End .heading -->

            <div class="tab-content">
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel"
                    aria-labelledby="top-all-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-7-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-7-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Petite Table Lamp</a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $401,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-8-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-8-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Madra Log Holder</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $401,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-9-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-9-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Furniture</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Garden Armchair</a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$94,00</span>
                                            <span class="old-price">Was $94,00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-10-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-10-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Carronade Large
                                                Suspension
                                                Lamp</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $401,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span
                                                    class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-11-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-11-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Original Outdoor
                                                Beanbag</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $259,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-12-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-12-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Furniture</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">2-Seater</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $3.107,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-13-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-13-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Furniture</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $2.486,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-14-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-14-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Cushion Set 3
                                                Pieces</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-15-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-15-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Cushion Set 3
                                                Pieces</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-16-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-16-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Carronade Table
                                                Lamp</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $499,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-9-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-9-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Furniture</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Garden Armchair</a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$94,00</span>
                                            <span class="old-price">Was $94,00</span>
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-12-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-12-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Furniture</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">2-Seater</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $3.107,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-13-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-13-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Furniture</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $2.486,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-8-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-8-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Madra Log Holder</a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $401,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #927764;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-11-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-11-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Original Outdoor
                                                Beanbag</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $259,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-14-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-14-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Cushion Set 3
                                                Pieces</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-15-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-15-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Decor</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Cushion Set 3
                                                Pieces</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                    <div class="products">
                        <div class="row justify-content-center">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-7-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-7-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Petite Table Lamp</a>
                                        </h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            $401,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-10-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-10-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Carronade Large
                                                Suspension
                                                Lamp</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $401,00
                                        </div><!-- End .product-price -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #e8e8e8;"><span
                                                    class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div><!-- End .product-nav -->

                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                            <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                <div class="product ">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="fontend/images/demos/demo-2/products/product-16-1.jpg"
                                                alt="Product image" class="product-image">
                                            <img src="fontend/images/demos/demo-2/products/product-16-2.jpg"
                                                alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist "><span>add
                                                    to
                                                    wishlist</span></a>
                                        </div><!-- End .product-action-vertical -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Carronade Table
                                                Lamp</a>
                                        </h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $499,00
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to
                                                cart</span></a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container -->
    </main><!-- End .main -->
@endsection
