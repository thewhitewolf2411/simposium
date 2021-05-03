<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CanvasEvents extends Model
{
    protected $fillable = [
        'canvas_id', 'event_type', 'file_path', 'event_number', 'x1', 'y1', 'x2', 'y2'
    ];
}
