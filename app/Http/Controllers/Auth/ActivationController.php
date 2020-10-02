<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivationController extends Controller
{
     public function activate(Request $request){
    	$user = User::where('email', $request->email)->whereNotNull('activation_token')->where('activation_token', $request->token)->firstOrFail();

        // dd($user);
    	
    	$user->update([
    		'activate'=>true,
    		'activation_token' =>null
    	]);

    	Auth::loginUsingId($user->id);
    	return redirect()->route('home')->withSuccess('Activated! You\'re now signed in');
    }
}
