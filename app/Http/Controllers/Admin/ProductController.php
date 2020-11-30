<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProductModel;
use App\Model\CategoryModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = ProductModel::ProductJoinCategoryAll();
        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = CategoryModel::all();
        return view('admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $product = new ProductModel();            

        $cek = ProductModel::where('sku', $request->sku)->first();
        if ($cek) {
            return redirect(route('admin.product.index'))->with('error', 'Product already exist !');            
        }else{
            $product->sku = $request->input('sku');
            $product->name = $request->input('name');
            $product->id_category = $request->input('id_category');
            $product->price = $request->input('price');
            $product->description = $request->input('description');        
            
            $file = $request->file('photo');
            $destinationPath = 'img/'; // upload path
            $photo_name = uniqid() . '.'. $file->getClientOriginalExtension();
            $request->file('photo')->move($destinationPath, $photo_name);            
            $product->image = $photo_name;
            $product->save();

            return redirect(route('admin.product.index'))->with('message', 'Product success Added !');
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product'] = ProductModel::where('sku', $id)->first();
        return view('admin.product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = ProductModel::find($id);
        $data['category'] = CategoryModel::all();

        return view('admin.product.edit', $data);        
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
        $product = ProductModel::where('id', $id)->first();            

        $cek = ProductModel::where('sku', $request->sku)->first();

        $product->sku = $request->input('sku');
        $product->name = $request->input('name');
        $product->id_category = $request->input('id_category');
        $product->price = $request->input('price');
        $product->description = $request->input('description');   

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $file = $request->file('photo');
            $destinationPath = 'img/'; // upload path
            $photo_name = uniqid() . '.'. $file->getClientOriginalExtension();
            $request->file('photo')->move($destinationPath, $photo_name);            
            $product->image = $photo_name;
            $product->update();
        }else{
            $product->update();
        }     
        

        return redirect(route('admin.product.index'))->with('message', 'Product success Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = ProductModel::find($id)->delete();
        return redirect(route('admin.product.index'))->with('message', 'Product success Deleted !');

    }
}
