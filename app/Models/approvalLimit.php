<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class approvalLimit extends Model
{
    //

     protected $fillable = [
    	'level', 'name', 'start', 'end', 'tenant_id',
    ];
}
