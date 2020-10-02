<?php

namespace App;
use App\Models\Tenant;
use App\Models\Profile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','activate', 'activation_token', 'tenant_id','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


     public function tenants()
    {
        // user tenant relationship
        return $this->belongsTo(Tenant::class, 'tenant_id');

    }

     public function profiles()
    {
        // user profile relationship
        return $this->hasOne(Profile::class, 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission', 'user_permission')->withTimestamps();
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

}
