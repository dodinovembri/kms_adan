<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\VehicleDimensionModel;
use Illuminate\Support\Facades\DB;


class OperationalVehicleController extends Controller
{
    public $table = "operational_vehicle";

    public function index()
    {
        $data['operational_vehicle'] = VehicleModel::where('status', 1)->get();
        return view('frontend.operational_vehicle.index', $data);
    }

    public function show($id)
    {
        $data['operational_vehicle'] = VehicleModel::find($id);
        $data['vehicle_dimension'] = VehicleDimensionModel::find($id);
        
        $data['table_field'] = DB::select("DESCRIBE $table");
        $data['field_first'] = "id";
        $data['field_break'] = "created_at";
        $data['field_'] = "created_at";

        return view('frontend.operational_vehicle.show', $data);
    }

}
