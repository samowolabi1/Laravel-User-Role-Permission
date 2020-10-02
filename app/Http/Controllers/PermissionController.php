<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Role;
use App\Models\Permission;

class PermissionController extends Controller
{
    
    public function index(){


    }


     public function store(Request $request)
    {
        
        if($request->permissions == null)
        {
            return redirect()->back()->with('error','No permission selected');
        }

    	$permission = $request->permissions;
    	$userid = $request->userid;
    	
	    $staff = User::find($userid);
        $staffid = $staff->id;

	    $user_roleid = $staff->role_id;

    	$users = User::find($staffid);

        $users->permissions()->syncWithoutDetaching($permission);

 
        return redirect()->back()->with('success','Permissions Added Succesfully');
    }

    public function detach(Request $request){


        
        $rpermission = $request->rpermissions;

        if($rpermission == null)
        {
            return redirect()->back()->with('error','No permission selected');
        }

        $userid = $request->userid;
       // return $rpermission;
        
        $staff = User::find($userid);
        $user_roleid = $staff->role_id;

        $users = User::find($userid);
        
        $users->permissions()->detach($rpermission);

 
        return redirect()->back()->with('success','Permissions Revoked Succesfully');


    }
}
