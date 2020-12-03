<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\VehicleDimensionModel;
use App\Models\VehicleEngineModel;
use App\Models\VehiclePerformanceModel;
use App\Models\VehicleSuspentionModel;
use App\Models\VehicleVelgTireModel;
use App\Models\VehicleActiveSafetyModel;
use App\Models\VehiclePassiveSafetyModel;
use App\Models\VehicleSecurityModel;
use App\Models\VehicleComfortModel;
use App\Models\VehicleExteriorModel;
use App\Models\VehicleCommunicationModel;
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
        $data['vehicle_dimension'] = VehicleDimensionModel::with('meassure')->where('id', $id)->first();
        $data['vehicle_engine'] = VehicleEngineModel::with('driver')->with('fuel')->where('id', $id)->first();
        $data['vehicle_performance'] = VehiclePerformanceModel::find($id);
        $data['vehicle_suspention'] = VehicleSuspentionModel::find($id);
        $data['vehicle_velg_tire'] = VehicleVelgTireModel::find($id);
        $data['vehicle_active_safety'] = VehicleActiveSafetyModel::find($id);
        $data['vehicle_passive_safety'] = VehiclePassiveSafetyModel::find($id);
        $data['vehicle_security'] = VehicleSecurityModel::find($id);
        $data['vehicle_comfort'] = VehicleComfortModel::find($id);
        $data['vehicle_exterior'] = VehicleExteriorModel::find($id);
        $data['vehicle_communication'] = VehicleCommunicationModel::find($id);

        return view('frontend.operational_vehicle.show', $data);
    }

}
