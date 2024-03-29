<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">پیام فروشگاه لغو کنید. به فروشگاه ما خوش آمدید!</p>
            </div>
            <div class="header-right">
                <div class="dropdown">
                    <a href="#currency">تومان </a>
                    <div class="dropdown-box">
                        <a href="#USD">تومان </a>
                        <a href="#EUR">یورو </a>
                    </div>
                </div>
                <!-- End of DropDown Menu -->

                <div class="dropdown">
                    <a href="#language"><img src="webTemplate/assets/images/flags/eng.png" alt="ENG Flag" width="14"
                            height="8" class="dropdown-image" /> انگلیسی </a>
                    <div class="dropdown-box">
                        <a href="#ENG">
                            <img src="webTemplate/assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                class="dropdown-image" />
                            انگلیسی    </a>
                        <a href="#FRA">
                            <img src="webTemplate/assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                class="dropdown-image" />
                           فرانسوی </a>
                    </div>
                </div>
                <!-- End of Dropdown Menu -->
                <span class="divider d-lg-show"></span>
                <a href="blog.html" class="d-lg-show">بلاگ </a>
                <a href="contact-us.html" class="d-lg-show">تماس با ما </a>
                <a href="my-account.html" class="d-lg-show">حساب من </a>
                
            </div>
        </div>
    </div>
    <!-- End of Header Top -->
    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle w-icon-hamburger">
                </a>
                <a href="demo11.html" class="logo ml-lg-0">
                    <img src="webTemplate/assets/images/demos/demo11/logo.png" alt="logo" width="144" height="45">
                </a>
                <form method="get" action="#" class="input-wrapper header-search hs-expanded hs-round bg-white br-xs d-md-flex">
                    <div class="select-box bg-white">
                        <select id="category" name="category">
                            <option value="">دسته بندیها </option>
                            <option value="4">مدل </option>
                            <option value="5">مبلمان </option>
                            <option value="6">کفش </option>
                            <option value="7">ورزشی </option>
                            <option value="8">بازی </option>
                            <option value="9">کامپیوتر </option>
                            <option value="10">الکترونیکی </option>
                            <option value="11">آشپرخانه </option>
                            <option value="12">لباس </option>
                        </select>
                    </div>
                    <input type="text" class="form-control bg-white" name="search" id="search"
                        placeholder="جستجو کنید ..." required />
                    <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-white mb-0">
                            <a href="mailto:#" class="text-capitalize text-secondary">چت زنده</a> <span class="text-light ls-normal">یا: </span></h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                    </div>
                </div>
                <a class="compare label-down link d-xs-show" href="compare.html">
                    <i class="w-icon-account"></i>
                    @if (auth()->check())
                    <span class="compare-label d-lg-show">حساب من </span>
                    @else
                    <a href="{{route('login')}}"><span class="compare-label d-lg-show">ورود/ثبت نام</span></a>
                    @endif
                </a>
                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2 text-white">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count text-white">2</span>
                        </i>
                        <span class="cart-label">سبد </span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>سبد خرید </span>
                            <a href="#" class="btn-close">بستن <i class="w-icon-long-arrow-left"></i></a>
                        </div>

                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">الیس بافتنی بژ<br>کفش دونده تیک</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">25600 تومان</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="webTemplate/assets/images/cart/product-1.jpg" alt="product" height="84" width="94">
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="بستن">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name">پینا کاربردی آبی<br>لباس جین جلویی پینا</a>
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">32000 تومان</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img src="webTemplate/assets/images/cart/product-2.jpg" alt="product" width="84" height="94">
                                    </a>
                                </figure>
                                <button class="btn btn-link btn-close" aria-label="بستن">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cart-total">
                            <label>مجموع: </label>
                            <span class="price">58000 تومان</span>
                        </div>

                        <div class="cart-action">
                            <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">سبد خرید </a>
                            <a href="checkout.html" class="btn btn-primary  btn-rounded">پرداخت </a>
                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown">
                        <a href="#" class="category-toggle text-white bg-primary text-capitalize" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                            data-display="static" title="کاوش دسته بندیها ">
                            <i class="w-icon-category"></i>
                            <span>کاووش دسته بندیها</span>
                        </a>

                        <div class="dropdown-box text-default">
                            <ul class="menu vertical-menu category-menu">
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-tshirt2"></i>مدل 
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">زنانه </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">تازه رسیده ها </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">پرفروش ترین ها </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">پر طرفدار </a></li>
                                                <li><a href="shop-fullwidth-banner.html">تن پوش </a></li>
                                                <li><a href="shop-fullwidth-banner.html">کفش ها </a></li>
                                                <li><a href="shop-fullwidth-banner.html">کیسه ها </a></li>
                                                <li><a href="shop-fullwidth-banner.html">تجهیزات جانبی </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">جواهرات و ساعت</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">زنانه </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">تازه رسیده ها </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">پرفروش ترین ها </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">پر طرفدار </a></li>
                                                <li><a href="shop-fullwidth-banner.html">تن پوش </a></li>
                                                <li><a href="shop-fullwidth-banner.html">کفش ها </a></li>
                                                <li><a href="shop-fullwidth-banner.html">کیسه ها </a></li>
                                                <li><a href="shop-fullwidth-banner.html">تجهیزات جانبی </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">جواهرات و ساعت</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img src="webTemplate/assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                        width="235" height="347" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-price-info mb-1 ls-normal">دریافت کنید
                                                        <strong
                                                            class="text-primary text-uppercase">20 % تخفیف</strong>
                                                    </h4>
                                                    <h3 class="banner-title ls-normal">فروش داغ </h3>
                                                    <a href="demo11-shop.html"
                                                        class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                        اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-home"></i>خانه و باغ
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">بدروم </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">تخت، قاب و پایه</a></li>
                                                <li><a href="shop-fullwidth-banner.html">کمد </a></li>
                                                <li><a href="shop-fullwidth-banner.html"> میزهای خواب </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">تخت کودک</a></li>
                                                <li><a href="shop-fullwidth-banner.html">اسلحه </a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">هال </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">میز های قهوه </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">صندلی </a></li>
                                                <li><a href="shop-fullwidth-banner.html">جداول </a></li>
                                                <li><a href="shop-fullwidth-banner.html">فوتون و مبل تختخواب شو</a></li>
                                                <li><a href="shop-fullwidth-banner.html">کابینت و صندوقچه</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">دفتر </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">صندلی های اداری </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">میز </a></li>
                                                <li><a href="shop-fullwidth-banner.html">قفسه های کتاب </a></li>
                                                <li><a href="shop-fullwidth-banner.html">قفسه پوشه ها </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">اتاق استراحت جداول </a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">آشپزخانه و غذاخوری</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">ست های غذاخوری </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">کابینت های نگهداری آشپزخانه</a></li>
                                                <li><a href="shop-fullwidth-banner.html">قفسه های بشرز </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">صندلی های غذاخوری </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">اتاق غذاخوری جداول </a></li>
                                                <li><a href="shop-fullwidth-banner.html">چهارپایه بار </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner3">
                                                <figure>
                                                    <img src="webTemplate/assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                        width="235" height="461" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4
                                                        class="banner-subtitle font-weight-normal text-white mb-1">
                                                        سرویس بهداشتی </h4>
                                                    <h3
                                                        class="banner-title font-weight-bolder text-white ls-normal">
                                                        فروش مبلمان </h3>
                                                    <h4
                                                        class="banner-price-info text-white font-weight-normal ls-25">
                                                        تا <span
                                                            class="text-secondary text-uppercase font-weight-bold">25% تخفیف</span></h4>
                                                    <a href="demo11-shop.html"
                                                        class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                        اکنون بخرید <i class="w-icon-long-arrow-left"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-electronics"></i>الکترونیک 
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">لپ تاپ و کامپیوتر</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">کامپیوترهای رومیزی</a></li>
                                                <li><a href="shop-fullwidth-banner.html">مانیتور </a></li>
                                                <li><a href="shop-fullwidth-banner.html">لپ تاپ </a></li>
                                                <li><a href="shop-fullwidth-banner.html">هارد دیسک و فضای ذخیره سازی</a></li>
                                                <li><a href="shop-fullwidth-banner.html">کامپیوتر تجهیزات جانبی </a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">تلویزیون و ویدئو</h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">تلویزیون ها </a></li>
                                                <li><a href="shop-fullwidth-banner.html">بلندگوهای صوتی خانگی</a></li>
                                                <li><a href="shop-fullwidth-banner.html">پروژکتورها </a></li>
                                                <li><a href="shop-fullwidth-banner.html">دستگاه های پخش رسانه</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">دوربین های دیجیتال </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">دوربین های دیجیتال SLR</a></li>
                                                <li><a href="shop-fullwidth-banner.html">دوربین های ورزشی و اکشن</a></li>
                                                <li><a href="shop-fullwidth-banner.html">لنزهای دوربین  </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">چاپگر عکس </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">کارت های حافظه دیجیتال</a></li>
                                            </ul>

                                            <h4 class="menu-title mt-1">تلفن های همراه </h4>
                                            <hr class="divider">
                                            <ul>
                                                <li><a href="shop-fullwidth-banner.html">تلفن های حامل </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">گوشی های قفل نشده </a>
                                                </li>
                                                <li><a href="shop-fullwidth-banner.html">قاب های گوشی و موبایل</a></li>
                                                <li><a href="shop-fullwidth-banner.html">شارژر تلفن همراه</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="menu-banner banner-fixed menu-banner4">
                                                <figure>
                                                    <img src="webTemplate/assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                        width="235" height="433" />
                                                </figure>
                                                <div class="banner-content">
                                                    <h4 class="banner-subtitle font-weight-normal">معاملات هفته</h4>
                                                    <h3 class="banner-title text-white">صرفه جویی در گوشی هوشمند
                                                    </h3>
                                                    <h4
                                                        class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                        20% تخفیف</h4>
                                                    <a href="demo11-shop.html"
                                                        class="btn btn-white btn-outline btn-sm btn-rounded">اکنون بخرید</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-furniture"></i> مبلمان
                                    </a>
                                    <ul class="megamenu type2">
                                        <li class="row">
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">مبلمان </h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">مبل و کاناپه</a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">صندلی </a></li>
                                                    <li><a href="shop-fullwidth-banner.html">چارچوب های تخت </a></li>
                                                    <li><a href="shop-fullwidth-banner.html">میزهای کنار تخت </a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">میز آرایش</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">نورپردازی </h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">لامپ </a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">لامپ ها </a></li>
                                                    <li><a href="shop-fullwidth-banner.html">چراغ های سقفی </a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">چراغ های دیواری </a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">روشنایی حمام</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">لوازم جانبی خانه </h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">تجهیزات جانبی تزئینی </a></li>
                                                    <li><a href="shop-fullwidth-banner.html">شمع و نگهدارنده</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">عطر خانگی </a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">آینه </a></li>
                                                    <li><a href="shop-fullwidth-banner.html">ساعت ها </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-6">
                                                <h4 class="menu-title">باغ و فضای باز</h4>
                                                <hr class="divider" />
                                                <ul>
                                                    <li><a href="shop-fullwidth-banner.html">تجهیزات باغی</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">ماشین های چمن زنی </a>
                                                    </li>
                                                    <li><a href="shop-fullwidth-banner.html">واشرهای تحت فشار</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">تمام ابزار باغبانی</a></li>
                                                    <li><a href="shop-fullwidth-banner.html">غذاخوری در فضای باز</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="webTemplate/assets/images/menu/banner-5.jpg" alt="Banner"
                                                            width="410" height="123"
                                                            style="background-color: #D2D2D2;" />
                                                    </figure>
                                                    <div class="banner-content text-right y-50">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                            تازه رسیده ها </h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                            مبل شگفت انگیز </h3>
                                                        <h4
                                                            class="banner-price-info font-weight-normal ls-normal mb-0">
                                                            شروع از  <strong>125000 تومان</strong></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="banner banner-fixed menu-banner5 br-xs">
                                                    <figure>
                                                        <img src="webTemplate/assets/images/menu/banner-6.jpg" alt="Banner"
                                                            width="410" height="123"
                                                            style="background-color: #9F9888;" />
                                                    </figure>
                                                    <div class="banner-content y-50">
                                                        <h4
                                                            class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                            پرفروش </h4>
                                                        <h3
                                                            class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                            صندلی و لامپ</h3>
                                                        <h4
                                                            class="banner-price-info font-weight-normal ls-normal text-white mb-0">
                                                            از جانب <strong>165000 تومان</strong></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-heartbeat"></i>سلامت و زیبایی
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-gift"></i>ایده های هدیه
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-gamepad"></i>اسباب بازی و بازی
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-ice-cream"></i>آشپزی 
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-ios"></i>گوشی های هوشمند 
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-camera"></i>دوربین و عکس 
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-fullwidth-banner.html">
                                        <i class="w-icon-ruby"></i>تجهیزات جانبی 
                                    </a>
                                </li>
                                <li>
                                    <a href="demo11-shop.html" class="font-weight-bold text-uppercase ls-25">
                                        نمایش همه دسته بندیها <i class="w-icon-angle-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="active">
                                <a href="demo11.html">خانه </a>
                            </li>
                            <li>
                                <a href="demo11-shop.html">فروشگاه </a>

                                <!-- Start of Megamenu -->
                                <ul class="megamenu">
                                    <li>
                                        <h4 class="menu-title">صفحات فروشگاه </h4>
                                        <ul>
                                            <li><a href="shop-banner-sidebar.html">بنر با نوار کناری</a></li>
                                            <li><a href="shop-boxed-banner.html">بنر باکسی </a></li>
                                            <li><a href="shop-fullwidth-banner.html">بنر تمام عرض </a></li>
                                            <li><a href="shop-horizontal-filter.html">فیلتر افقی <span
                                                        class="tip tip-hot">داغ </span></a></li>
                                            <li><a href="shop-off-canvas.html">بدون نوار کناری <span
                                                        class="tip tip-new">جدید </span></a></li>
                                            <li><a href="shop-infinite-scroll.html"> اسکرول بی نهایت آژاکس</a>
                                            </li>
                                            <li><a href="shop-right-sidebar.html">سایدبار چپ </a></li>
                                            <li><a href="shop-both-sidebar.html">هر دو نوار کناری </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="menu-title">چیدمان فروشگاه </h4>
                                        <ul>
                                            <li><a href="shop-grid-3cols.html">3 حالت ستون ها </a></li>
                                            <li><a href="shop-grid-4cols.html">4 حالت ستون ها </a></li>
                                            <li><a href="shop-grid-5cols.html">5 حالت ستون ها </a></li>
                                            <li><a href="shop-grid-6cols.html">6 حالت ستون ها </a></li>
                                            <li><a href="shop-grid-7cols.html">7 حالت ستون ها </a></li>
                                            <li><a href="shop-grid-8cols.html">8 حالت ستون ها </a></li>
                                            <li><a href="shop-list.html">حالت فهرست</a></li>
                                            <li><a href="shop-list-sidebar.html">حالت فهرست با نوار کناری</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="menu-title">صفحات محصول </h4>
                                        <ul>
                                            <li><a href="product-variable.html">محصول متغیر </a></li>
                                            <li><a href="product-featured.html">ویژه و جذاب </a></li>
                                            <li><a href="product-accordion.html">داده ها در آکاردئون</a></li>
                                            <li><a href="product-section.html">داده ها در بخش ها </a></li>
                                            <li><a href="product-swatch.html">نمونه تصویر </a></li>
                                            <li><a href="product-extended.html">اطلاعات گسترده </a>
                                            </li>
                                            <li><a href="product-without-sidebar.html">بدون نوار کناری </a></li>
                                            <li><a href="product-video.html">360<sup>درجه </sup>  ویدئو <span
                                                        class="tip tip-new">جدید </span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4 class="menu-title">چیدمان محصولات </h4>
                                        <ul>
                                            <li><a href="product-default.html">پیشفرض <span
                                                        class="tip tip-hot">داغ </span></a></li>
                                            <li><a href="product-vertical.html">شست عمودی </a></li>
                                            <li><a href="product-grid.html">تصاویر شبکه ای </a></li>
                                            <li><a href="product-masonry.html">ساختمانی </a></li>
                                            <li><a href="product-gallery.html">گالری </a></li>
                                            <li><a href="product-sticky-info.html">اطلاعات چسبناک </a></li>
                                            <li><a href="product-sticky-thumb.html">تصویر چسبناک </a></li>
                                            <li><a href="product-sticky-both.html">هردو چسبناک </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- End of Megamenu -->
                            </li>
                            <li>
                                <a href="vendor-dokan-store.html">فروشنده </a>
                                <ul>
                                    <li>
                                        <a href="vendor-dokan-store-list.html">فهرست فروشگاه </a>
                                        <ul>
                                            <li><a href="vendor-dokan-store-list.html">فهرست فروشگاه  1</a></li>
                                            <li><a href="vendor-wcfm-store-list.html">فهرست فروشگاه  2</a></li>
                                            <li><a href="vendor-wcmp-store-list.html">فهرست فروشگاه  3</a></li>
                                            <li><a href="vendor-wc-store-list.html">فهرست فروشگاه  4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.html">فروشگاه فروشنده </a>
                                        <ul>
                                            <li><a href="vendor-dokan-store.html">فروشگاه فروشنده  1</a></li>
                                            <li><a href="vendor-wcfm-store-product-grid.html">فروشگاه فروشنده  2</a>
                                            </li>
                                            <li><a href="vendor-wcmp-store-product-grid.html">فروشگاه فروشنده  3</a>
                                            </li>
                                            <li><a href="vendor-wc-store-product-grid.html">فروشگاه فروشنده  4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">بلاگ </a>
                                <ul>
                                    <li><a href="blog.html">کلاسیک </a></li>
                                    <li><a href="blog-listing.html">لیستی </a></li>
                                    <li>
                                        <a href="blog-grid-3cols.html">گرید </a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">شبکه 2 ستون</a></li>
                                            <li><a href="blog-grid-3cols.html">شبکه 3 ستون</a></li>
                                            <li><a href="blog-grid-4cols.html">شبکه 4ستون</a></li>
                                            <li><a href="blog-grid-sidebar.html">سایدبار شبکه ای </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-masonry-3cols.html">ساختمانی </a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">ساختمانی 2 ستون </a></li>
                                            <li><a href="blog-masonry-3cols.html">ساختمانی 3 ستون </a></li>
                                            <li><a href="blog-masonry-4cols.html">ساختمانی 4ستون </a></li>
                                            <li><a href="blog-masonry-sidebar.html">نوار کناری ساختمانی </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog-mask-grid.html">ماسک </a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">ماسک وبلاگ گرید </a></li>
                                            <li><a href="blog-mask-masonry.html">ماسک وبلاگ ساختمانی </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="post-single.html">تک نوشته </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">صفحات </a>
                                <ul>

                                    <li><a href="about-us.html">درباره ما </a></li>
                                    <li><a href="become-a-vendor.html">فروشنده شوید </a></li>
                                    <li><a href="contact-us.html">تماس با ما </a></li>
                                    <li><a href="faq.html">نقل و قل </a></li>
                                    <li><a href="error-404.html">ارور 404</a></li>
                                    <li><a href="coming-soon.html">به زودی </a></li>
                                    <li><a href="wishlist.html">علاقه مندیها </a></li>
                                    <li><a href="cart.html">سبد خرید </a></li>
                                    <li><a href="checkout.html">پرداخت </a></li>
                                    <li><a href="my-account.html">حساب من </a></li>
                                    <li><a href="compare.html">مقایسه </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements.html">المنت ها </a>
                                <ul>
                                    <li><a href="element-accordions.html">آکاردئون </a></li>
                                    <li><a href="element-alerts.html">هشدار و اعلان</a></li>
                                    <li><a href="element-blog-posts.html">پست های وبلاگ </a></li>
                                    <li><a href="element-buttons.html">دکمه ها </a></li>
                                    <li><a href="element-cta.html">دکمه اقدام تماس</a></li>
                                    <li><a href="element-icons.html">آیکن ها </a></li>
                                    <li><a href="element-icon-boxes.html">آیکن باکس </a></li>
                                    <li><a href="element-instagrams.html">اینستاگرام </a></li>
                                    <li><a href="element-categories.html">دسته بندی محصول </a></li>
                                    <li><a href="element-products.html">محصولات </a></li>
                                    <li><a href="element-tabs.html">زبانه ها </a></li>
                                    <li><a href="element-testimonials.html">مشتریان </a></li>
                                    <li><a href="element-titles.html">عناوین </a></li>
                                    <li><a href="element-typography.html">تایپوگرافی </a></li>

                                    <li><a href="element-vendors.html">فروشندگان </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('user.stores.index')}}">خرید فروشگاه</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1 mt-0"></i>پیگیری سفارش </a>
                    <a href="#"><i class="w-icon-sale"></i>معاملات روزانه </a>
                </div>
            </div>
        </div>
    </div>
</header>