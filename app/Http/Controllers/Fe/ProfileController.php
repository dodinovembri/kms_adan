<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Model\DiscountPointModel;
use App\Model\PointModel;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $data['user'] = User::find(auth()->user()->id)->joinPoint()->first();
        $cek_user_point = PointModel::where('user_id', auth()->user()->id)->first();
        if (empty($cek_user_point)) {
            $data['user'] = DB::select('SELECT * FROM users WHERE id = "'.auth()->user()->id.'" ');
        }else{            
            $data['user'] = DB::select('SELECT * FROM `users` JOIN user_point ON users.id = user_point.user_id WHERE users.id = "'.auth()->user()->id.'"');
        }
        return view('fe.profile.index', $data);
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
