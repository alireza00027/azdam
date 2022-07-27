@extends('layouts.app')

@section('content')
<main class="main login-page">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">حساب کاربری</h1>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html">خانه </a></li>
                <li>حساب کاربری</li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->
    <div class="page-content">
        <div class="container">
            <div class="login-popup">
                <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                    <ul class="nav nav-tabs text-uppercase" role="tablist">
                        <li class="nav-item">
                            <a href="#sign-in" class="nav-link active">ورود </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sign-up" class="nav-link">ثبت نام</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        @include('layouts.sections.errors')
                        <div class="tab-pane active" id="sign-in">
                            <form action="/login" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>ایمیل یا نام کاربری *</label>
                                    <input type="text" class="form-control" name="nickname" id="username" required>
                                </div>
                                <div class="form-group mb-0">
                                    <label>رمز عبور *</label>
                                    <input type="text" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="form-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                                    <label for="remember1">مرا به خاطر بسپار </label>
                                    <a href="#">فراموشی رمز عبور؟</a>
                                </div>
                                <button type="submit" class="btn btn-primary">ورود </button>
                            </form>
                        </div>
                        <div class="tab-pane" id="sign-up">
                            <form action="/register" method="POST">
                                @csrf
                                <div class="checkbox-content login-vendor">
                                    <div class="form-group">
                                        <label>نام کوچک  *</label>
                                        <input type="text" class="form-control" name="fname" id="first-name" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label> نام خانوادگی  *</label>
                                        <input type="text" class="form-control" name="lname" id="last-name" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>نام کاربری *</label>
                                        <input type="text" class="form-control" name="nickname" id="shop-name" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label> تلفن  *</label>
                                        <input type="text" class="form-control" name="mobile" id="phone-number" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>آدرس ایمیل شما  *</label>
                                        <input type="text" class="form-control" name="email" id="email_1" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>رمز عبور *</label>
                                        <input type="text" class="form-control" name="password" id="password_1" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>تکرار رمز عبور *</label>
                                        <input type="text" class="form-control" name="password_confirmation" id="password_1" required>
                                    </div>
                                </div>
                                <p>داده های شخصی شما برای پشتیبانی از تجربه شما در سراسر این وب سایت، مدیریت دسترسی به حساب شما، و برای اهداف دیگری که در ما توضیح داده شده است، استفاده خواهد شد. <a href="#" class="text-primary">سیاست حفظ حریم خصوصی  </a>.</p>
                                <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                    <label for="remember" class="font-size-md">من موافقم با<a  href="#" class="text-primary font-size-md"> سیاست حفظ حریم خصوصی  </a></label>
                                </div>
                                <button href="#" class="btn btn-primary">ثبت نام </button>
                            </form>
                        </div>
                    </div>
                    {{-- <p class="text-center">ورود با حساب اجتماعی</p>
                    <div class="social-icons social-icon-border-color d-flex justify-content-center">
                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                        <a href="#" class="social-icon social-google fab fa-google"></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
