<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    protected $fillable = [
    	'gender', 'fname', 'lname', 'initial', 'job_title', 'department', 'phone', 'extention', 'photo', 'user_id',
    ];
}
