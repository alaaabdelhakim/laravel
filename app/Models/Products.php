<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $primarykey = 'id';

    protected $fillable = ['name' , 'decs', 'name_ar', 'decs_ar' , 'image' ];
}
