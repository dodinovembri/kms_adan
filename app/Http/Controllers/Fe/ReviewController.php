<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProductReviewModel;


class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');  
        if (auth()->user() == 2) {
                  return redirect(route('home'));
              }      
    }
        
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
    public function store(Request $request, $id)
    {
        $insert = new ProductReviewModel();
        $insert->user_id = auth()->user()->id;
        $insert->product_id = $id;
        $insert->rating = $request->rating;
        $insert->review = $request->review;  
        $insert->created_by =  auth()->user()->email;
        $insert->created_at =  date("Y-m-d H:i:s");  
        $insert->save();
        
        return redirect()->back();
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
