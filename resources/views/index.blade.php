@extends('layouts.web')


@section('content')
    <!--===============start slider===================-->
    <section class="slider">
        <!--
                  <div class="cover"></div>
        -->
        <div class="content">
            <div class="top">
                <p>دنیای ایده آل خودتو با ما تجربه کن </p>
            </div>
            <div class="middle">
                <p>باور داریم که هر شخص علاقه مند و سخت کوشی می تواند با آموزش های درست در مسیر <span>طراحی و توسعه وب</span> قدم بردارد و به رویا های خود برسد </p>
            </div>
            <div class="guide">
                <a href="#">راهنمای سایت</a>
            </div>
        </div>
    </section>
    <!--===============start video===================-->
    <section class="video_item">
        <div class="title_part">
            <a href="#" id="right">
                آخرین دوره های آموزشی
            </a>
            <a href="#" id="left">
                مشاهده همه دوره ها
            </a>
        </div>
        <div class="item">

            <div class="subitem">
                <a href="#">            <img src="{{asset('public/shop/images/18.jpg')}}">
                </a>
                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <span class="price"></span>
                <div class="content">
                    <p class="title"><a href="#">sdfasdfdas</a></p>
                    <p class="demo">acasdcacac</p>
                </div>
                <div class="video_time">
                    <div class="sub_video_item">
                        <p>مدت زمان دوره</p>
                        <span>ascacacac <i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==================start article==================-->
    <section class="article_item">
        <div class="title_part">
            <a href="#" id="right">
                آخرین مقالات
            </a>
            <a href="#" id="left">
                مشاهده همه مقالات
            </a>
        </div>
        <div class="item">
            <div class="subitem">
                <img src="ghaleb/shop/images/new/2.jpg">
                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <!-- <span class="price">رایگان</span>-->
                <div class="content">
                    <p class="title"><a href="#">مقاله شماره 1</a></p>
                    <p class="demo">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                </div>
                <div class="writer">
                    <div class="sub_writer_item">
                        <p>نویسنده</p>
                        <span>محمد منتظری</span>
                    </div>
                </div>
            </div>
            <div class="subitem">
                <img src="ghaleb/shop/images/new/3.jpg">
                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <!-- <span class="price">رایگان</span>-->
                <div class="content">
                    <p class="title"><a href="#">مقاله شماره 1</a></p>
                    <p class="demo">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                </div>
                <div class="writer">
                    <div class="sub_writer_item">
                        <p>نویسنده</p>
                        <span>محمد منتظری</span>
                    </div>
                </div>
            </div>

            <div class="subitem">
                <img src="ghaleb/shop/images/new/4.jpg">
                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <!-- <span class="price">25000 تومان</span>-->
                <div class="content">
                    <p class="title"><a href="#">مقاله شماره 1</a></p>
                    <p class="demo">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                </div>
                <div class="writer">
                    <div class="sub_writer_item">
                        <p>نویسنده</p>
                        <span>محمد منتظری</span>
                    </div>
                </div>
            </div>
            <div class="subitem">
                <img src="ghaleb/shop/images/new/1.jpg">
                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <!-- <span class="price">رایگان</span>-->
                <div class="content">
                    <p class="title"><a href="#">مقاله شماره 1</a></p>
                    <p class="demo">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                </div>
                <div class="writer">
                    <div class="sub_writer_item">
                        <p>نویسنده</p>
                        <span>محمد منتظری</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================Start sitegardi=============-->
    <!--<section class="site_part">
        <div class="title">
            <span>سایتگردی</span>
        </div>
        <div class="bottom_part">
            <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="owl-carousel">
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/18.jpg">
                        <span class="part">سوژه های اینترنتی</span>
                        <p>خبر عجیب سایت ایرانی در مورد داعش</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/1.jpg">
                        <span class="part">اخبار</span>
                        <p>گفتگو با یک وب مستر ایرانی در مورد هک و مزایای آن</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/18.jpg">
                        <span class="part">گفتگو با مدیران</span>
                        <p>خبر عجیب سایت ایرانی در مورد داعش</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/11.jpg">
                        <span class="part">نقد و بررسی</span>
                        <p>گفتگو با یک وب مستر ایرانی در مورد هک و مزایای آن</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/17.jpg">
                        <span class="part">گفتگو با مدیران</span>
                        <p>خبر عجیب سایت ایرانی در مورد داعش</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/1.jpg">
                        <span class="part">اخبار</span>
                        <p>گفتگو با یک وب مستر ایرانی در مورد هک و مزایای آن</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
                <div class="sub">
                    <div class="image">
                        <img src="ghaleb/shop/images/18.jpg">
                        <span class="part">گفتگو با مدیران</span>
                        <p>خبر عجیب سایت ایرانی در مورد داعش</p>
                        <span class="date">تاریخ انتشار 96/10/12</span>
                    </div>
                    <a href="#">
                        <div class="cover"></div>
                    </a>
                </div>
            </div>
            <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
        </div>
    </section>-->

@endsection