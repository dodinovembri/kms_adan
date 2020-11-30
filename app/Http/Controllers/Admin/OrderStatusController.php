<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\OrderStatusModel;

class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['order_status'] = OrderStatusModel::all();
        return view('admin.order_status.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert_status = new OrderStatusModel();
        $insert_status->status = $request->input('status');
        $insert_status->ket = $request->input('ket');
        $insert_status->created_by =  auth()->user()->email;
        $insert_status->created_at =  date("Y-m-d H:i:s");   
        $insert_status->save();

        return redirect(route('admin.order_status.index'))->with('message', 'Order Status success created !');                     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['order_status'] = OrderStatusModel::find($id);
        return view('admin.order_status.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['order_status'] = OrderStatusModel::find($id);

        return view('admin.order_status.edit', $data);  
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
        $update = OrderStatusModel::find($id);
        $update->status = $request->input('status');
        $update->ket = $request->input('ket');
        $update->updated_by =  auth()->user()->email;
        $update->updated_at =  date("Y-m-d H:i:s");   
        $update->update();

        return redirect(route('admin.order_status.index'))->with('message', 'Order Status success updated !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = OrderStatusModel::find($id)->delete();
        return redirect(route('admin.order_status.index'))->with('message', 'Order Status success Deleted !');
    }
}
