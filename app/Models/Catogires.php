<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catogires extends Model
{
    protected $guarded = [];
    public function sub_category()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
}