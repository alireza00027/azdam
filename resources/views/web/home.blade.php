@extends('layouts.app')
@section('style')
    
@endsection
@section('content')
<div class="intro-section mb-2">
    <div class="row">
        <div class="intro-slide-wrapper col-lg-9">
            <div class="swiper-container swiper-theme animation-slider pg-inner pg-xxl-hide pg-show pg-white nav-xxl-show nav-hide" data-swiper-options = "{
                'spaceBetween': 0,
                'slidesPerView': 1
            }">
                <div class="swiper-wrapper gutter-no row cols-1">
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm text-center" 
                        style="background-image: url(webTemplate/assets/images/demos/demo11/slides/slide-1.jpg); background-color: #5B98B7;">
                        <div class="banner-content y-50">
                            <h3 class="banner-title text-capitalize text-white font-secondary font-weight-normal ls-0 slide-animate" 
                                data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.2s'}">
                                نور شهر
                            </h3>
                            <h4 class="banner-subtitle text-uppercase text-white font-weight-normal ls-0 slide-animate" 
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                روندهای جدید این فصل
                            </h4>
                            <span class="font-weight-bolder text-uppercase text-white slide-animate d-block ls-normal" 
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                نمایش مد 1401
                            </span>
                            <a href="shop-banner-sidebar.html" class="btn btn-white btn-outline btn-rounded btn-icon-right br-xs slide-animate"
                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.6s'}">
                                اکنون کشف کنید<i class="w-icon-long-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End of Intro Slide 1 -->
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide2 br-sm"
                        style="background-image: url(webTemplate/assets/images/demos/demo11/slides/slide-2.jpg); background-color: #DFE0E4;">
                        <div class="banner-content">
                            <div class="slide-animate" data-animation-options="{
                                'name': 'fadeInDownShorter', 'duration': '1s'
                                }">
                                <h3 class="banner-title text-capitalize text-dark font-secondary font-weight-normal mb-1">تازه رسیده ها!</h3>
                                <h4 class="banner-price-info text-capitalize text-dark mb-4 ls-25">
                                    سبک زندگی از <strong class="text-secondary">29000 تومان</strong>
                                </h4>
                                <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">
                                    اکنون کشف کنید
                                    <i class="w-icon-long-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Intro Slide 2 -->
                    <div class="swiper-slide banner banner-fixed intro-slide intro-slide3 br-sm" style="background-image: url(assets/images/demos/demo11/slides/slide-3.jpg); background-color: #ECECEC;">
                        <div class="banner-content y-50">
                            <div class="slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s'}">
                                <h3 class="banner-title text-capitalize text-dark font-secondary font-weight-normal">از فروشگاه اینترنتی</h3>
                                <h4 class="banner-price-info text-dark ls-25">
                                    <strong>دریافت کنید</strong><br>
                                    35% تخفیف!
                                </h4>
                                <div class="d-flex">
                                    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right mt-4 mr-6">
                                        اکنون بخرید
                                        <i class="w-icon-long-arrow-left"></i>
                                    </a>
                                    <img src="webTemplate/assets/images/demos/demo11/sale-sm.png" alt="sale" width="196" height="136">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Intro Slide 3 -->
                </div>
                <div class="swiper-pagination"></div>
                <button class="swiper-button-next"></button>
                <button class="swiper-button-prev"></button>
            </div>
        </div>
        <div class="intro-banner-wrapper col-lg-3 mt-4">
            <div class="banner banner-fixed intro-banner col-lg-12 col-sm-6 br-sm mb-4">
                <figure>
                    <img src="webTemplate/assets/images/demos/demo11/banner/banner-1.jpg" alt="Category Banner" width="680" height="180" style="background-color: #E4E7EC;" />
                </figure>
                <div class="banner-content">
                    <h4 class="banner-subtitle text-capitalize text-default font-secondary font-weight-normal">محصولات برتر </h4>
                    <h3 class="banner-title text-dark text-uppercase ls-25">حوله نرم</h3>
                    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-link btn-underline btn-icon-right">
                        اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                    </a>
                </div>
            </div>
            <!-- End of Intro Banner -->    
            <div class="banner banner-fixed intro-banner col-lg-12 col-sm-6 intro-banner2 mb-4 br-sm">
                <figure>
                    <img src="webTemplate/assets/images/demos/demo11/banner/banner-2.jpg" alt="Category Banner" width="680" height="180" style="background-color: #33363B;" />
                </figure>
                <div class="banner-content">
                    <h4 class="banner-subtitle text-capitalize font-secondary font-weight-normal">تازه رسیده ها </h4>
                    <h3 class="banner-title text-white text-uppercase ls-25">دوربین های جدید</h3>
                    <a href="shop-banner-sidebar.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                        اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                    </a>
                </div>
            </div>
            <!-- End of Intro Banner -->    
        </div>
    </div>
</div>
<!-- End of Intro-section -->

<div class="swiper-container swiper-theme icon-box-wrapper br-sm bg-white" data-swiper-options="{
    'loop': true,
    'spaceBetween': 10,
    'autoplay': false,
    'autoplayTimeout': 4000,
    'slidesPerView': 1,
    'breakpoints': {
        '576': {
            'slidesPerView': 2
        },
        '768': {
            'slidesPerView': 2
        },
        '992': {
            'slidesPerView': 3
        },
        '1200': {
            'slidesPerView': 4
        }
    }
    }">
    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
        <div class="swiper-slide icon-box icon-box-side text-dark">
            <span class="icon-box-icon icon-shipping">
                <i class="w-icon-truck"></i>
            </span>
            <div class="icon-box-content">
                <h4 class="icon-box-title font-weight-bolder">ارسال رایگان و مرجوعی</h4>
                <p class="text-default">برای تمام سفارشات بیش از 99 دلار</p>
            </div>
        </div>
        <div class="swiper-slide icon-box icon-box-side text-dark">
            <span class="icon-box-icon icon-payment">
                <i class="w-icon-bag"></i>
            </span>
            <div class="icon-box-content">
                <h4 class="icon-box-title font-weight-bolder">پرداخت امن</h4>
                <p class="text-default">ما تضمین می کنیم</p>
            </div>
        </div>
        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
            <span class="icon-box-icon icon-money">
                <i class="w-icon-money"></i>
            </span>
            <div class="icon-box-content">
                <h4 class="icon-box-title font-weight-bolder">تضمین بازگشت پول</h4>
                <p class="text-default">پس از 30 روز بازگشت</p>
            </div>
        </div>
        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
            <span class="icon-box-icon icon-chat">
                <i class="w-icon-chat"></i>
            </span>
            <div class="icon-box-content">
                <h4 class="icon-box-title font-weight-bolder">پشتیبانی مشتری</h4>
                <p class="text-default">24/7 با ما تماس بگیرید یا ایمیل بزنید</p>
            </div>
        </div>
    </div>
</div>
<!-- End of Icon Box Wrapper -->

<div class="swiper-container swiper-theme icon-category-wrapper shadow-swiper appear-animate mb-10 pb-2"
    data-swiper-options="{
    'spaceBetween': 20,
    'slidesPerView': 2,
    'breakpoints': {
        '576': {
            'slidesPerView': 3
        },
        '768': {
            'slidesPerView': 4
        },
        '992': {
            'slidesPerView': 5
        },
        '1200': {
            'slidesPerView': 8
        }
    }
    }">
    <div class="swiper-wrapper row cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-tshirt"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">مد </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-sofa"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">مبلمان </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-basketball"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">ورزشی </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-bow"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">اسباب بازی </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-camera"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">دوربین ها </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-gamepad"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">بازی ها </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-headphone"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">هدفون ها </a></h4>
            </div>
        </div>
        <div class="swiper-slide category category-icon">
            <a href="shop-banner-sidebar.html">
                <figure class="category-media">
                    <i class="w-icon-mobile"></i>
                </figure>
            </a>
            <div class="category-content">
                <h4 class="category-name"><a href="shop-banner-sidebar.html">گوشی های هوشمند </a></h4>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<!-- End of Icon Category Wrapper -->

<div class="banner banner-big-sale appear-animate d-flex pl-3 pr-3 br-sm mb-8" style="background-image: url(webTemplate/assets/images/demos/demo11/banner/full.jpg);
    background-color: #383839;">
    <div class="banner-content align-items-center d-flex flex-wrap">
        <h4 class="banner-price-info text-secondary text-uppercase lh-1">
            50% تخفیف
        </h4>
        <h4 class="banner-subtitle text-uppercase text-white font-weight-bold">فروش بزرگ تا</h4>
        <h3 class="banner-title text-uppercase text-white font-weight-bold ml-2 mr-9">در فروشگاه الکترونیک.</h3>
        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">
            اکنون کشف کنید
            <i class="w-icon-long-arrow-left"></i>
        </a>
    </div>
</div>
<!-- End of Banner Big Sale-->

<div class="title-link-wrapper title-deals appear-animate after-none">
    <h2 class="title">معاملات روز</h2>
    <div class="product-countdown-container font-size-sm text-white bg-primary align-items-center mr-auto mt-2 mb-1 br-xs d-flex">
        <label>پیشنهاد به پایان می رسد در: </label>
        <div class="product-countdown countdown-compact ml-1 font-weight-bold" data-until="+10d"
            data-relative="true" data-compact="true">10روز,00:00:00</div>
    </div>
    <a href="#" class="ml-0 mb-0">محصولات بیشتر <i class="w-icon-long-arrow-left"></i></a>
</div>
<div class="swiper-container swiper-theme product-deals-wrapper appear-animate mb-6"
    data-swiper-options="{
    'spaceBetween': 20,
    'slidesPerView': 2,
    'breakpoints': {
        '576': {
            'slidesPerView': 3
        },
        '768': {
            'slidesPerView': 4
        },
        '992': {
            'slidesPerView': 5
        }
    }
    }">
    <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
        <div class="swiper-slide product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-1-1.jpg" alt="Product" width="300"
                            height="337">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-1-2.jpg" alt="Product" width="300"
                            height="337">
                    </a>
                    <div class="product-action-horizontal">
                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                    </div>
                </figure>
                <div class="product-details">
                    <h4 class="product-name"><a href="product-default.html">ساعت راه راه چرمی</a></h4>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(1 نظر )</a>
                    </div>
                    <div class="product-price">
                        <ins class="new-price">29000 تومان</ins><del class="old-price">192000 تومان</del>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-2-1.jpg" alt="Product" width="300"
                            height="337">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-2-2.jpg"  alt="Product" width="300"
                            height="337">
                    </a>
                    <div class="product-action-horizontal">
                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                    </div>
                </figure>
                <div class="product-details">
                    <h4 class="product-name"><a href="product-default.html">ماشین در حال اجرا</a></h4>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 60%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(1 نظر )</a>
                    </div>
                    <div class="product-price">
                        <ins class="new-price">22000 تومان</ins><del class="old-price">28000 تومان </del>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-3-1.jpg" alt="Product" width="300"
                            height="337">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-3-2.jpg" alt="Product" width="300"
                        height="337">
                    </a>
                    <div class="product-action-horizontal">
                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                    </div>
                </figure>
                <div class="product-details">
                    <h4 class="product-name"><a href="product-default.html">ساعت مشکی مردانه</a></h4>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 100%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(5 نظر )</a>
                    </div>
                    <div class="product-price">
                        <ins class="new-price">75000 تومان</ins><del class="old-price">79000 تومان</del>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-4-1.jpg" alt="Product" width="300"
                            height="337">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-4-2.jpg" alt="Product" width="300"
                            height="337">
                    </a>
                    <div class="product-action-horizontal">
                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                    </div>
                </figure>
                <div class="product-details">
                    <h4 class="product-name"><a href="product-default.html">کفش ورزشی تابستانی </a></h4>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 100%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                    </div>
                    <div class="product-price">
                        <ins class="new-price">85000 تومان </ins><del class="old-price">125000 تومان </del>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center">
                <figure class="product-media">
                    <a href="product-default.html">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-5-1.jpg" alt="Product" width="300"
                            height="337">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-5-2.jpg" alt="Product" width="300"
                        height="337">
                    </a>
                    <div class="product-action-horizontal">
                        <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                        <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                        <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                    </div>
                </figure>
                <div class="product-details">
                    <h4 class="product-name"><a href="product-default.html">بهترین کیف عابر پیاده</a></h4>
                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="product-default.html" class="rating-reviews">(4 نظر )</a>
                    </div>
                    <div class="product-price">
                        <ins class="new-price">78000 تومان</ins><del class="old-price">88000 تومان</del>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrap -->
    </div>
    <div class="swiper-pagination"></div>
</div>
<!-- End of Prodcut Deals Wrapper -->

<div class="row cols-lg-2 mb-6">
    <div class="mb-4">
        <div class="vendor-wrapper h-100 br-sm pb-0"  style="background-image: url(webTemplate/assets/images/demos/demo11/vendor/bg.jpg);">
            <h2 class="vendor-title font-weight-bold ls-25 mb-1">فروشندگان در حال رشد</h2>
            <p>بیش از 2000 فروشنده به بازار ما پیوسته اند و خریداران و مشتریان زیادی دارند.</p>
            <div class="row cols-md-2">
                <div>
                    <div class="vendor-widget mb-4">
                        <h3 class="vendor-subtitle text-center font-weight-bold ls-25 mt-3 mb-3">پرفروش ترین فروشنده ها</h3>
                        <div class="swiper-container swiper-theme appear-animate pb-2"
                            data-swiper-options="{
                            'spaceBetween': 5,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 3
                                },
                                '576': {
                                    'slidesPerView': 4
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 2
                                },
                                '1200': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-3">
                                <div class="swiper-slide">
                                    <figure>
                                        <a href="product-default.html">
                                            <img src="webTemplate/assets/images/demos/demo11/vendor/1.jpg" alt="Vendor image"
                                                width="130" height="146" />
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure>
                                        <a href="product-default.html">
                                            <img src="webTemplate/assets/images/demos/demo11/vendor/2.jpg" alt="Vendor image"
                                                width="130" height="146" />
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure>
                                        <a href="product-default.html">
                                            <img src="webTemplate/assets/images/demos/demo11/vendor/3.jpg" alt="Vendor image"
                                                width="130" height="146"  />
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure>
                                        <a href="product-default.html">
                                            <img src="webTemplate/assets/images/demos/demo11/vendor/4.jpg" alt="Vendor image"
                                                width="130" height="146"/>
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vendor-widget mb-4">
                        <h3 class="vendor-subtitle text-center font-weight-bold ls-25 mt-3 mb-3">رتبه بندی برتر فروشندگان</h3>
                        <div class="swiper-container swiper-theme appear-animate  pb-2"
                        data-swiper-options="{
                        'spaceBetween': 5,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '480': {
                                'slidesPerView': 3
                            },
                            '576': {
                                'slidesPerView': 4
                            },
                            '768': {
                                'slidesPerView': 3
                            },
                            '992': {
                                'slidesPerView': 2
                            },
                            '1200': {
                                'slidesPerView': 3
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-3">
                            <div class="swiper-slide">
                                <figure>
                                    <a href="product-default.html">
                                        <img src="webTemplate/assets/images/demos/demo11/vendor/4.jpg" alt="Vendor image"
                                            width="130" height="146" />
                                    </a>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <a href="product-default.html">
                                        <img src="webTemplate/assets/images/demos/demo11/vendor/5.jpg" alt="Vendor image"
                                            width="130" height="146"  />
                                    </a>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <a href="product-default.html">
                                        <img src="webTemplate/assets/images/demos/demo11/vendor/6.jpg" alt="Vendor image"
                                            width="130" height="146"/>
                                    </a>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure>
                                    <a href="product-default.html">
                                        <img src="webTemplate/assets/images/demos/demo11/vendor/1.jpg" alt="Vendor image"
                                            width="130" height="146" />
                                    </a>
                                </figure>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4">
        <div class="vendor-wrapper h-100 br-sm pb-0"  style="background-image: url(webTemplate/assets/images/demos/demo11/vendor/bg.jpg);">
            <h2 class="vendor-title font-weight-bold ls-25 mb-1">دوستانه ترین محصولات</h2>
            <p>از 3 میلیون محصول ارائه شده توسط فروشندگان منبع تهیه کنید و ظرف 15 روز مرکز را ترک کنید.</p>
            <div class="row cols-md-2">
                <div>
                    <div class="vendor-widget mb-4">
                        <h3 class="vendor-subtitle text-center font-weight-bold ls-25 mt-3 mb-3">پرفروش ترین محصولات</h3>
                        <div class="swiper-container swiper-theme appear-animate pb-2"
                            data-swiper-options="{
                            'spaceBetween': 5,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 2
                                },
                                '992': {
                                    'slidesPerView': 2
                                },
                                '1200': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-3">
                                <div class="swiper-slide product-wrap mb-0">
                                    <div class="product text-center product-absolute">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="webTemplate/assets/images/demos/demo11/products/friedly-products/1.jpg" alt="Product"
                                                    width="130" height="146"/>
                                            </a>
                                        </figure>
                                        <h4 class="product-name">
                                            <a href="product-default.html">صدای کلاه قرمز</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->   
                                <div class="swiper-slide product-wrap mb-0">
                                    <div class="product text-center product-absolute">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="webTemplate/assets/images/demos/demo11/products/friedly-products/2.jpg" alt="Product"
                                                    width="130" height="146" />
                                            </a>
                                        </figure>
                                        <h4 class="product-name">
                                            <a href="product-default.html">کیف شیک</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->  
                                <div class="swiper-slide product-wrap mb-0">
                                    <div class="product text-center product-absolute">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="webTemplate/assets/images/demos/demo11/products/friedly-products/3.jpg" alt="Product"
                                                    width="130" height="146" />
                                            </a>
                                        </figure>
                                        <h4 class="product-name">
                                            <a href="product-default.html">صدای فوق العاده</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->      
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vendor-widget mb-4">
                        <h3 class="vendor-subtitle text-center font-weight-bold ls-25 mt-3 mb-3">معاملات هفتگی</h3>
                        <div class="swiper-container swiper-theme appear-animate pb-2"
                            data-swiper-options="{
                            'spaceBetween': 5,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 2
                                },
                                '992': {
                                    'slidesPerView': 2
                                },
                                '1200': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-3 ">
                                <div class="swiper-slide product-wrap mb-0">
                                    <div class="product text-center product-absolute">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="webTemplate/assets/images/demos/demo11/products/friedly-products/4.jpg" alt="Product"
                                                    width="130" height="146"/>
                                            </a>
                                        </figure>
                                        <h4 class="product-name">
                                            <a href="product-default.html">فاویکون رنگارنگ</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->   
                                <div class="swiper-slide product-wrap mb-0">
                                    <div class="product text-center product-absolute">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="webTemplate/assets/images/demos/demo11/products/friedly-products/5.jpg" alt="Product"
                                                    width="130" height="146" />
                                            </a>
                                        </figure>
                                        <h4 class="product-name">
                                            <a href="product-default.html">سنگ شکن سیاه</a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->  
                                <div class="swiper-slide product-wrap mb-0">
                                    <div class="product text-center product-absolute">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="webTemplate/assets/images/demos/demo11/products/friedly-products/6.jpg" alt="Product"
                                                    width="130" height="146"/>
                                            </a>
                                        </figure>
                                        <h4 class="product-name">
                                            <a href="product-default.html">ساعت هوشمند </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Vendor Wrapper -->

<div class="swiper-container swiper-theme category-banner-wrapper pg-inner appear-animate pb-2 mb-10"
    data-swiper-options="{
    'spaceBetween': 20,
    'slidesPerView': 1,
    'breakpoints': {
        '576': {
            'slidesPerView': 2
        },
        '768': {
            'slidesPerView': 3
        }
    }
}">
    <div class="swiper-wrapper row cols-md-3 cols-sm-2 cols-1">
        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mt-2">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/banner/banner-3.jpg" alt="Category Banner"
                    width="680" height="180" style="background-color: #565960;" />
            </figure>   
            <div class="banner-content y-50">
                <h4 class="banner-subtitle text-white text-capitalize font-secondary font-weight-normal mb-1">کفش ورزشی نایک</h4>
                <h4 class="banner-price-info text-white text-uppercase font-weight-bold mb-3 ls-25">تا <span class="text-primary font-weight-bolder">35% تخفیف</span></h4>
                <a href="shop-banner-sidebar.html"
                    class="btn btn-white btn-link btn-underline btn-icon-right">
                    اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mt-2">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/banner/banner-4.jpg" alt="Category Banner"
                    width="680" height="180" style="background-color: #E3E7EA;" />
            </figure>   
            <div class="banner-content y-50">
                <h4 class="banner-subtitle text-dark text-capitalize font-secondary font-weight-normal mb-1">پرطرفدار </h4>
                <h3 class="banner-title text-dark text-uppercase ls-25">زیبایی تابستان </h3>
                <a href="shop-banner-sidebar.html"
                    class="btn btn-dark btn-link btn-underline btn-icon-right">
                    اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mt-2">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/banner/banner-5.jpg" alt="Category Banner"
                    width="680" height="180" style="background-color: #423A37;" />
            </figure>   
            <div class="banner-content y-50">
                <h4 class="banner-subtitle text-white text-capitalize font-secondary font-weight-normal mb-1">هات مردانه</h4>
                <h3 class="banner-title text-white text-uppercase ls-25">تجهیزات جانبی </h3>
                <a href="shop-banner-sidebar.html"
                    class="btn btn-white btn-link btn-underline btn-icon-right">
                    اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</div>  
<!-- End of Category Banner Wrapper -->
<div class="banner-product-wrapper appear-animate row mb-6">
    <div class="col-xl-3 col-md-4 mb-4">
        <div class="categories bg-white h-100 d-flex flex-column br-xs">
            <h3 class="banner-title mb-0">لباس و پوشاک</h3>
            <ul class="list-style-none bb-no d-block pl-0">
                <li>
                    <a href="#">بهار پاییز</a>
                </li>
                <li>
                    <a href="#">تجهیزات جانبی </a>
                </li>                        
                <li>
                    <a href="#">شلوار و جین</a>
                </li>  
                <li>
                    <a href="#">تی، بافتنی و یقه دار</a>
                </li>
                <li>
                    <a href="#">مد را تماشا کن</a>
                </li>
                <li>
                    <a href="#">لباس و دامن</a>
                </li>
                <li>
                    <a href="#">
                    کفش و چکمه </a>
                </li>
            </ul>
            <a href="shop-boxed-banner.html" class="btn btn-dark btn-link btn-underline btn-icon-right font-weight-bold text-uppercase">
                جستجوی همه <i class="w-icon-long-arrow-left"></i></a>
        </div>
    </div>
    <div class="product-wrapper col-xl-9 col-md-8 mb-4">   
        <div class="bg-grey pb-0 pt-0 swiper-container swiper-theme h-100" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 2
                },
                '992': {
                    'slidesPerView': 3
                },
                '1300': {
                    'slidesPerView': 4
                }
            }
        }">
            <div class="swiper-wrapper row cols-xl-4 cols-lg-3">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-1-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-1-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کیف مدرسه سفید</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-2-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-2-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">تسلی دهنده زنانه</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins><del class="old-price">99000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-3-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-3-2.jpg" alt="Product"
                                width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید </label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش آموزشی آبی </a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(6 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/2-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/2-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Swiper -->
    </div>
</div>
<!-- End of Banner Product Wrapper -->

<div class="swiper-container swiper-theme category-banner-wrapper category-banner-wrapper2 pg-inner animation-slider mb-6"
    data-swiper-options="{
    'spaceBetween': 20,
    'slidesPerView': 1,
    'breakpoints': {
        '576': {
            'slidesPerView': 2
        }
    }
}">
    <div class="swiper-wrapper row cols-md-2">
        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mb-4">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/banner/banner-6.jpg" alt="Category Banner"
                    width="680" height="180" style="background-color: #444549;" />
            </figure>   
            <div class="banner-content y-50">
                <h3 class="banner-title text-white text-capitalize font-secondary font-weight-normal">مد مردانه زنانه </h3>
                <h4 class="banner-price-info text-white ls-25 d-flex mb-2">
                    <strong class="text-uppercase">20% تخفیف</strong>
                    <img src="webTemplate/assets/images/demos/demo11/sale-sm.png" alt="sale-light" width="196" height="136">
                </h4>
                <a href="shop-banner-sidebar.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                    اکنون بخرید
                    <i class="w-icon-long-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="swiper-slide banner banner-fixed overlay-dark br-sm mb-4">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/banner/banner-7.jpg" alt="Category Banner"
                    width="680" height="180" style="background-color: #1B9DB7;" />
            </figure>   
            <div class="banner-content y-50">
                <h3 class="banner-title text-white text-capitalize font-secondary font-weight-normal">الکترونیک هوشمند </h3>
                <h4 class="banner-price-info text-white ls-25 d-flex mb-2">
                    <strong class="text-uppercase">45% تخفیف </strong>
                    <img src="webTemplate/assets/images/demos/demo11/sale-sm-light.png" alt="sale-light" width="196" height="136">
                </h4>
                <a href="shop-banner-sidebar.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                    اکنون بخرید
                    <i class="w-icon-long-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</div>  
<!-- End of Category Banner Wrapper2 -->

<div class="banner-product-wrapper appear-animate row mb-8">
    <div class="col-xl-3 col-md-4 mb-4">
        <div class="categories bg-white h-100 d-flex flex-column br-xs">
            <h3 class="banner-title mb-0">الکترونیک </h3>
            <ul class="list-style-none bb-no pl-0">
                <li>
                    <a href="#">تقویت کننده صدا</a>
                </li>
                <li>
                    <a href="#">گیرنده های تلویزیون</a>
                </li>                        
                <li>
                    <a href="#">پروژکتورهای HDMI</a>
                </li>  
                <li>
                    <a href="#">اکشن دوربین ها</a>
                </li>  
                <li>
                    <a href="#">دوربین های فیلمبرداری </a>
                </li>
                <li>
                    <a href="#">تبلت </a>
                </li>
                <li>
                    <a href="#">لپ تاپ های گیمینگ</a>
                </li>
            </ul>
            <a href="shop-boxed-banner.html" class="btn btn-dark btn-link btn-underline btn-icon-right font-weight-bold text-uppercase">
                جستجوی همه <i class="w-icon-long-arrow-left"></i></a>
        </div>
    </div>
    <div class="product-wrapper col-xl-9 col-md-8 mb-4">   
        <div class="bg-grey pb-0 pt-0 swiper-container swiper-theme h-100" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 2
                },
                '1200': {
                    'slidesPerView': 3
                },
                '1300': {
                    'slidesPerView': 4
                }
            }
        }">
            <div class="swiper-wrapper row cols-xl-4 cols-lg-3">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-1-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-1-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کیف مدرسه سفید</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-2-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-2-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">تسلی دهنده زنانه</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins><del class="old-price">99000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-3-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-3-2.jpg" alt="Product"
                                width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید </label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش آموزشی آبی </a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(6 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/3-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End fo Swiper -->
    </div>
</div>
<!-- End of Banner Product Wrapper -->

<div class="banner banner-fixed sale-on-banner br-sm">
    <figure>
        <img src="webTemplate/assets/images/demos/demo11/banner/full-2.jpg" alt="Category Banner"
            width="680" height="180" style="background-color: #2F3237;" />
    </figure>   
    <div class="banner-content text-center x-50 y-50 mt-1">
        <h3 class="banner-title text-white font-secondary font-weight-normal mb-2">فروش این جمعه</h3>
        <h4 class="banner-price-info justify-content-center text-white text-uppercase ls-25 d-flex mb-2">
            70% تخفیف
        </h4>
    </div>
</div>
<!-- End of sale-on-banner  -->

<div class="banner-product-wrapper appear-animate row mb-7">
    <div class="col-xl-3 col-md-4 mb-4">
        <div class="categories bg-white h-100 d-flex flex-column br-xs">
            <h3 class="banner-title mb-0">هدیه و ابزار</h3>
            <ul class="list-style-none bb-no d-block pl-0">
                <li>
                    <a href="#">هدیه و ابزار</a>
                </li>
                <li>
                    <a href="#">هدیه برای دوست پسر</a>
                </li>                        
                <li>
                    <a href="#">هدیه برای بابا</a>
                </li>  
                <li>
                    <a href="#">هدایایی برای شوهر</a>
                </li>  
                <li>
                    <a href="#">هدیه برای دوست دختر</a>
                </li>
                <li>
                    <a href="#">هدیه برای مامان</a>
                </li>
                <li>
                    <a href="#">هدایایی برای همسر</a>
                </li>
            </ul>
            <a href="shop-boxed-banner.html" class="btn btn-dark btn-link btn-underline btn-icon-right font-weight-bold text-uppercase">
                جستجوی همه <i class="w-icon-long-arrow-left"></i></a>
        </div>
    </div>
    <div class="product-wrapper col-xl-9 col-md-8 mb-4">   
        <div class="bg-grey pb-0 pt-0 swiper-container swiper-theme h-100" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 2
                },
                '1200': {
                    'slidesPerView': 3
                },
                '1300': {
                    'slidesPerView': 4
                }
            }
        }">
            <div class="swiper-wrapper row cols-xl-4 cols-lg-3">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-1-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-1-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کیف مدرسه سفید</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-2-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-2-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">تسلی دهنده زنانه</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins><del class="old-price">99000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-3-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-3-2.jpg" alt="Product"
                                width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید </label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش آموزشی آبی </a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(6 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/4-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Swiper -->
    </div>
</div>
<!-- End of Banner Product Wrapper -->

<h2 class="title text-left title-client mt-3 mb-5 ls-25 appear-animate">مشتریان ما </h2>
<div class="swiper-container swiper-theme bg-white border-no brands-wrapper br-sm mb-10 appear-animate"
    data-swiper-options="{
    'loop': true,
    'spaceBetween': 18,
    'slidesPerView': 2,
    'breakpoints': {
        '576': {
            'slidesPerView': 3
        },
        '768': {
            'slidesPerView': 4
        },
        '992': {
            'slidesPerView': 6
        },
        '1200': {
            'slidesPerView': 8
        }
    }
}">
    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/1.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/2.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/3.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/4.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/5.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/6.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/7.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
        <div class="swiper-slide">
            <figure>
                <img src="webTemplate/assets/images/demos/demo11/brands/8.png" alt="Brand" width="310" height="180" />
            </figure>
        </div>
    </div>
</div>
<!-- End of Brands Wrapper -->

<div class="title-link-wrapper select-products-title title-post mb-0 after-none appear-animate">
    <h2 class="title mb-1 ls-25 pt-1">محصولات وولمارت </h2>
    <div class="tab tab-nav-boxed appear-animate">
        <ul class="nav nav-tabs justify-content-center border-no" role="tablist">
            <li class="nav-item">
                <a class="nav-link active br-sm font-size-md ls-normal mr-0" href="#tab1-1">تازه رسیده ها </a>
            </li>
            <li class="nav-item">
                <a class="nav-link br-sm font-size-md ls-normal mr-0" href="#tab1-2">پرفروش ترین ها </a>
            </li>
            <li class="nav-item">
                <a class="nav-link br-sm font-size-md ls-normal mr-0" href="#tab1-3">محبوبترین </a>
            </li>
            <li class="nav-item">
                <a class="nav-link br-sm font-size-md ls-normal mr-0" href="#tab1-4">ویژه </a>
            </li>
        </ul>
    </div>
</div>
<div class="tab-content bg-grey mb-5">
    <div class="tab-pane active" id="tab1-1">
        <div class="swiper-container swiper-theme product-deals-wrapper appear-animate"
            data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 5
                }
            }
        }">
            <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-1-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-1-2.jpg" alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">ساعت راه راه چرمی</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(1 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">29000 تومان</ins><del class="old-price">192000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-2-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-2-2.jpg"  alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">ماشین در حال اجرا</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(1 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">22000 تومان</ins><del class="old-price">28000 تومان </del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-3-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-3-2.jpg" alt="Product" width="300"
                                height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">ساعت مشکی مردانه</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(5 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">75000 تومان</ins><del class="old-price">79000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-4-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-4-2.jpg" alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش ورزشی تابستانی </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">85000 تومان </ins><del class="old-price">125000 تومان </del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-5-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/5-5-2.jpg" alt="Product" width="300"
                                height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">بهترین کیف عابر پیاده</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(4 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">78000 تومان</ins><del class="old-price">88000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab1-2">
        <div class="swiper-container swiper-theme product-deals-wrapper appear-animate"
            data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 5
                }
            }
        }">
            <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-1-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-1-2.jpg" alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">ساعت راه راه چرمی</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(1 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">29000 تومان</ins><del class="old-price">192000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-2-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-2-2.jpg"  alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">ماشین در حال اجرا</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(1 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">22000 تومان</ins><del class="old-price">28000 تومان </del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-3-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-3-2.jpg" alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">ساعت مشکی مردانه</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(5 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">75000 تومان</ins><del class="old-price">79000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-4-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-4-2.jpg" alt="Product" width="300"
                                    height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش ورزشی تابستانی </a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">85000 تومان </ins><del class="old-price">125000 تومان </del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-5-1.jpg" alt="Product" width="300"
                                    height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-5-2.jpg" alt="Product" width="300"
                                height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">بهترین کیف عابر پیاده</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(4 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">78000 تومان</ins><del class="old-price">88000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab1-3">
        <div class="swiper-container swiper-theme product-deals-wrapper appear-animate"
            data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 5
                }
            }
        }">
            <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-1-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-1-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کیف مدرسه سفید</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-2-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-2-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">تسلی دهنده زنانه</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins><del class="old-price">99000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-3-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-3-2.jpg" alt="Product"
                                width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید </label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش آموزشی آبی </a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(6 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/3-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/3-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/1-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab1-4">
        <div class="swiper-container swiper-theme product-deals-wrapper appear-animate"
            data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': {
                    'slidesPerView': 3
                },
                '768': {
                    'slidesPerView': 4
                },
                '992': {
                    'slidesPerView': 5
                }
            }
        }">
            <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-1-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-1-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کیف مدرسه سفید</a></h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-2-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-2-2.jpg" alt="Product"
                                    width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">تسلی دهنده زنانه</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 80%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(8 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">58000 تومان</ins><del class="old-price">99000 تومان</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-3-1.jpg" alt="Product"
                                    width="300" height="337">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-3-2.jpg" alt="Product"
                                width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید </label>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">کفش آموزشی آبی </a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 60%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(6 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/4-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/4-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide product-wrap">
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="webTemplate/assets/images/demos/demo11/products/1-4-1.jpg" alt="Product"
                                    width="300" height="337">
                            <img src="webTemplate/assets/images/demos/demo11/products/1-4-2.jpg" alt="Product"
                            width="300" height="337">
                            </a>
                            <div class="product-action-horizontal">
                                <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="افزودن به سبد "></a>
                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="علاقه مندیها"></a>
                                <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="مقایسه"></a>
                                <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="نمایش سریع"></a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <h4 class="product-name"><a href="product-default.html">فراتر از پیراهن OTP</a>
                            </h4>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width: 100%;"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product-default.html" class="rating-reviews">(3 نظر )</a>
                            </div>
                            <div class="product-price">
                                <ins class="new-price">96000 تومان</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="title-link-wrapper title-recent mb-6 after-none appear-animate">
    <h2 class="title mb-0 ls-normal appear-animate pb-1">بازدیدهای شما محصولات اخیر</h2>
</div>
<div class="swiper-container swiper-theme recent-view shadow-swiper appear-animate mb-8 pb-2"
    data-swiper-options="{
        'spaceBetween': 20,
        'slidesPerView': 2,
        'breakpoints': {
            '576': {
                'slidesPerView': 3
            },
            '768': {
                'slidesPerView': 5
            },
            '992': {
                'slidesPerView': 6
            },
            '1200': {
                'slidesPerView': 8,
                'dots': false
            }
        }
    }">
    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-1-1.jpg" alt="Category image"
                            width="130" height="146" />
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">دستمال سر </a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/1-1-2.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">ساعت راه راه چرمی</a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/4-1-1.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">نشانگر صدای کلاه قرمز</a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/2-3-1.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">شارژر الکترونیکی گوشی هوشمند</a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/2-4-1.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">آبی اسکی چکمه </a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/2-2-1.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">نشانگر صدای نرم</a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/3-1-1.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">ساعت چند کاره</a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
        <div class="swiper-slide product-wrap">
            <div class="product text-center product-absolute">
                <figure class="product-media">
                    <a href="#">
                        <img src="webTemplate/assets/images/demos/demo11/products/4-2-1.jpg" alt="Category image"
                            width="130" height="146"/>
                    </a>
                </figure>
                <h4 class="product-name">
                    <a href="product-default.html">ماشین در حال اجرا</a>
                </h4>
            </div>
        </div>
        <!-- End of Product Wrap -->
    </div>
    <div class="swiper-pagination"></div>
</div>
@endsection
@section('script')
    
@endsection