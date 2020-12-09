<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgePostModel extends Model
{
    public $table ='knowledge_post';
    public $guarded ='[]';

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    } 

}
