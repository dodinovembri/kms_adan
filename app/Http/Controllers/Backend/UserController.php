<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $table = "users";

    public $index = "backend/user/index";
    public $create = "backend/user/create";
    public $store = "backend/user/store";
    public $show = "backend/user_detail/index";
    public $edit = "backend/user/edit";
    public $update = "backend/user/update";
    public $destroy = "backend/user/destroy";

    public $file_storage = "public/img/user";

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // column will be hidden
        $data['column_hidden'] = [4, 5, 6];
        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"home", 
                "is_active"=>"inactive"
            ),
            "user"=>array(
                "text"=>"User", 
                "link"=>"", 
                "is_active"=>"active"
            )
        );
        $data['title'] = "User";

        // for route link
        $data['index'] = $this->index;
        $data['edit'] = $this->edit;
        // $data['show'] = $this->show;
        $data['create'] = $this->create;
        $data['destroy'] = $this->destroy;
        

        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_break'] = "created_at";
        $data['text_add'] = "Add New";
        $data['table_data'] = UserModel::all();

        return view('backend.single_page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // column will be hidden
        $data['column_hidden'] = [];

        // define dropdown
        // $dropdown[0] = CategoryModel::where('status', 1)->get();
        // $dropdown_option[0] = "category_name";

        // $data['dropdown'] = $dropdown;         
        // $data['dropdown_option'] = $dropdown_option;    

        // column will be hidden
        $data['column_hidden'] = [];

        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"backend", 
                "is_active"=>"inactive"
            ),
            "user"=>array(
                "text"=>"User", 
                "link"=>$this->index, 
                "is_active"=>"inactive"
            ),
            "create_user"=>array(
                "text"=>"Create User", 
                "link"=>"#", 
                "is_active"=>"active"
            )
        );
        $data['title'] = "Create User";

        $data['store'] = $this->store;
        $data['index'] = $this->index;
        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";        

        return view('backend.single_page.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table = $this->table;
        $table_field = DB::select("DESCRIBE $table");
        $field_break = "created_at";
        $field_first = "id";
        $column_hidden = [];

        foreach ($table_field as $key => $value) {
            if (in_array($key, $column_hidden)) {
                continue;
            }
            if ($value->Field == $field_first){
                continue;
            }
            if ($value->Field == $field_break){
                break;
            }                                            
            $arr_field[] = $value->Field;
            $arr_field_type[] = $value->Type;
            $count = count($arr_field); 
        }

        $insert = new UserModel();
        for ($i=0; $i < $count; $i++) { 
            $text_type = $arr_field_type[$i];
            $text_check = substr($text_type,0,3);
            if ($text_check == "cha") {
                if (!empty($request->file( $arr_field[$i]))) {
                    $file                       = $request->file($arr_field[$i]);
                    $fileName3                  = uniqid() . '.'. $file->getClientOriginalExtension();
                    $path = Storage::putFileAs($this->file_storage, $request->file($arr_field[$i]), $fileName3);
                    $field_db = $arr_field[$i]; 
                    $insert->$field_db = $fileName3;
                }                
            }else{
                $field_db = $arr_field[$i];            
                $insert->$field_db = $request->$field_db;            
            }           
        }        
        $insert->save();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("message", "Success created $result !");
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
        // define dropdown
        // $dropdown[0] = CategoryModel::where('status', 1)->get();
        // $dropdown_option[0] = "category_name";

        // $data['dropdown'] = $dropdown;         
        // $data['dropdown_option'] = $dropdown_option; 
                
        // for breadcrumb
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"backend", 
                "is_active"=>"inactive"
            ),
            "user"=>array(
                "text"=>"User", 
                "link"=>$this->index, 
                "is_active"=>"inactive"
            ),
            "edit_user"=>array(
                "text"=>"Edit User", 
                "link"=>"", 
                "is_active"=>"active"
            )            
        );
        $data['title'] = "Edit User";
        $data['update'] = $this->update;
        $data['index'] = $this->index;

        $data['id'] = $id;
        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";
        $data['field_'] = "created_at";

        $data['table_content'] = UserModel::find($id);

        return view('backend.single_page.edit', $data);
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
        $table = $this->table;
        $table_field = DB::select("DESCRIBE $table");
        $field_break = "created_at";
        $field_first = "id";
        $column_hidden = [];

        foreach ($table_field as $key => $value) {
            if (in_array($key, $column_hidden)) {
                continue;
            }
            if ($value->Field == $field_first){
                continue;
            }
            if ($value->Field == $field_break){
                break;
            }                                            
            $arr_field[] = $value->Field;
            $arr_field_type[] = $value->Type;
            $count = count($arr_field); 
        }

        $update = UserModel::find($id);
        for ($i=0; $i < $count; $i++) { 
            $text_type = $arr_field_type[$i];
            $text_check = substr($text_type,0,3);
            if ($text_check == "cha") {
                if (!empty($request->file( $arr_field[$i]))) {
                    $file                       = $request->file($arr_field[$i]);
                    $fileName3                  = uniqid() . '.'. $file->getClientOriginalExtension();
                    $path = Storage::putFileAs($this->file_storage, $request->file($arr_field[$i]), $fileName3);
                    $field_db = $arr_field[$i]; 
                    $update->$field_db = $fileName3;
                }                
            }else{
                $field_db = $arr_field[$i];            
                $update->$field_db = $request->$field_db;            
            }             
        }        
        $update->update();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("message", "Success updated $result !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $findtodelete = UserModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index))->with("info", "Success deleted $result !");        
    }
}
