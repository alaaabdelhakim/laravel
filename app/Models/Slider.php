<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    protected $primarykey = 'id';

    protected $fillable = ['name' , 'decs', 'decs_ar' , 'image' ];
}
