<x-front>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All categories</span>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{route('product1.category',$category->slug)}}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__phone">
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="{{route('front.shop')}}" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($products as $product1)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset('product/'.$product1->image)}}">
                            <h5><a href="{{route('front.shopdetails',$product1->slug)}}">{{$product1->name}}</a></h5>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section><br><br>
    <!-- Categories Section End -->



    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- Banner End -->

     <!-- Latest Product Section Begin -->
     <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($products->slice(0,3) as $product1)


                                <a href="{{route('front.shopdetails', $product1->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('product/' .$product1->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($products->slice(0,3) as $product1)
                                <a href="{{route('front.shopdetails', $product1->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('product/' .$product1->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($products->slice(0,3) as $product1)
                                <a href="{{route('front.shopdetails', $product1->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('product/' .$product1->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>

                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($products->slice(0,3) as $product1)
                                <a href="{{route('front.shopdetails', $product1->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('product/' .$product1->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>

                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($products->slice(0,3) as $product1)
                                <a href="{{route('front.shopdetails', $product1->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('product/' .$product1->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>

                               @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($products->slice(0,3) as $product1)
                                <a href="{{route('front.shopdetails', $product1->slug)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('product/' .$product1->image)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>

                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->
</x-front>
