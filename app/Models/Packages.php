<?php

namespace App\Models;

use App\Models\MenuAttribute;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $guarded = [];




    public function dishes()
    {
        return $this->belongsToMany(Dishes::class);
    }
}