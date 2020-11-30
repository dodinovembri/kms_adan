<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CartModel;
use App\Model\CartDetailModel;
use App\User;
use App\Model\ProductModel;
use App\Model\PaymentMethodModel;
use App\Model\PointModel;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty( auth()->user()->id)) {
            return redirect(route('login'));
        }
        $cek = CartModel::where('user_id', auth()->user()->id )->first();
        if (empty($cek)) {
            $cart = new CartModel();    
            $cart->user_id = auth()->user()->id;

            $get_price_db = ProductModel::find($request->input('id_product'));
            $get_qty_form = $request->input('qty');

            $total_price = $get_price_db->price * $get_qty_form;

            $cart->total_price = $total_price;
            $cart->status = 1; // cart created                
            $cart->created_by =  auth()->user()->email;
            $cart->created_at =  date("Y-m-d H:i:s");
            $cart->save();
            $cart->id;
            if ($cart->save()) {
                $success = 1;
            }            

            if ($success == 1) {                
                $cartdetail = new CartDetailModel();                    
                $cartdetail->id_cart = $cart->id;
                $cartdetail->id_product = $request->input('id_product');
                $cartdetail->qty = $request->input('qty');            
                $cartdetail->price = $get_price_db->price;
                $cartdetail->subtotal = $total_price;
                $cartdetail->created_by =  auth()->user()->email;
                $cartdetail->created_at =  date("Y-m-d H:i:s");
                $cartdetail->save();
            }
            return redirect(route('fe.index'));
        }else{
            $get = CartModel::where('user_id', auth()->user()->id )->first();

            $get_price_db = ProductModel::find($request->input('id_product'));
            $get_qty_form = $request->input('qty');

            $total_price_new = $get_price_db->price * $get_qty_form;
            $total_price = $total_price_new + $get->total_price;

            $get->total_price = $total_price;
            $get->status = 1; // cart created                
            $get->updated_by =  auth()->user()->email;
            $get->updated_at =  date("Y-m-d H:i:s");
            $get->update();
            $get->id;    

            if ($get->update()) {
                $updated = 1;
            }            

            if ($updated == 1) {                
                $cartdetail = new CartDetailModel();                    
                $cartdetail->id_cart = $get->id;
                $cartdetail->id_product = $request->input('id_product');
                $cartdetail->qty = $request->input('qty');            
                $cartdetail->price = $get_price_db->price;
                $cartdetail->subtotal = $total_price_new;
                $cartdetail->created_by =  auth()->user()->email;
                $cartdetail->created_at =  date("Y-m-d H:i:s");
                $cartdetail->save();
            }
            return redirect(route('fe.index'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['cart'] = CartModel::select('cart.*', 'cart_detail.id_product', 'cart_detail.qty as qty', 'cart_detail.id as cart_detail_id', 'cart_detail.subtotal as subtotal', 'product.id as id_product', 'product.sku as sku', 'product.name as product_name', 'product.image as product_image', 'product.price as product_price')->join('cart_detail', 'cart.id', '=', 'cart_detail.id_cart')->join('product', 'cart_detail.id_product', '=', 'product.id')->where('user_id', '=', auth()->user()->id)->get();
        $data['total_price'] = CartModel::where('user_id', auth()->user()->id)->first();
        $data['payment_method'] = PaymentMethodModel::all();
        $data['point'] = PointModel::where('user_id', auth()->user()->id)->first();
        return view('fe.cart.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $cek = CartModel::where('user_id', auth()->user()->id )->first();        
        $count = count($request->input('id_product'));

        for ($i=0; $i < $count; $i++) { 
            $value = $request->input('id_product')[$i];        
            $get_data_cart = CartDetailModel::where('id_product', $value)->where('id_cart', $cek->id)->first();
            $get_price_db = ProductModel::where('id', $value)->first();        

            $get_data_cart->qty = $request->input('qty')[$i];
            $get_data_cart->price = $get_price_db->price;
            $get_data_cart->subtotal = $request->input('qty')[$i] * $get_price_db->price;
            $get_data_cart->updated_by = auth()->user()->email;
            $get_data_cart->updated_at = date("Y-m-d H:i:s");
            $get_data_cart->update();
        }
        
        $total_price_detail = CartDetailModel::where('id_cart', $cek->id)->sum('subtotal');
        $cek->total_price = $total_price_detail;
        $cek->updated_by = auth()->user()->email;
        $cek->updated_at = date("Y-m-d H:i:s");
        $cek->update();

        return redirect(route('fe.cart.show'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = CartDetailModel::find($id);
        $get_cart_table = CartModel::where('id', $get->id_cart)->first();
        $update_cart_table = $get_cart_table->total_price - $get->subtotal;        
        $get_cart_table->total_price = $update_cart_table;
        $get_cart_table->updated_by = auth()->user()->email;
        $get_cart_table->updated_at = date("Y-m-d H:i:s");
        $get_cart_table->update();
        $get->delete();

        return redirect(route('fe.cart.show'));
    }
}
