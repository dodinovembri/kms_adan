<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProductCategoryModel;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product_category'] = ProductCategoryModel::all();
        return view('admin.product_category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.product_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_category = new productCategoryModel();            

        $product_category->category_name = $request->input('category_name');
        $product_category->created_by =  auth()->user()->email;
        $product_category->created_at =  date("Y-m-d H:i:s");         
        $product_category->save();

        return redirect(route('admin.product_category.index'))->with('message', 'Product Category success Added !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product_category'] = ProductCategoryModel::find($id);
        return view('admin.product_category.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product_category'] = ProductCategoryModel::find($id);        

        return view('admin.product_category.edit', $data); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_category = ProductCategoryModel::where('id', $id)->first();            


        $product_category->category_name = $request->input('category_name');
        $product_category->updated_by =  auth()->user()->email;
        $product_category->updated_at =  date("Y-m-d H:i:s"); 
        $product_category->update();

        return redirect(route('admin.product_category.index'))->with('message', 'Product Category Success Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = ProductCategoryModel::find($id)->delete();
        return redirect(route('admin.product_category.index'))->with('message', 'Product Category success Deleted !');
    }
}
