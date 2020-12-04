<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KnowledgePostModel;
use App\Models\VehicleModel;
use App\Models\SubscriberModel;
use App\Models\UserModel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $category_table = "category";

    public function index()
    {
        $data['knowledge_post_count'] = KnowledgePostModel::count();
        $data['knowledge_post_active_count'] = KnowledgePostModel::where('status', 1)->count();
        $data['operational_vehicle_count'] = VehicleModel::count();
        $data['operational_vehicle_active_count'] = VehicleModel::where('status', 1)->count();
        $data['subscriber_count'] = SubscriberModel::count();
        $data['user_count'] = UserModel::count();
                     
        return view('backend.dashboard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search($id)
    {
        $data['home_with_id'] = DB::select("SELECT *  FROM `product` WHERE `name` LIKE '%$request->product_name%'");
        return view('frontend.home.search', $data);
    }

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
        // 
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
