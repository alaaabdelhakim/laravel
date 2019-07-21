<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';

    protected $primarykey = 'id';

    protected $fillable = ['name' , 'msg', 'email' ];
}
