<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PointModel extends Model
{
    public $table ='user_point';
    public $guarded ='[]';

    public function joinPoint()
    {
        return $this->hasOne('App\Model\PointModel', 'user_id', 'id');
    }     
}
