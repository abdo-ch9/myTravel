<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'countryOfResidence',
        'phoneNumber',
        'email',
        'dateReservation',
        'numberNight',
        'numberOfAdults',
        'numberOfChilds',
        'howdiduknowaboutus',
    ];
}
