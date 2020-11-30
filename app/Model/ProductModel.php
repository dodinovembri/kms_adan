<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public $table ='product';
    public $guarded ='[]';

    public static function ProductJoinCategoryAll()
    {
    	return $data = ProductModel::select('product.*', 'category.category_name as category_name')->join('category', 'product.id_category', '=', 'category.id')->get();
    }
}
