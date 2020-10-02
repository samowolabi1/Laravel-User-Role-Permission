<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    //

    protected $fillable = [
    	'photo', 'phone', 'address1', 'address2',
    ];
}
