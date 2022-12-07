<?php

namespace App\Models;

use App\Catogires;
use App\Models\MenuAttribute;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackgesInclude;

class Packages extends Model
{
    protected $guarded = [];


    public function category()
    {
        return $this->hasMany(PackageCategory::class, 'id', 'category_id');
    }

    public function include()
    {
        return $this->hasMany(PackgesInclude::class, 'packages_id', 'id')->with('subcategory');
    }
}