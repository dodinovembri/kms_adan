<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    | General setup
    */
    public $table           = "users";
    public $column_hidden   = [3, 4,5,6];
    public $file_storage    = "public/img/user";
    public $field_first     = "id";
    public $field_break     = "created_at";
    public $text_add        = "Add New";

    /*
    | Link crud
    */
    public $base    = "home";
    public $index   = "backend/user/index";
    public $create  = "backend/user/create";
    public $store   = "backend/user/store";
    public $show    = "backend/user/show";
    public $edit    = "backend/user/edit";
    public $update  = "backend/user/update";
    public $destroy = "backend/user/destroy";


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dropdown()
    {
        // define dropdown
        $dropdown[0] = DropdownSelectionModel::where('status', 1)->get();
        $dropdown_option[0] = "dropdown_selection_name";

        $data['dropdown'] = $dropdown;         
        $data['dropdown_option'] = $dropdown_option;        
    }    

    public function index()
    {
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home" => array(
                "text" => "Dashboard", 
                "link" => $this->base,
                "is_active" => "inactive"
            ),
            "user" => array(
                "text" => "User", 
                "link" => "", 
                "is_active" => "active"
            )
        );
        $data['title'] = "User";
        $data['index'] = $this->index;
        $data['edit'] = $this->edit;
        $data['create'] = $this->create;
        $data['destroy'] = $this->destroy;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_break'] = $this->field_break;
        $data['field_first'] = $this->field_first;
        $data['text_add'] = $this->text_add;
        $data['table_data'] = UserModel::all();
        $data['column_of_key'] = [];
        $data['name_of_key'] = "";
        $data['name_foreign'] = "";        

        return view('backend.single_page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home" => array(
                "text" => "Dashboard", 
                "link" => $this->base,
                "is_active" => "inactive"
            ),
            "user" => array(
                "text" => "User", 
                "link" => $this->index, 
                "is_active" => "inactive"
            ),
            "create_user" => array(
                "text" => "Create User", 
                "link" => "#", 
                "is_active" => "active"
            )
        );
        $data['title'] = "Create User";
        $data['store'] = $this->store;
        $data['index'] = $this->index;     

        return view('backend.user.create', $data);
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
        $index = $this->index;
        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 

        $column_hidden = [];
        $table_field = DB::select("DESCRIBE $table");
        $field_first = $this->field_first;        
        $field_break = $this->field_break;        
        $storage = $this->file_storage;

        if ($request->input('password') != $request->input('password_confirm')) {
            return redirect(url($index))->with("error", "Your password doesnt match !");
        }else{
            $check = UserModel::where('email', $request->input('email'))->first();
            if (empty($check)) {
                $insert = new UserModel();
                $insert->name = $request->name;        
                $insert->email = $request->email;        
                $insert->password = Hash::make($request->password);                       
                $insert->created_at = date("Y-m-d H:i:s");
                $insert->save();

                return redirect(url($index))->with("message", "Success adding new $result !");
            }else{
                return redirect(url($index))->with("error", "$result already exist !");            
            }    
        }

        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 
        return redirect(url($index))->with("message", "Success created $result !");
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
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home" => array(
                "text" => "Dashboard", 
                "link" => $this->base,
                "is_active" => "inactive"
            ),
            "user" => array(
                "text" => "User", 
                "link" => $this->index, 
                "is_active" => "inactive"
            ),
            "edit_user" => array(
                "text" => "Edit User", 
                "link" => "", 
                "is_active" => "active"
            )            
        );
        $data['title'] = "Edit User";
        $data['update'] = $this->update;
        $data['index'] = $this->index;
        $data['id'] = $id;
        $data['user'] = UserModel::find($id);

        return view('backend.user.edit', $data);
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
        $index = $this->index;
        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 

        $column_hidden = [];
        $table_field = DB::select("DESCRIBE $table");
        $field_break = $this->field_break;
        $field_first = $this->field_first;
        $storage = $this->file_storage;

        if ($request->input('password') != $request->input('password_confirm')) {
            return redirect(url($index))->with("error", "Your password doesnt match !");
        }else{
            $check = UserModel::where('email', $request->input('email'))->first();
            if (empty($check)) {
                $update = UserModel::find($id);
                $update->name = $request->name;  
                $update->password = Hash::make($request->password);                       
                $update->updated_at = date("Y-m-d H:i:s");
                $update->update();

                return redirect(url($index))->with("message", "Success updating $result !");
            }else{
                return redirect(url($index))->with("error", "$result already exist !");            
            }    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = $this->table;
        $index = $this->index;

        $findtodelete = UserModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 
        return redirect(url($this->index))->with("info", "Success deleted $result !");        
    }
}