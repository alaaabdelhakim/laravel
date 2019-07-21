<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'settings';

    protected $primarykey = 'id';

    protected $fillable = ['about_us' , 'about_us_ar', 'about_us_img', 'phone1' , 'phone2', 'address', 'adress_ar', 'email' , 'tel' ];
}
