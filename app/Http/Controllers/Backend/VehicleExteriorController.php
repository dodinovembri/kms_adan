<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VehicleExteriorModel;
use Illuminate\Support\Facades\Storage;

class VehicleExteriorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $table = "vehicle_exterior";

    public $index = "backend/vehicle_exterior/index";
    public $create = "backend/vehicle_exterior/create";
    public $store = "backend/vehicle_exterior/store";
    public $show = "backend/vehicle_exterior/show";
    public $edit = "backend/vehicle_exterior/edit";
    public $update = "backend/vehicle_exterior/update";
    public $destroy = "backend/vehicle_exterior/destroy";

    public $file_storage = "public/img/vehicle_exterior";

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {        
        $vehicle_id = session()->get('vehicle_id');

        // column will be hidden
        $data['column_hidden'] = [];

        // for breadcrumb
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
            "vehicle_exterior"=>array(
                "text"=>"Vehicle Exterior", 
                "link"=>"", 
                "is_active"=>"active"
            )            
        );
        $data['title'] = "Vehicle Exterior";

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
        $data['table_data'] = VehicleExteriorModel::where('vehicle_id', $vehicle_id)->get();

        return view('backend.single_page.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['column_hidden'] = [1];
        $vehicle_id = session()->get('vehicle_id');  
        // for breadcrumb
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
            "vehicle_exterior"=>array(
                "text"=>"Vehicle Exterior", 
                "link"=>"backend/vehicle_exterior/index",
                "is_active"=>"inactive"
            ),
            "create_vehicle_exterior"=>array(
                "text"=>"Create Vehicle Exterior", 
                "link"=>"", 
                "is_active"=>"active"
            )                        
        );
        $data['title'] = "Create Vehicle Exterior";

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

        $insert = new VehicleExteriorModel();
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
                $insert->$field_db = $i==0 ? session()->get('vehicle_id') : $request->$field_db;            
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
        $vehicle_id = session()->get('vehicle_id');  
                
        // for breadcrumb
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
            "vehicle_exterior"=>array(
                "text"=>"Vehicle Exterior", 
                "link"=>"backend/vehicle_exterior/index",
                "is_active"=>"inactive"
            ),
            "edit_vehicle_exterior"=>array(
                "text"=>"Edit Vehicle Exterior", 
                "link"=>"", 
                "is_active"=>"active"
            )                        
        );
        $data['title'] = "Edit Vehicle Exterior";
        $data['update'] = $this->update;
        $data['index'] = url($this->index, session()->get('vehicle_id'));

        $data['id'] = $id;
        $table = $this->table;
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";
        $data['field_'] = "created_at";

        $data['table_content'] = VehicleExteriorModel::find($id);

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

        $update = VehicleExteriorModel::find($id);
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
        $findtodelete = VehicleExteriorModel::find($id);
        $findtodelete->delete();

        $result = preg_replace("/[^a-zA-Z]/", " ", $this->table); 
        return redirect(url($this->index, session()->get('vehicle_id')))->with("info", "Success deleted $result !");        
    }
}
