@extends('layouts.app',['title'=>$title])
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('webTemplate/assets/css/style-rtl.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('webTemplate/assets/vendor/codemirror/codemirror.min.css')}}">
@endsection
@section('content')
<section class="element-section text-center mt-10 mb-10 pt-5 pb-2" id="section-elements">
    <h3 class="section-title">خرید فروشگاه</h3>
    <p class="text-default section-desc mx-auto">از دم پاساژی برای شماست که این امکان را به شما میدهد که بتوانید با اجاره یک فروشگاه کسب و کار اینترنتی خود را راه بیاندازید و محصولات خود را به فروش بگذارید</p>
    <section class="vendor-banner-section mb-10 mb-lg-7">
        <h2 class="title title-center mb-5">با بنر </h2>
        <div class="swiper-container swiper-theme show-code-action" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 1,
            'breakpoints': {
                '576': {
                    'slidesPerView': 2
                },
                '768': {
                    'slidesPerView': 3
                },
                '992': {
                    'slidesPerView': 4
                }
            }
        }">
            <div class="swiper-wrapper row cols-xl-3 cols-md-3 cols-sm-2 cols-1">
                @foreach ($stores as $store)
                <div class="swiper-slide vendor-widget">
                    <div class="vendor-widget-banner">
                        <figure class="vendor-banner">
                            <a href="vendor-dokan-store.html">
                                <img src="assets/images/vendor/element/banner/1.jpg" alt="Vendor Banner"
                                    width="625" height="300" style="background-color: #40485F;" />
                            </a>
                        </figure>
                        <div class="vendor-details">
                            <figure class="vendor-logo">
                                <a href="{{route('user.stores.show',['type'=>$store->type])}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 70 70" xml:space="preserve">
                                        <g>
                                            <path d="M14.659,51.631h25.517V37.1H14.659V51.631z M24.605,49.461V39.273h6.104v10.188H24.605L24.605,49.461z    
                                                M37.981,49.461h-5.076V39.273h5.076V49.461z M16.854,39.273h5.556v10.188h-5.556V39.273z">
                                            </path>
                                            <path d="M63.642,25.199c-0.172-0.366-0.359-0.773-0.568-1.235l-4.112-8.958l-0.092-0.163   
                                                c-1.034-1.495-2.306-1.81-3.192-1.81L14.245,13c-1.4,0-2.94,1.404-3.333,2.311l-3.978,
                                                8.667c-0.173,0.396-0.344,0.769-0.509,1.128   C5.63,26.847,5,28.227,5,29.616l0.011,
                                                0.153c0.465,3.261,2.856,5.542,6.08,5.971v19.086c0,1.198,0.985,2.174,2.196,2.174h44.792   
                                                c1.209,0,2.195-0.976,2.195-2.174V35.382c2.521-0.458,4.324-2.499,4.716-5.463L65,29.778C65,
                                                28.125,64.488,27.023,63.642,25.199z    M34.414,28.544c0,2.628-2.86,4.765-6.378,4.765c-3.077,
                                                0-5.577-1.963-5.788-4.434l2.84-13.69l9.329,0.007v13.352H34.414z    M36.608,15.192l8.843,
                                                0.008l2.852,13.655c-0.169,2.477-2.539,4.455-5.453,4.455c-3.442,0-6.244-2.137-6.244-4.767L36.608,15.192   
                                                L36.608,15.192z M7.197,29.544c0.026-0.912,0.56-2.077,1.23-3.543c0.167-0.365,0.342-0.749,0.513-1.136l3.981-8.673   
                                                c0.144-0.318,0.989-1,1.324-1.02l8.601,0.008l-2.773,13.361h-0.064c0,0.167-0.014,0.331-0.039,0.494l-0.026,0.125h0.001  
                                                 c-0.471,2.527-3.767,4.492-7.757,4.492C9.499,33.656,7.592,32.083,7.197,29.544z M45.047,
                                                 54.759V39.273h8.629v15.485H45.047z    M55.869,54.824V37.1H42.85v17.723H13.287v-19.04c3.369-0.269,6.238-1.758,
                                                 7.755-3.843c1.378,2.112,3.993,3.542,6.991,3.542   c3.202,0,5.996-1.429,7.468-3.541c1.449,2.112,4.197,3.541,
                                                 7.349,3.541c2.912,0,5.451-1.463,6.753-3.616   c1.647,1.978,4.757,3.354,8.475,3.583v19.376H55.869z M59.176,
                                                 33.309c-4.685,0-8.642-2.167-8.642-4.732h-0.046l-2.794-13.375   l7.982,0.006c0.354,0,0.82,0.092,1.328,
                                                 0.791l4.067,8.861c0.208,0.46,0.399,0.875,0.575,1.248c0.776,1.677,1.142,2.462,1.156,3.599   C62.48,31.964,
                                                 61.126,33.309,59.176,33.309z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </figure>
                            <div class="vendor-personal">
                                <h4 class="vendor-name">
                                    <a href="vendor-dokan-store.html">فروشگاه {{$store->typeText}}</a>
                                </h4>
                                <div class="ratings-container">
                                    <span class="vendor-product-price">{{$store->rent_fee}} تومان</span>
                                </div>
                                <span class="vendor-product-count">{{$store->products_count}} محصول </span>
                                <a href="{{route('user.stores.create',['type'=>$store->type])}}" class="visit-vendor-btn">خرید</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Vendor Widget Banner -->
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
</section>
@endsection
@section('script')
<script src="{{asset('webTemplate/assets/vendor/codemirror/codemirror.min.js')}}"></script>
@endsection