<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table="gallery";
    protected $primarykey = "id";
    protected $fillable = [
        'image','caption'
    ];
}
