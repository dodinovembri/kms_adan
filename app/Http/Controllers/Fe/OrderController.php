<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CartModel;
use App\Model\CartDetailModel;
use App\User;
use App\Model\ProductModel;
use App\Model\OrderModel;
use App\Model\OrderDetailModel;
use App\Model\OrderHistoryModel;
use App\Model\PointModel;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
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
        $get_discount_point = DB::select('SELECT * FROM discount_point');        
        $get_order = CartModel::where('user_id', auth()->user()->id)->first();
        $get_order_detail = CartDetailModel::where('id_cart', $get_order->id)->get();

        $create_order = new OrderModel();
        $create_order->user_id = auth()->user()->id;
        $create_order->total_price = $get_order->total_price - $request->total_point_used;;
        $create_order->status = $get_order->status;
        $create_order->payment_method_id = $request->payment_method;
        $create_order->total_point_used = $request->total_point_used;
        $create_order->created_by =  auth()->user()->email;
        $create_order->created_at =  date("Y-m-d H:i:s");
        $create_order->save();
        $create_order->id;
        
        foreach ($get_order_detail as $key => $value) {
        	$insert_order_detail = new OrderDetailModel();
        	$insert_order_detail->id_order = $create_order->id;
        	$insert_order_detail->id_product = $value->id_product;        	
        	$insert_order_detail->qty = $value->qty;        	
        	$insert_order_detail->price = $value->price;        	
        	$insert_order_detail->subtotal = $value->subtotal;        	
         $insert_order_detail->created_by =  auth()->user()->email;
         $insert_order_detail->created_at =  date("Y-m-d H:i:s");
         $insert_order_detail->save();       	

     }  

     $delete_detail = CartDetailModel::where('id_cart', $get_order->id)->delete();
     $delete_cart = CartModel::where('user_id', auth()->user()->id)->delete();

     $create_history = new OrderHistoryModel();
     $create_history->user_id = auth()->user()->id;        
     $create_history->id_order = $create_order->id;
     $create_history->status = 1;
        // $create_history->ket = "Belum Bayar"; //on progress, dikirim, selesai, dibatalkan, pengembalian
     $create_history->save();

     if ($request->total_point_used > 0) {
        $minus_point = PointModel::where('user_id', auth()->user()->id)->first() ;
        $minus_point->point = $minus_point->point - $request->total_point_used;
        $minus_point->updated_by = auth()->user()->id;
        $minus_point->updated_at = date("Y-m-d H:i:s");        
        $minus_point->update();
     }

     $point = PointModel::where('user_id', auth()->user()->id)->first();
     if (!isset($point->point)) {
        $insert_point = new PointModel();
        $insert_point->user_id = auth()->user()->id;
        $insert_point->point = ($get_discount_point[0]->discount_point/100 * $get_order->total_price);
        $insert_point->created_by =  auth()->user()->email;
        $insert_point->created_at =  date("Y-m-d H:i:s");
        $insert_point->save();

    }else{
        $update = PointModel::where('user_id', auth()->user()->id)->first();
        $update->point = $point->point + ($get_discount_point[0]->discount_point/100 * $get_order->total_price);
        $update->updated_by = auth()->user()->id;
        $update->updated_at = date("Y-m-d H:i:s");
        $update->update();
    }

    return redirect(route('fe.history.index'));

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
