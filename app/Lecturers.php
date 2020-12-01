<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lecturers';

    protected $fillable = [
        'title','first_name','last_name','webinar_id','qa_id'
    ];
}
