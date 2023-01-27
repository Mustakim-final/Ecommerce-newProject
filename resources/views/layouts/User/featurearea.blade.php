@extends('welcome')
@section('content')
<div class="feature-area  mt-n-65px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- single item -->
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="assets/images/icons/1.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Free Shipping</h4>
                        <span class="sub-title">Capped at $39 per order</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="assets/images/icons/2.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Card Payments</h4>
                        <span class="sub-title">12 Months Installments</span>
                    </div>
                </div>
            </div>
            <!-- single item -->
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="feature-icon">
                        <img src="assets/images/icons/3.png" alt="">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Easy Returns</h4>
                        <span class="sub-title">Shop With Confidence</span>
                    </div>
                </div>
                <!-- single item -->
            </div>
        </div>
    </div>
</div>



<div class="product-area pt-100px pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-12">

                <div class="section-title text-center mb-0">
                    <h2 class="title">#products</h2>
                    <!-- Tab Start -->

                    <div class="nav-center">

                        <ul class="product-tab-nav nav align-items-center justify-content-center">

                            <li><a href="">ALL</a></li>

                            @foreach ($category as $row)


                            <li class="nav-item"><a href="{{ route('categoryby',$row->id) }}" class="nav-link">{{ $row->category_name }}</a></li>

                            @endforeach

                        </ul>


                    </div>


                    <!-- Tab End -->
                </div>

            </div>
            <!-- Section Title End -->
        </div>
        <!-- Section Title & Tab End -->


        <div class="row">
            <div class="col">
                <div class="tab-content mb-30px0px">
                    <!-- 1st tab start -->


                    <div class="tab-pane fade show active" id="tab-product--all">
                        <div class="row">
                            @foreach ($product as $row)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                data-aos-delay="200">
                                <!-- Single Prodect -->

                                <div class="product">
                                    <div class="thumb">
                                        <a href="single-product.html" class="image">
                                            <img style="height: 250px" src="{{ URL::to($row->product_image) }}" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="pe-7s-like"></i></a>
                                            <a href="#" class="action quickview"
                                                data-link-action="quickview" title="Quick view"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                    class="pe-7s-search"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i
                                                    class="pe-7s-refresh-2"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart </button>
                                    </div>
                                    <div class="content">
                                        <span class="ratings">
                                            <span class="rating-wrap">
                                                <span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">( 5 Review )</span>
                                        </span>
                                        <h5 class="title"><a href="{{ route('product.view',$row->id) }}">{{ $row->product_name }}
                                            </a>
                                        </h5>
                                        <span class="price">
                                            <span class="new">{{ $row->product_price }}</span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>



                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->

                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->

                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->

                    <!-- 4th tab end -->
                    <!-- 5th tab start -->

                    <!-- 5th tab end -->
                </div>
                <a href="shop-left-sidebar.html" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More
                    <i class="fa fa-arrow-right ml-15px" aria-hidden="true"></i></a>
            </div>
        </div>


    </div>
</div>


<div class="banner-area pt-100px pb-100px plr-15px">
    <div class="row m-0">

        @foreach ($banner as $row)

        <div class="col-12 col-lg-4 mb-md-30px mb-lm-30px">
            <div class="single-banner-2">
                <img src="{{ URL::to($row->banner_image) }}" alt="" style="height: 250px;width:250px">
                <div class="item-disc">
                    <h4 class="title">{{ $row->title }} <br> {{ $row->category_name }}</h4>
                    <a href="{{ route('categoryby',$row->category_id) }}" class="shop-link btn btn-primary ">Shop Now <i
                            class="fa fa-shopping-basket ml-5px" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        @endforeach



    </div>
</div>

{{-- // fast product --}}

<div class="product-area pt-100px pb-100px">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-lg col-md col-12">
                <div class="section-title mb-0">
                    <h2 class="title">#newarrivals</h2>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Tab Start -->
            <div class="col-lg-auto col-md-auto col-12">
                <ul class="product-tab-nav nav">

                    @foreach ($product as $row)

                    <li class="nav-item"><a class="nav-link active"
                        href="{{ route('uniqbrand.page',$row->manufacture_id) }}">{{ $row->manufacture_name }}</a></li>

                    @endforeach


                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->



        <div class="row">
            <div class="col">
                <div class="tab-content top-borber">
                    <!-- 1st tab start -->



                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="new-product-slider swiper-container slider-nav-style-1 small-nav">
                            <div class="new-product-wrapper swiper-wrapper">

                                @foreach ($product as $row)
                                <div class="new-product-item ">
                                    {{-- swiper-slide --}}



                                    <div class="product">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img src="{{ URL::to($row->product_image) }}" alt="Product" / style="height: 300px">
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist"
                                                    title="Wishlist"><i class="pe-7s-like"></i></a>
                                                <a href="#" class="action quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="pe-7s-search"></i></a>
                                                <a href="compare.html" class="action compare"
                                                    title="Compare"><i class="pe-7s-refresh-2"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <span class="ratings">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">( 5 Review )</span>
                                            </span>
                                            <h5 class="title"><a href="single-product.html">{{ $row->product_name }}

                                                </a>
                                            </h5>
                                            <span class="price">
                                                <span class="new">{{ $row->product_price }}</span>
                                            </span>
                                        </div>
                                    </div>





                                    <!-- Single Prodect -->

                                </div>
                                @endforeach


                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>










@endsection
