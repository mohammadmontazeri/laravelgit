@extends('layouts.web')

@section('content')
    <section class="login_part">
        <div class="top">
          <span>
              ورود به حساب کاربری
          </span>
        </div>
        <div class="middle">
          <span>
              با استفاده در <span class="logo">چی گپ</span> میتونید وبلاگ نویسی حرفه ای و در عین حال ساده رو تجربه کنید
          </span>
        </div>
        <div class="bottom">
              <span class="top_title">
                  مشخصات کاربر
              </span>
            <div class="member_char_box">
                <div class="user_char">
                      <span>
                          آدرس ایمیل
                      </span>
                    <input type="email" name="email">
                </div>
                <div class="user_char">
                      <span>
                          رمز عبور
                      </span>
                    <input type="password">
                </div>
                <button class="btn_login">
                    ورود
                </button>

            </div>

        </div>
    </section>


@endsection