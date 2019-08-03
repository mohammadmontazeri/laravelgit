@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">لیست همه محصولات</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">

                        <tr style="background-color: #4e555b; color: white">
                            <th>آی دی محصول</th>
                            <th>عنوان</th>
                            <th>نوع</th>
                            <th>تصویرشاخص</th>
                            <th style="width: 11%;">تاریخ ثبت محصول</th>
                            <th>اطلاعات بیشتر</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        @foreach($products as $product)
                            <?php

                            ?>
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->type}}</td>
                            <td><img src="{{asset("public".$product->image)}}" style="width: 50px;height: 50px;"></td>
                            <td><?php
                                    $v = new Verta($product->created_at);
                                    $v = \Hekmatinasser\Verta\Verta::instance($product->created_at);
                                    $v = \Hekmatinasser\Verta\Verta::persianNumbers($v);
                                    echo $v;
                            ?></td>
                            <td>
                                <span class="label label-success">
                                    <a href="{{url('admin/product/moreInfo',['product'=>$product->id])}}" style="color: #fff;">اطلاعات بیشتر</a>
                                </span>
                            </td>
                            <td>
                                        <a class="label label-primary" href="{{route('products.edit',['product'=>$product])}}">ویرایش</a>
                            </td>
                            <td>
                               <form method="post" action="{{route('products.destroy',['product'=>$product])}}">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        <button class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </table>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
{{--
            {{$products->links()}}
--}}
        </div>
    </div>
@endsection
