<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'webinars';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'webinar_date','webinar_time','webinar_duration',
        'webinar_name','webinar_link'
    ];
}
