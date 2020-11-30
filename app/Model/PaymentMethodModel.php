<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentMethodModel extends Model
{
    public $table ='payment_method';
    public $guarded ='[]';
}
