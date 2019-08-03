<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('admin.product.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;die;
        // Products Validation ???
        $file = $request['image'];
        $pic = $this->imageuploader($file);
        Product::create([
            'title' => $request['title'],
            'type' =>$request['type'],
            'price' => $request['price'],
            'writer' =>$request['writer'],
            'episode' =>$request['episode'],
            'summery' =>$request['summery'],
            'percentage' => $request['percentage'],
            'before_knl' => $request['before_knl'],
            'tag' => $request['tag'],
            'cat_id' =>$request['category'],
            'image' => $pic,
            'detail' => $request['detail']
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $filenametostore = $filename.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('/uploads/'),$filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset("public/uploads/".$filenametostore);
            $msg = 'تصویر مورد نظر شما با موفقیت آپلود شد';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

//            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }

    }
    public function moreInfo($id)
    {
        $pro = Product::where('id','=',$id)->get();
        $product = $pro[0];
        return view('admin.product.moreinfo',compact('product'));
    }
}
