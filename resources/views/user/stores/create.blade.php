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
                <div class="tab-pane active in" id="account-details">
                    <div class="icon-box icon-box-side icon-box-light">
                        <span class="icon-box-icon icon-account mr-2">
                            <i class="w-icon-user"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-0 ls-normal">جزئیات فروشگاه </h4>
                        </div>
                    </div>
                    <form class="form account-details-form" action="#" method="post">
                        <div class="row">
                            <h4 class="title title-password ls-25 font-weight-bold">اطلاعات فروشنده</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname"> نام کوچک*</label>
                                    <input type="text" value="{{$user->fname}}" id="fname" name="fname" placeholder="لطفا نام خود را وارد کنید" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname"> نام خانوادگی  *</label>
                                    <input type="text" value="{{$user->fname}}" id="lname" name="lname" placeholder="لطفا نام خانوادگی خودرا وارد کنید" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname"> نام کاربری*</label>
                                    <input type="text" value="{{$user->fname}}" id="nickname" name="nickname" placeholder="لطفا نام کاربری خود را وارد کنید" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname"> شماره تماس*</label>
                                    <input type="text" value="{{$user->fname}}" id="mobile" name="mobile" placeholder="لطفا موبایل خود را وارد کنید" class="form-control form-control-md">
                                </div>
                            </div>
                        </div>
                        <h4 class="title title-password ls-25 font-weight-bold">تغییر رمز </h4>
                        <div class="form-group">
                            <label class="text-dark" for="cur-password">رمز عبور فعلی را خالی بگذارید تا بدون تغییر باقی بماند</label>
                            <input type="password" class="form-control form-control-md" id="cur-password" name="cur_password">
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="new-password">رمز عبور جدید را خالی بگذارید تا بدون تغییر باقی بماند</label>
                            <input type="password" class="form-control form-control-md" id="new-password" name="new_password">
                        </div>
                        <div class="form-group mb-10">
                            <label class="text-dark" for="conf-password">تایید رمز عبور </label>
                            <input type="password" class="form-control form-control-md" id="conf-password" name="conf_password">
                        </div>
                        <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">ذخیره تغییرات </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    
@endsection