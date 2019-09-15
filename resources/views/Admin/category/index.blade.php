@extends('layouts.admin')


@section('content')
    @if(isset($message))
        <label><h3>دسته ای برای نمایش وجود ندارد</h3></label>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ثبت دسته جدید') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ثبت') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <?php

        function parent($parent){
           $parent =  \App\Category::where("parent","=",$parent)->get();
            echo "<ul>";
            foreach ($parent as $par){
                echo "<li style='list-style-type: none'> $par[name]
                                                    <form style='display:inline ;' action=".url(route('categories.destroy',['cat'=>$par]))." method='post'>
                                                    ".csrf_field().method_field('delete')."
                                                    <button style='color: red ; background-color: #bbb ;
    outline: none; border-radius: 5px'><i class='fa fa-times'></i></button>
</form>
  <a style='color: green' href=".url(route('categories.edit',['cat'=>$par]))."><i class='fa fa-edit'></i></a></li><a href=".url(route('categories.create',['cat'=>$par]))."><i class='fa fa-plus-square'></i></a>";
                if ($par['is_parent'] == "1"){
                    parent($par['id']);
                }
            }
            echo "</ul>";
        }

        function ch($category){
            echo"<ul>";
            foreach ($category as $key => $cat){

                if (($cat['parent'] == "")&&($cat['is_parent'] == "1")){
                    echo "<li style='list-style-type: none'> $cat[name]
                                                    <form style='display:inline ;' action=".url(route('categories.destroy',['cat'=>$cat]))." method='post'>
                                                    ".csrf_field().method_field('delete')."
                                                    <button style='color: red ; background-color: #bbb ;
    outline: none; border-radius: 5px'><i class='fa fa-times'></i></button>
</form>
  <a style='color: green' href=".url(route('categories.edit',['cat'=>$cat]))."><i class='fa fa-edit'></i></a></li><a href=".url(route('categories.create',['cat'=>$cat]))."><i class='fa fa-plus-square'></i></a>";                    parent($cat['id']);
                }
                if (($cat['parent'] == "")&&($cat['is_parent'] == "0")){
                    echo "<li style='list-style-type: none'> $cat[name]
                                                    <form style='display:inline ;' action=".url(route('categories.destroy',['cat'=>$cat]))." method='post'>
                                                    ".csrf_field().method_field('delete')."
                                                    <button style='color: red ; background-color: #bbb ;
    outline: none; border-radius: 5px'><i class='fa fa-times'></i></button>
</form>
  <a style='color: green' href=".url(route('categories.edit',['cat'=>$cat]))."><i class='fa fa-edit'></i></a></li><a href=".url(route('categories.create',['cat'=>$cat]))."><i class='fa fa-plus-square'></i></a>";                }
            }
            echo "</ul>";
        }
        ?>
        <a href="{{url(route('addMainCat'))}}" class="label label-warning" style="float: left;padding: 7px;">افزودن دسته جدید</a>
        <?
        ch($categories);

        ?>
    @endif
@endsection