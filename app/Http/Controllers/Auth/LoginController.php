<?php

namespace App\Http\Controllers\Auth;
use DB;
use App\Models\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => [
                'required','string',
                Rule::exists('users')->where(function($query){
                    $query->where('activate',true);
                })
            ],

            'password' => 'required|string',
        ], $this->validationError());
    }

    protected function validationError(){


        
        // Alert::error('Invalid Login', 'Invalid Form Details');


        

        return
            [
                $this->username().'.exists' => 'No account found or you need to activate your account',
            ];
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // protected function credentials(Request $request)
    // {

    //      $tenant = DB::table('tenants')->where('name', $request['client'])->first();
    //     $tenant_id = $tenant ? $tenant->id : '';
    //     return array_merge($request->only($this->username(), 'password'),[
    //         'tenant_id'=>$tenant_id
    //     ]);
    // }
}
