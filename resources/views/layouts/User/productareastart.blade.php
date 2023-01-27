@extends('welcome')
@section('content')

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

                    <li><a href="{{ url('/') }}">All</a></li>


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
                                                <img style="height: 300px" src="{{ URL::to($row->product_image) }}" alt="Product" />
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
