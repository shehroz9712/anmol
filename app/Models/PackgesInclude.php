<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PackgesInclude extends Model
{
    protected $guarded = [];
    public function subcategory()
    {
        return $this->belongsTo(SubCatogires::class, 'subcategory_id', 'id')->with('dishes');
    }
}