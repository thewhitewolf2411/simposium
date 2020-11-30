<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsors extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sponsors';

    protected $fillable = [
        'sponsor_name','sponsor_contact_email','booth_path'
    ];
}
