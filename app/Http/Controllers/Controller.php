<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
public function __construct(){
            $this->middleware(function($request, $next){

                if(session('success')){

                    Alert::success('Success', session('success'));
                };

                if(session('error')){

                    Alert::error('Error', session('error'));
                };
                return $next($request);
            });
        }
}
