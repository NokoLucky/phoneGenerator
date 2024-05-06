<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone_no', 'code', 'phone_type', 'lentgh_match', 'valid'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}