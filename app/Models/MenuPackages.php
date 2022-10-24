<?php

namespace App\Models;

use App\Models\MenuAttribute;
use Illuminate\Database\Eloquent\Model;

class MenuPackages extends Model
{
    protected $guarded = [];





    public function dishes1()
    {
        return $this->hasMany(PackageDishe::class, 'package_id', 'id')->with('name');
    }
}
