<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CanvasData extends Model
{
    protected $fillable = [
        'canvas_name', 'image_path', 'booth_type'
    ];
}
