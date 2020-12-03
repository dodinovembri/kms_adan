<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\KnowledgePostModel;
use App\Models\KnowledgePostDetailModel;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public $table = "knowledge_post";

    public function index()
    {
        $data['category'] = CategoryModel::where('status', 1)->get();
        $data['knowledge_post'] = KnowledgePostModel::where('status', 1)->get();
        return view('frontend.index', $data);
    }

    public function show($id)
    {
        $data['category'] = CategoryModel::where('status', 1)->get();
        $data['knowledge_post'] = KnowledgePostModel::find($id);
        $data['knowledge_post_detail'] = KnowledgePostDetailModel::where('knowledge_post_id', $id)->get();
        return view('frontend.show', $data);		
    }

    public function search(Request $request)
    {
        // define table
        $table = $this->table;
        $search_params = $request->s;

        $data['category'] = CategoryModel::all();   
        $data['knowledge_post'] = DB::select("
            SELECT *  FROM $table WHERE 
            `knowledge_post_title` LIKE '%$search_params%' OR
            `knowledge_post_short_description` LIKE '%$search_params%' OR
            `knowledge_post_full_description` LIKE '%$search_params%'
        ");
        return view('frontend.index', $data);
    }

    public function searchbyid($id)
    {
        // define table
        $table = $this->table;        

        $data['category'] = CategoryModel::all();   
        $data['knowledge_post'] = KnowledgePostModel::where('category_id', $id)->get();
        return view('frontend.index', $data);
    }
}
