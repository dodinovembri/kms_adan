<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PaymentMethodModel;


class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['payment_method'] = PaymentMethodModel::all();
        return view('admin.payment_method.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment_method.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new PaymentMethodModel();
        $insert->payment_name = $request->input('payment');
        $insert->ket = $request->input('ket');
        $insert->created_by =  auth()->user()->email;
        $insert->created_at =  date("Y-m-d H:i:s");   
        $insert->save();

        return redirect(route('admin.payment_method.index'))->with('message', 'Payment method success created !');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['payment_method'] = PaymentMethodModel::find($id);
        return view('admin.payment_method.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['payment_method'] = PaymentMethodModel::find($id);
        return view('admin.payment_method.edit', $data);
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
        $update = PaymentMethodModel::find($id);
        $update->payment_name = $request->input('payment');
        $update->ket = $request->input('ket');
        $update->updated_by =  auth()->user()->email;
        $update->updated_at =  date("Y-m-d H:i:s");   
        $update->save();

        return redirect(route('admin.payment_method.index'))->with('message', 'Payment method success updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = PaymentMethodModel::find($id)->delete();
        return redirect(route('admin.payment_method.index'))->with('message', 'Payment Method success Deleted !');
    }
}
