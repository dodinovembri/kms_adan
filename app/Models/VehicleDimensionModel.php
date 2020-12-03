<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleDimensionModel extends Model
{
    public $table ='vehicle_dimension';
    public $guarded ='[]';

    public function meassure()
    {
        return $this->belongsTo(MeassureModel::class, 'meassure_id');
    }  

}
