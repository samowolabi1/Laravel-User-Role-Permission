<?php

namespace App;

use App\Models\Tenant;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Authenticatable
{

  
    protected $fillable = [
        'email', 'username', 'password', 'role',
    ];

  

}
