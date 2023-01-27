@extends('welcome')
@section('content')

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

                            <li><a href="{{ url('/') }}">ALL</a></li>

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
                                            <img style="height: 300px" src="{{ URL::to($row->product_image) }}" alt="Product" />
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

@endsection
