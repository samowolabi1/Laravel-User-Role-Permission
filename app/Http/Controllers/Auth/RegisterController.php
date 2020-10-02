<?php

namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use App\Models\Tenant;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserRequestActivationEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255', 'unique:tenants'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $tenant = DB::table('tenants')->where('name', $data['name'])->first();
         if(!$tenant){
            Tenant::create([
                'name' => $data['name']
            ]);

            $tenant = DB::table('tenants')->where('name', $data['name'])->first();
           return User::create([
                'name' => $data['username'],
                'email' => $data['email'],
                'tenant_id' =>1,
                'role_id' =>3,
                'password' => Hash::make($data['password']),
                'activate' => false,
                'activation_token'=> Str::random(50)
            ]);

         }
        
    }

        

     /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        
        event(new UserRequestActivationEmail($user));

        $this->guard()->logout();

        return redirect($this->redirectPath())
        ->withSuccess('Registration Successful, please check your email to activate your account');
    }
}
