<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset("public".\Illuminate\Support\Facades\Auth::user()->img)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- search form -->
       {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستوجو ...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>کاربران</span> <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url(route('user.index'))}}"><i class="fa fa-circle-o"></i>کلیه کاربران </a></li>
                    @can('update',\Illuminate\Support\Facades\Auth::user())
                        <li><a href="{{url("admin/allAdmin")}}"><i class="fa fa-circle-o"></i>ادمین ها </a></li>
                    @endcan
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>دسته بندی محتوا </span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url(route('categories.index'))}}"><i class="fa fa-circle-o"></i>نمایش دسته بندی ها</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span> محصولات</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url(route('products.create'))}}"><i class="fa fa-circle-o"></i>اضافه کردن محصول جدید</a></li>
                    <li><a href="{{url(route('products.index'))}}"><i class="fa fa-circle-o"></i> لیست کلیه محصولات</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>سفارشات</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>پرداخت ها</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>کامنت ها</span>
                    <i class="fa fa-angle-left pull-left"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                </ul>
            </li>
            <li>
                <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>ویدیو های آموزشی</span>
                    <small class="label pull-left bg-red">جدید</small>
                </a>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>ارتباط با ما</span></a></li>
           {{-- <li class="header">LABELS</li>--}}
            <li><a href="{{url("panel_logout")}}"><i class="fa fa-circle-o text-red"></i> <span>خروج</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
