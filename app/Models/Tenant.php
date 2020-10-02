<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //

    protected $fillable = [
    	'name',
    ];


    public function users()
    {
    	return $this->hasMany(User::class, 'tenant_id');
    }

    public function tenant_profiles()
    {
    	return $this->hasOne(Tenant_Profile::class, 'tenant_id');
    }
}
