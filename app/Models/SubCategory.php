<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table="sub_category";
    protected $primarykey = "id";
    protected $fillable = [
        'cat_id','name','image','price','status'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id',$this->primaryKey);
    }

}
