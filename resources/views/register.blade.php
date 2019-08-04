@extends('layouts.web')

@section('content')
    @if(isset($query))
        <div class="alert alert-success" role="alert">
ثبت نام <?php
                echo $query;
            ?> با موفقیت انجام شد
        </div>
    @endif

    <section class="reg_part">
        <div class="top">
          <span>
              ثبت نام در چی گپ
          </span>
        </div>
        <div class="middle">
          <span>
              با ثبت نام در <span class="logo">چی گپ</span> میتونید وبلاگ نویسی حرفه ای و در عین حال ساده رو تجربه کنید
          </span>
        </div>
        <div class="bottom">
              <span class="top_title">
                  مشخصات کاربر
              </span>
            <div class="member_char_box">
                <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{method_field('post')}}
                <div class="user_char">
                      <span>
                          آدرس ایمیل
                      </span>
                    <input type="email" name="email">
                </div>
                <div class="user_char">
                      <span>
                          نام کاربری
                      </span>
                    <input type="text" name="name">
                </div>
                <div class="user_char">
                      <span>
                          رمز عبور
                      </span>
                    <input type="password" name="password">
                </div>
                <div class="user_char">
                      <span>
                          بارگزاری تصویر
                      </span>
                    <input type="file" name="image">
                </div>
                <button class="btn_register">
                    ثبت نام
                </button>
                <span class="login_link">
                      قبلا عضو شده اید؟ <a href="#">ورود</a>
                  </span>
                </form>
            </div>
        </div>
    </section>


@endsection