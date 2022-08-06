@extends('layouts.app',['title'=>$title])
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('webTemplate/assets/css/style-rtl.min.css')}}">
@endsection
@section('content')
<div class="tab tab-vertical row gutter-lg">
    
    <div class="content mb-6">
        <div class="tab-pane active in" id="account-dashboard">
            <h3 class="section-title">خرید فروشگاه</h3>
            <p class="text-default section-desc mx-auto">از دم پاساژی برای شماست که این امکان را به شما میدهد که بتوانید با اجاره یک فروشگاه کسب و کار اینترنتی خود را راه بیاندازید و محصولات خود را به فروش بگذارید</p>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="link-to-tab">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon icon-address">
                                <i class="w-icon-shopify"></i>
                            </span>
                            <div class="icon-box-content">
                                <p class="text-uppercase mb-0">نوع فروشگاه : {{$store->getTypeText()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="link-to-tab">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon icon-orders">
                                <i class="w-icon-products"></i>
                            </span>
                            <div class="icon-box-content">
                                <p class="text-uppercase mb-0">تعداد محصول قابل فروش : {{$store->products_count}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="link-to-tab">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon icon-download">
                                <i class="w-icon-store-seo"></i>
                            </span>
                            <div class="icon-box-content">
                                <p class="text-uppercase mb-0">مدت زمان اجاره : {{$store->period_of_time}} روز</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="link-to-tab">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon icon-account">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <p class="text-uppercase mb-0">بهاء : {{$store->rent_fee}} تومان</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap show-code-action">
                    <a href="{{route('user.stores.create',['type'=>$store->type])}}" class="btn btn-secondary btn-ellipse btn-icon-right">
                        خرید <i class="w-icon-long-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    
@endsection