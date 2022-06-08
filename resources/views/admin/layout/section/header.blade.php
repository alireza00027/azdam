<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">خانه</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <!-- Messages Dropdown Menu -->
        <!-- delete data-toggle=dropdown!-->
        <li class="nav-item dropdown">
            <a class="nav-link"  href="#">
                <i class="fa fa-comments-o"></i>
                <span class="badge badge-danger navbar-badge pt-1">3</span>
            </a>
{{--            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">--}}
{{--                <a href="#" class="dropdown-item">--}}
{{--                    <!-- Message Start -->--}}
{{--                    <div class="media">--}}
{{--                        <img src="{{asset('img/shahab/user.jpg')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle">--}}
{{--                        <div class="media-body">--}}
{{--                            <h3 class="dropdown-item-title fs2">--}}
{{--                                {{auth()->user()->name}}--}}
{{--                            </h3>--}}
{{--                            <p class="text-sm text-muted fs0"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>--}}
{{--                            <p class="text-sm fs1 my-1">متن تستی</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Message End -->--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item">--}}
{{--                    <!-- Message Start -->--}}
{{--                    <div class="media">--}}
{{--                        <img src="{{asset('img/shahab/user.jpg')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle">--}}
{{--                        <div class="media-body">--}}
{{--                            <h3 class="dropdown-item-title fs2">--}}
{{--                                شهاب طالبی--}}
{{--                            </h3>--}}
{{--                            <p class="text-sm text-muted fs0"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>--}}
{{--                            <p class="text-sm fs1 my-1">متن تستی</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Message End -->--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>--}}
{{--            </div>--}}
        </li>
    </ul>
</nav>
<!-- /Navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image pr-2">
                    <a href="#"><img src="#" class="img-circle elevation-2" alt="User Image"></a>
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->name}}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                         <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    داشبورد
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    کاربران
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon fs1"></i>
                                        <p>
                                            ثبت کاربر جدید
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon fs1"></i>
                                        <p>
                                            تایید شده
                                            <span class="right badge badge-success">2</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-circle-o nav-icon fs1"></i>
                                        <p>
                                            در صف انتظار
                                            <span class="right badge badge-warning text-white">0</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon fs1"></i>
                                        <p>
                                            قطع همکاری
                                            <span class="right badge badge-danger">2</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-key"></i>
                                <p>
                                    سطح دسترسی
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-list-alt"></i>
                                    <p>
                                        گزارشات کارمندان
                                        <span class="right badge badge-danger">2</span>
                                    </p>
                                </a>
                        </li>
    
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-gears"></i>
                                <p>پروژه ها</p>
                            </a>
                        </li>
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="$('#form-logout').submit()">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>
                                خروج
                            </p>
                        </a>
                        <form id="form-logout" action="{{'logout'}}" method="post" style="display: none">
                            {{csrf_field()}}
                            <div class="nav-link">
                                <button type="submit"><i class="nav-icon fa fa-power-off">خروج</i></button>
                            </div>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
