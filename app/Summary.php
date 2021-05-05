<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'summary';

    protected $fillable = [
        'summary_name', 'summary_file'
    ];
}
