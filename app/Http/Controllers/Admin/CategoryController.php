<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $number = Category::get()->count();
        $message = "دسته ای برای نمایش وجود ندارد";
        if ($number != ""){
        return view('admin.category.index',compact('categories'));
        }else{
            return view('admin.category.index',compact('message'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = $_GET['cat'];
        return view('admin.category.add',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::where('id','=',$request['cat_id']);
        $category->update([
            'is_parent' => "1"
        ]);
        if (isset($request['cat_id'])){
            Category::create([
                'name' => $request['name'],
                'parent' => $request['cat_id'],
                'is_parent' => "0"
            ]);
        }else{
            Category::create([
                'name' => $request['name'],
                'is_parent' => "0"
            ]);
        }

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request['name']
        ]);
        return redirect(route('categories.index'));
    }



    public function destroy(Category $category)
    {
        if ($category['is_parent'] == "1"){
            $delete = Category::where('parent',"=",$category['id'])->get();
            foreach ($delete as $del){
                $del->delete();
            }
        }
        $category->delete();
        $parent = Category::where('id','=',$category['parent'])->get();
        $childs = Category::where('parent','=',$parent[0]['id'])->get();
        //return $childs;die;
        if (empty($childs[0])){
            Category::where('id','=',$category['parent'])->update(['is_parent'=>'0 ']);
        }
        return redirect()->back();
    }
}
