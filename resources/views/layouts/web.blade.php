
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/shop/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/shop/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('public/shop/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/shop/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/shop/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset("public/admin/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/admin/dist/css/bootstrap-rtl.min.css")}}">
    <link rel="stylesheet" href="{{asset('public/css/login.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{asset('public/shop/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/shop/js/script2.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/shop/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/shop/js/jquery2.js')}}"></script>
    <script src="{{asset('public/shop/js/sweetalert.js')}}"></script>
    <title>آکادمی وب اینجا</title>
</head>
<body><!--
<div class="viewports">

</div>-->
{{--<section class="signinholder">
    <div class="signin">
        <div class="top">
               <span class="exit_signin">
                   خروج
               </span>
            <h4>
                ثبت نام کاربر جدید
            </h4>
        </div>
        <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{method_field('POST')}}
            <div class="email">
                       <span>
                           نام کاربری:
                       </span>
                <input type="text" id="name" name="name">
            </div>
            <div class="email">
                       <span>
                           آدرس ایمیل:
                       </span>
                <input type="email" id="email" name="email">
            </div>
            <div class="password">
                       <span>
                           کلمه عبور:
                       </span>
                <input type="password" id="password" name="password">
            </div>
            <div class="sabt">
                <button>
                    ثبت نام
                </button>
            </div>
        </form>
    </div>
</section>
<!--=========================login======================-->
<section class="loginholder" id="loginholder">
    <div class="login">
        <div class="top">
               <span class="exit_login">
                   خروج
               </span>
            <h4>
                ورود کاربر به سایت
            </h4>
        </div>
        <form action="" method="post">
            @csrf
            {{method_field('POST')}}
            <div class="email">
                       <span>
                           آدرس ایمیل:
                       </span>
                <input type="email" id="email" name="email">
            </div>
            <div class="password">
                       <span>
                           کلمه عبور:
                       </span>
                <input type="password" id="password" name="password">
            </div>
            <div class="forget">
                <a href="#">
                    رمز عبور خود را فراموش کرده اید؟
                </a>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="checkbox-1">
                <label for="checkbox-1">
                    <span class="box"></span>
                    مرا به خاطر بسپار
                </label>
            </div>
            <div class="sabt">
                <button>
                    ورود به سایت
                </button>
            </div>
        </form>
    </div>
</section>--}}
<!--=========================send_comment======================-->
<section class="send_comment_holder">
    <div class="send_comment">
        <div class="top_comment">
            <h5>ارسال دیدگاه</h5>
            <i class="fa fa-times-circle-o" id="exit_comment" aria-hidden="true"></i>
        </div>
        <div class="bottom_comment">
            <form method="post" action="index.php?c=comment&a=add">
                <textarea type="text" rows="10" class="comment_txt" placeholder="متن مورد نظر را وارد کنید..." name="question"></textarea>
                <button class="btn">ثبت دیدگاه شما</button>
            </form>
        </div>
    </div>
</section>
<!--=====================header==========================-->
<header>
    <div class="top">
        <div class="logo">
            <img src="{{asset('public/shop/images/Academy.png')}}">
        </div>
        <div class="menu">
            <div class="top">
                <div class="right">
                    <span>منو</span>
                    <ul>
                        <li><a href="index.php">صفحه اصلی</a></li>
                        <li class="im">
                            <a href="#" class="im2">دپارتمان طراحی سایت  <!--<i id ="jahat" class="fa fa-chevron-down" aria-hidden="true"></i>--></a>
                            <!--      <div class="sub_all">
                                      <div class="sub_menu">
                                          <div class="item">
                                              <h4>آموزش های طراحی قالب سایت</h4>
                                              <div class="item_sub">
                                                  <ul>
                                                      <li><a href="#">آموزش تست</a></li>
                                                      <li><a href="#">آموزش تست</a></li>
                                                      <li><a href="#">آموزش تست</a></li>
                                                      <li><a href="#">آموزش تست</a></li>

                                                  </ul>
                                              </div>
                                          </div>
                                          <div class="item">
                                              <h4>آموزش های برنامه نویسی سایت</h4>
                                              <div class="item_sub">
                                                  <ul>
                                                      <li><a href="#">آموزش تست</a></li>
                                                      <li><a href="#">آموزش تست</a></li>
                                                      <li><a href="#">آموزش تست</a></li>
                                                      <li><a href="#">آموزش تست</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <div class="item">
                                              <img src="images/coding.png">
                                          </div>

                                      </div>
                                  </div>-->
                        </li>
                        <li><a href="#">آموزش های رایگان</a></li>
                        <li><a href="#">مقالات آموزشی</a></li>
                    </ul>

                </div>
                <div class="left">
                    <img src="{{asset('public/shop/images/user.png')}}">
                    <div>
                        <a class="" href="#"> ورود </a>
                        |<a class="" href="{{route('user_register')}}"> ثبت نام  </a>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <div class="site">
                    <span>تازه ترین ها</span>
                    <ul>
                        <li><a href="">آموزش لاراول</a></li>
                        <li><a href="">آموزش کد نویسی مدرن</a></li>
                        <li><a href="">کدنویسی حرفه ای </a></li>
                        <li><a href="">دوره اصلی آموزش php</a></li>

                    </ul>

                </div>
            </div>
        </div>
        <div class="basketlogo">
            <a href="index.php?c=userpanel&a=basket">
                <img src="{{asset('public/shop/images/shopping-basket%20(1).png')}}">
            </a>
            <span>سبد <span class="empty">خرید</span></span>
        </div>
    </div>
    <div class="bottom">
        <div class="right">
            <!-- <span class="new"><a href="#">تازه ترین ها</a></span>-->
            <div>
                <ul>
                    <li><a href="">درباره ما</a></li>
                    <li><a href="">ارتباط با ما</a></li>
                </ul>
            </div>
        </div>
        <div class="center">
            <form>
                <div class="search">
                    <input type="text" placeholder="از اینجا بگرد" id="product">
                    <button>
                        <span>جستجو</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <div class="ajax" id="product_list">

            </div>
        </div>
        <div class="left">


          {{--  <span class="panel"><a href="index.php?c=userpanel&a=default">پنل کاربری شما</a></span>
            <div>
                <a href="index.php?c=user&a=logout">خروج</a>
            </div>
            <p>ثبت نام شما با موفقیت انجام شد لطفا ورود کنید<p>--}}


        </div>
    </div>
</header>
<section class="header">
    <div class="headeritem">
        <div class="bars">
            <i class="fa fa-bars" aria-hidden="true" id="m_hidden"></i>
        </div>
        <div class="middlepart">
            <img src="{{asset('public/shop/images/Academy.png')}}">
        </div>
        <div class="useraction">
            <i id="search" class="fa fa-search" aria-hidden="true"></i>
        </div>
    </div>

    <div class="search_box">
        <div class="top">
            <input type="text" class="search" placeholder="از اینجا بگرد....">
            <i class="fa fa-times" aria-hidden="true" id="exit_search"></i>
        </div>
    </div>
    <div class="hidden_ajax">

    </div>
</section>
<!--============== responsive menu=============-->
<section class="responsive">
    <div class="hidden_menu">
        <ul>
            <li class="li"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    صفحه اصلی</a></li>
            <li class="departman_ghaleb">
                <div class="title">
                    <a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        آموزش های طراحی قالب سایت <i id ="jahat" class="fa fa-chevron-down" aria-hidden="true"></i></a>
                </div>
                <div class="content_ghaleb">
                    <ul>
                        <li><a href="#">آموزش های  سایت</a></li>
                        <li><a href="#">آموزش  وب</a></li>
                    </ul>
                </div>
            </li>
            <li class="departman_back">
                <div class="title">
                    <a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        آموزش های برنامه نویسی سایت <i id ="jahat" class="fa fa-chevron-down" aria-hidden="true"></i></a>
                </div>
                <div class="content_back">
                    <ul>
                        <li><a href="#">آموزش های  سایت</a></li>
                        <li><a href="#">آموزش  وب</a></li>
                    </ul>
                </div>
            </li>
            <li class="li"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    آموزش های رایگان</a></li>
            <li  class="li"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    مقالات آموزشی</a></li>
            <li class="li"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    تازه ترین ها</a></li>
            <li class="li"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    ارتباط با ما</a></li>
            <li class="li"><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                    درباره ما</a></li>
            <li class="li"><i id="user"class="fa fa-user" aria-hidden="true"></i>
                <a href="#" class="vorod"> ورود </a>|<a href="#" class="sabt"> ثبت نام  </a></li>
            <?php //if (isset($_SESSION['user_id'])){ ?>
            {{--<li class="li"><a class="panel_hidden" href="index.php?c=userpanel&a=default">پنل کاربری شما</a></li>
            <li class="li"><a class="exit" href="index.php?c=user&a=logout">خروج</a></li>--}}
            <?php //} ?>
        </ul>
    </div>
</section>
{{--////////////////--}}

@yield('content')
<!--===============start footer===================-->
<section class="footeritem">
    <div class="footer">
        <div class="right">
            <div class="video">
                <h2>دوره های آموزشی</h2>
                <ul>
                    <li><a href="#">آموزش طراحی وب</a></li>
                    <li><a href="#">آموزش لاراول</a></li>
                    <li><a href="#">آموزش فریم ورک SASS</a></li>
                    <li><a href="#">آموزش PHP</a></li>
                    <li><a href="#">آموزش سی اس اس</a></li>
                </ul>
            </div>
            <div class="article">
                <h2>مقاله های آموزشی</h2>
                <ul>
                    <li><a href="#">آموزش طراحی وب</a></li>
                    <li><a href="#">آموزش لاراول</a></li>
                    <li><a href="#">آموزش فریم ورک SASS</a></li>
                    <li><a href="#">آموزش PHP</a></li>
                    <li><a href="#">آموزش سی اس اس</a></li>
                </ul>
            </div>
        </div>
        <div class="left">
            <div class="properties">
                <h2>برخی از ویژگی دوره های ما</h2>
                <ul>
                    <li> <i class="fa fa-check" aria-hidden="true"></i>آموزش های باکیفیت</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i>هزینه تهیه مناسب</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i>آموزش های کاربردی</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i>تنوع آموزش ها</li>
                    <li> <i class="fa fa-check" aria-hidden="true"></i>مدرس های نمونه وبرتر</li>
                </ul>
            </div>
            <div class="aboutus">
                <img src="{{asset('public/shop/images/Academy.png')}}">
                <p class="about">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                </p>
            </div>
        </div>
    </div>
    <div class="center">
        <form>
            <div class="search">
                <input id="footer_input" type="text" placeholder="برای عضویت در خبر نامه ایمیل خود را وارد کنید">
                <button>
                    ثبت
                </button>
            </div>
        </form>
    </div>
</section>
<!--=================copyright==================-->
<section class="copyright">
    <p>تمامی حقوق این وب سایت محفوظ می باشد</p>
</section>
<!--===================scroller=====================-->
<section class="scrolleritem">
    <div class="scroller">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </div>
</section>
<!--================script======================-->
</body>
        </html>