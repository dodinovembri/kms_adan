<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');  
        if (auth()->user() == 2) {
                  return redirect(route('home'));
              }      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['customer_order'] = DB::table('order')->count();
        $data['product'] = DB::table('product')->count();
        $data['users'] = DB::table('users')->count();
        return view('admin.dashboard.index', $data);
    }
}
