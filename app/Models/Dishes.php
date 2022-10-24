<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    protected $guarded = [];




    public function menu_attribute()
    {
        return $this->hasMany(MenuAttribute::class, 'menu_id', 'id');
    }
}
