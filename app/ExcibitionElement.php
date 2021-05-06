<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcibitionElement extends Model
{
    protected $fillable = [
        'excibition_name','excibition_image', 'exhibition_file'
    ];
}
