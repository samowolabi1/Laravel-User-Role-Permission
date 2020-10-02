<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Response;
use App\User;
use App\Models\Role;
use App\Models\Profile;
use App\Models\Permission;

class UserController extends Controller
{
    //

    public function index(){

        // if (Gate::allows('isAdmin')) {
        // echo 'Admin user role is allowed';
        // } else {
        //     echo 'Admin are not allowed not allowed';
    // }

        $user =  User::find(Auth::id());
        // dd($tenant->tenant_id);
        $users = User::where('tenant_id', $user->tenant_id)->get(); 
        $roles = Role::whereIn('id',[2,3,4])->get();
        $i = 0;

        return view('users.index', compact('users','roles','i'));
    }


    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $input = $request->all();

        if ($validator->passes()) {
            // Store your user in database 
            $user =  User::find(Auth::id());
             User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'role_id' => $request['role'],
                'activate' =>1,
                'tenant_id' =>1,
            ]);

            return Response::json(['success' => '1']);

        }
        
        return Response::json(['errors' => $validator->errors()]);
    }

   
    public function show($id, Request $request){

         $permissions = Permission::all();
         $staff = User::find($id);
         $staffid = $staff->id;

         $user_roleid = $staff->role_id;
        
         $user_role = Role::find($user_roleid);
         $roles = Role::all();

         $role_name = $user_role->name;
       

         $role_permission = Role::find($user_roleid)->permissions()->orderBy('name')->get();
         $user_permission = User::find($staffid)->permissions()->orderBy('name')->get();


        return view('users.showUser', compact('staff','permissions','role_name','roles','role_permission','user_permission'));
    }

    public function destroy($id){
         
        $user = user::find($id);
        $user->activate = 0;
        $user->update();
       return redirect()->route('users')->with('success','User Succesfully Deleted');
    }


    public function update($id, Request $request)
    {
        $user = User::find($id);

         $this->validate($request, [
            'role_id'=>'required'
        ]);

         $user->role_id = $request->input('role_id');
         $user->save();

        return redirect()->back()->with('success','User Role Updated');
    }


      public function activate($id, Request $request)
    {
        $user = User::find($id);

         $this->validate($request, [
            'activate'=>'required'
        ]);

         $user->activate = $request->input('activate');
         $user->save();

        return redirect()->back()->with('success','User Updated succesfully');
    }


       public function password($id, Request $request)
    {
        $user = User::find($id);

         $this->validate($request, [
            'password'=>'required'
        ]);

         $user->password = bcrypt($request->input('password'));
         $user->save();

        return redirect()->back()->with('success','Password Updated succesfully');
    }


    public function profile(Request $request)
    {
         
         $user =  User::find(Auth::id());

            $file = $request->file('photo');
        // Define upload path
           $destinationPath = public_path('/profile_images/'); // upload path
        // Upload Orginal Image           
           $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
           $file->move($destinationPath, $profileImage);
        
         // If there's a UserProfile with Id of Auth_id, update its profile.
        // If no matching model exists, create one.
        Profile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'initial' => $request['initial'],
                'job_title' => $request['job'],
                'department' => $request['dept'],
                'phone' => $request['phone'],
                'extention' => $request['extension'],
                'photo' => $profileImage,
                'gender' => $request['gender'],
                'user_id' => $user->id,
            ]
        );
    
         return redirect()->route('profile_info')->with('success','User Profile Succesfully Updated');

    }

    public function updateProfile($id, Request $request)
    {

    }


}
