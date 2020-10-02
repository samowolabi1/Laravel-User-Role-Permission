<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
     public function index(){
      //   if(Auth::user()->role_id == 1){
      //      return view('company.index');
     	// }

        $profile = Profile::where('user_id',Auth::id())->first();
        $staff = User::where('id',Auth::id())->first();

        return view('users.profile', compact('profile','staff'));
    }

    public function edit(){
    	// if(Auth::user()->role_id == 1){
     //       return view('users.edit');
     // 	}
        
        $profile = Profile::where('user_id',Auth::id())->first();
    	return view('users.edit', compact('profile'));
    }
}
