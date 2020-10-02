<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    //

    public function index(){

         //addd multiple permissions to role

        //return "roles permisions page";
        
        $roles = Permission::find(3);

        $roles->roles()->sync([3,4]);

        $testdata = Role::find(3)->permissions;
        

        //dd($testdata);
    }
}
