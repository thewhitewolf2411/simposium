<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PanelistData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'panelist_data';

    protected $fillable = [
        'user_id','webinar_id'
    ];
}
