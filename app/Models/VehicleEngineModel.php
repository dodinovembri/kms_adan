<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleEngineModel extends Model
{
    public $table ='vehicle_engine';
    public $guarded ='[]';

    public function driver()
    {
        return $this->belongsTo(DriverTypeModel::class, 'driver_type_id');
    }  

    public function fuel()
    {
        return $this->belongsTo(FuelTypeModel::class, 'fuel_type_id');
    }      

}
