<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class social extends Model
{
    protected $table = 'socials';

    protected $primarykey = 'id';

    protected $fillable = ['facebook' , 'twitter', 'pinterest', 'youtube' , 'linkedin'];
}
