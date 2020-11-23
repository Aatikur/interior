<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table="documents";
    protected $primarykey = "id";
    protected $fillable = [
        'name','file','status'
    ];
}
