<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table="documents";
    protected $fillable = [
        'name',
        'file',
        'status'];
}
