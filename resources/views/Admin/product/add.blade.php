@extends('layouts.admin')


@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">افزودن محصول جدید</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان محصول</label>
                    <input type="text" class="form-control" name="title"   placeholder="عنوان محصول خود را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">نوع محتوا را انتخاب کنید</label>
                    <select name="type" id="">
                        <option value="article">مقاله</option>
                        <option value="course">دوره آموزشی (فیلم)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">قیمت</label>
                    <input type="text" class="form-control" name="price" placeholder="قیمت را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">نویسنده</label>
                    <input type="text" class="form-control" name="writer" placeholder="نویسنده را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">تعداد قسمت ها</label>
                    <input type="text" class="form-control" name="episode" placeholder="تعداد قسمت ها را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">خلاصه متن</label>
                    <input type="text" class="form-control" name="summery" placeholder="خلاصه متن را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">درصد تکمیل</label>
                    <input type="text" class="form-control" name="percentage" placeholder="درصد تکمیل را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">پیشنیاز محتوا</label>
                    <input type="text" class="form-control" name="before_knl" placeholder="پیشنیاز محتوا را وارد کنید">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">متن محتوا</label>
                    <textarea class="form-control" id="summary-ckeditor" name="detail"></textarea>                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">تگ ها</label>
                    <textarea  class="form-control" name="tag" placeholder="تگ ها را وارد کنید"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">دسته بندی مربوطه</label>
                    <select name="category">
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label for="exampleInputFile">تصویر شاخص</label>
                    <input type="file" id="exampleInputFile" name="image">
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">افزودن</button>
            </div>
        </form>
    </div><!-- /.box -->
@endsection