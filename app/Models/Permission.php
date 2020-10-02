<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //


    public function roles()
    {
    	return $this->belongsToMany('App\Models\Role', 'role_permission')->withTimestamps();
    }

      public function users()
    {
    	return $this->belongsToMany('App\Models\Role', 'user_permission')->withTimestamps();
    }

    
}