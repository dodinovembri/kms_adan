<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VehicleDimensionModel;
use App\Models\MeassureModel;
use Illuminate\Support\Facades\Storage;

class VehicleDimensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    | General setup
    */
    public $table           = "vehicle_dimension";
    public $column_hidden   = [1];
    public $file_storage    = "public/img/vehicle_dimension";
    public $field_first     = "id";
    public $field_break     = "created_at";
    public $text_add        = "Add New";

    /*
    | Link crud
    */
    public $base    = "home";
    public $index   = "backend/vehicle_dimension/index";
    public $create  = "backend/vehicle_dimension/create";
    public $store   = "backend/vehicle_dimension/store";
    public $show    = "backend/vehicle_dimension/show";
    public $edit    = "backend/vehicle_dimension/edit";
    public $update  = "backend/vehicle_dimension/update";
    public $destroy = "backend/vehicle_dimension/destroy";


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
        $vehicle_id = session()->get('vehicle_id');
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"home", 
                "is_active"=>"inactive"
            ),  
            "operational_vehicle"=>array(
                "text"=>"Operational Vehicle", 
                "link"=>"backend/operational_vehicle/index", 
                "is_active"=>"inactive"
            ),                      
            "operational_vehicle_detail"=>array(
                "text"=>"Operational Vehicle Detail", 
                "link"=>"backend/operational_vehicle_detail/index/".$vehicle_id, 
                "is_active"=>"inactive"
            ),
            "vehicle_dimension"=>array(
                "text"=>"Vehicle Dimension", 
                "link"=>"", 
                "is_active"=>"active"
            )            
        );
        $data['title'] = "Vehicle Dimension";
        $data['index'] = $this->index;
        $data['edit'] = $this->edit;
        $data['create'] = $this->create;
        $data['destroy'] = $this->destroy;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_break'] = $this->field_break;
        $data['field_first'] = $this->field_first;
        $data['text_add'] = $this->text_add;
        $data['table_data'] = VehicleDimensionModel::with('meassure')->where('vehicle_id', $vehicle_id)->get();
        $data['column_of_key'] = [3];
        $data['name_of_key'] = "meassure";
        $data['name_foreign'] = "meassure_name";        

        return view('backend.single_page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dropdown[0] = MeassureModel::where('status', 1)->get();
        $dropdown_option[0] = "meassure_name";
        $data['dropdown'] = $dropdown;         
        $data['dropdown_option'] = $dropdown_option; 

        $vehicle_id = session()->get('vehicle_id');  
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"home", 
                "is_active"=>"inactive"
            ),  
            "operational_vehicle"=>array(
                "text"=>"Operational Vehicle", 
                "link"=>"backend/operational_vehicle/index", 
                "is_active"=>"inactive"
            ),                      
            "operational_vehicle_detail"=>array(
                "text"=>"Operational Vehicle Detail", 
                "link"=>"backend/operational_vehicle_detail/index/".$vehicle_id, 
                "is_active"=>"inactive"
            ),
            "vehicle_dimension"=>array(
                "text"=>"Vehicle Dimension", 
                "link"=>"backend/vehicle_dimension/index",
                "is_active"=>"inactive"
            ),
            "create_vehicle_dimension"=>array(
                "text"=>"Create Vehicle Dimension", 
                "link"=>"", 
                "is_active"=>"active"
            )                        
        );
        $data['title'] = "Create Vehicle Dimension";
        $data['store'] = $this->store;
        $data['index'] = $this->index;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = $this->field_first;
        $data['field_break'] = $this->field_break;        

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
        $index = $this->index;

        $column_hidden = [];
        $table_field = DB::select("DESCRIBE $table");
        $field_first = $this->field_first;        
        $field_break = $this->field_break;        
        $storage = $this->file_storage;

        foreach ($table_field as $key => $value) {
            $field_table = $value->Field;
            $field_type = $value->Type;

            if (in_array($key, $column_hidden)) {
                continue;
            }
            if ($field_table == $field_first){
                continue;
            }
            if ($field_table == $field_break){
                break;
            }                                            
            $arr_field[] = $field_table;
            $arr_field_type[] = $field_type;
            $count = count($arr_field); 
        }

        $insert = new VehicleDimensionModel();
        for ($i=0; $i < $count; $i++) { 
            $text_type = $arr_field_type[$i];
            $text_check = substr($text_type, 0, 3);
            if ($text_check == "cha") {
                if (!empty($request->file($arr_field[$i]))) {
                    $file_temp_name = $request->file($arr_field[$i]);
                    $file_name = uniqid() . '.'. $file_temp_name->getClientOriginalExtension();
                    $path = Storage::putFileAs($storage, $request->file($arr_field[$i]), $file_name);
                    $field_db = $arr_field[$i]; 
                    $insert->$field_db = $file_name;
                }                
            }else{
                $field_db = $arr_field[$i];            
                $insert->$field_db = $i==0 ? session()->get('vehicle_id') : $request->$field_db; 
            }
        }        
        $insert->save();

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
        $vehicle_id = session()->get('vehicle_id');  
        $dropdown[0] = MeassureModel::where('status', 1)->get();
        $dropdown_option[0] = "meassure_name";
        $data['dropdown'] = $dropdown;         
        $data['dropdown_option'] = $dropdown_option; 
        
        $table = $this->table;
        $data['column_hidden'] = $this->column_hidden;
        $data['breadcrumb'] = array(
            "home"=>array(
                "text"=>"Dashboard", 
                "link"=>"home", 
                "is_active"=>"inactive"
            ),  
            "operational_vehicle"=>array(
                "text"=>"Operational Vehicle", 
                "link"=>"backend/operational_vehicle/index", 
                "is_active"=>"inactive"
            ),                      
            "operational_vehicle_detail"=>array(
                "text"=>"Operational Vehicle Detail", 
                "link"=>"backend/operational_vehicle_detail/index/".$vehicle_id, 
                "is_active"=>"inactive"
            ),
            "vehicle_dimension"=>array(
                "text"=>"Vehicle Dimension", 
                "link"=>"backend/vehicle_dimension/index",
                "is_active"=>"inactive"
            ),
            "edit_vehicle_dimension"=>array(
                "text"=>"Edit Vehicle Dimension", 
                "link"=>"", 
                "is_active"=>"active"
            )                        
        );
        $data['title'] = "Edit Vehicle Dimension";
        $data['update'] = $this->update;
        $data['index'] = url($this->index, session()->get('vehicle_id'));
        $data['id'] = $id;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = $this->field_first;
        $data['field_break'] = $this->field_break;
        $data['table_content'] = VehicleDimensionModel::find($id);

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
        $index = $this->index;

        $column_hidden = [1];
        $table_field = DB::select("DESCRIBE $table");
        $field_break = $this->field_break;
        $field_first = $this->field_first;
        $storage = $this->file_storage;

        foreach ($table_field as $key => $value) {
            $field_table = $value->Field;
            $field_type = $value->Type;

            if (in_array($key, $column_hidden)) {
                continue;
            }
            if ($field_table == $field_first){
                continue;
            }
            if ($field_table == $field_break){
                break;
            }                                            
            $arr_field[] = $field_table;
            $arr_field_type[] = $field_type;
            $count = count($arr_field); 
        }

        $update = VehicleDimensionModel::find($id);
        for ($i=0; $i < $count; $i++) { 
            $text_type = $arr_field_type[$i];
            $text_check = substr($text_type, 0, 3);
            if ($text_check == "cha") {
                if (!empty($request->file( $arr_field[$i]))) {
                    $file_temp_name = $request->file($arr_field[$i]);
                    $file_name = uniqid() . '.'. $file_temp_name->getClientOriginalExtension();
                    $path = Storage::putFileAs($storage, $request->file($arr_field[$i]), $file_name);
                    $field_db = $arr_field[$i]; 
                    $update->$field_db = $file_name;
                }                
            }else{
                $field_db = $arr_field[$i];            
                $update->$field_db = $request->$field_db;            
            }             
        }        
        $update->update();

        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 
        return redirect(url($index))->with("message", "Success updated $result !");
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

        $findtodelete = VehicleDimensionModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $table); 
        return redirect(url($this->index))->with("info", "Success deleted $result !");        
    }
}