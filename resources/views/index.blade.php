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
            <?php
            $course = \App\Product::latest()->where('type','=','course')->get();
            $i = 0;
            ?>
            @foreach($course as $c)
                @if($i=="4")
                    @break
                @endif
            <div class="subitem">
                <a href="#">            <img src="{{asset("public/".$c->image)}}">
                </a>
                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <span class="price">{{$c->price}}</span>
                <div class="content">
                    <p class="title"><a href="#">{{$c->title}}</a></p>
                    <p class="demo">{{$c->summery}}</p>
                </div>
                <div class="video_time">
                    <div class="sub_video_item">
                        <p>تعداد قسمت ها</p>
                        <span>{{$c->episode}} <i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
                <?php
                    $i++;
                    ?>
        @endforeach
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
            <?php
            $article = \App\Product::latest()->where('type','=','article')->get();
            $i = 0;
            ?>
            @foreach($article as $c)
                @if($i=="4")
                    @break
                @endif
            <div class="subitem">
                <img src="{{asset("public/".$c->image)}}">                <!--
                                    <i class="fa fa-check" aria-hidden="true"></i>
                -->
                <!-- <span class="price">رایگان</span>-->
                <div class="content">
                    <p class="title"><a href="#">{{$c->title}}</a></p>
                    <p class="demo">{{$c->summery}}</p>
                </div>
                <div class="writer">
                    <div class="sub_writer_item">
                        <p>نویسنده</p>
                        <span>{{$c->writer}}</span>
                    </div>
                </div>
            </div>
                    <?php
                    $i++;
                    ?>
                @endforeach
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