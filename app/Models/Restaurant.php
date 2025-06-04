<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $fillable = [
        'name',
        'cuisine',
        'street',
        'house_no',
        'zip',
        'city',
        'phone_no',
        'url',
        'food_orderable',
    ];

}
