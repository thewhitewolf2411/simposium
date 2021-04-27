<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CanvasEvents extends Model
{
    protected $fillable = [
        'canvas_id', 'event_type', 'script_path', 'function_name', 'x1', 'y1', 'x2', 'y2'
    ];
}
