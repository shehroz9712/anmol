<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PackageDishe extends Model
{
    protected $guarded = [];

    public function name()
    {
        return $this->belongsTo(Dishes::class, 'dishe_id', 'id');
    }
}