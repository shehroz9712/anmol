<?php

namespace App\Models;

use App\Models\Dishes;
use Illuminate\Database\Eloquent\Model;

class SubCatogires extends Model
{
    protected $guarded = [];
    public function dishes()
    {
        return $this->hasMany(Dishes::class, 'subcategory_id', 'id')->with('attribute');
    }
}