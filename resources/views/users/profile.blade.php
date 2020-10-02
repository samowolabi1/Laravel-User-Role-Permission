@extends('layouts.master')

@section('content')

<div class="content">
    <div class="col-md-8">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Profile Infomation</h4>
            </div>
            <div class="panel-body">
                <div class="profile-container">
                        <!-- begin profile-section -->
                        <div class="profile-section">
                            <!-- begin profile-left -->
                            <div class="profile-left">
                                <!-- begin profile-image -->
                                <div class="profile-image">
                                   @if ($user->profiles)
                                   <img src="{{asset('profile_images/'.$user->profiles->photo)}}" />
                                    @else
                                     <img src="/img/user-13.jpg" alt="" /> 
                                    @endif
                                    <!--  -->
                                    <i class="fa fa-user hide"></i>
                                </div>
                                <!-- end profile-image -->
                                <div class="m-b-10">
                                    <a href="{{route('edit_info')}}" class="btn btn-warning btn-block btn-sm">Edit Information</a>
                                </div>

                            </div>
                            <!-- end profile-left -->
                            <!-- begin profile-right -->
                            <div class="profile-right">
                                <!-- begin profile-info -->
                                <div class="profile-info">
                                    <!-- begin table -->
                                    <div class="table-responsive">
                                        @if (! is_null($profile))
                                        <table class="table table-profile">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <h4>User Profile Name</h4>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="field">
                                                    <td class="field">First Name</td>
                                                    <td> {{$profile->fname}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Last Name</td>
                                                    <td>{{$profile->lname}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Gender</td>
                                                    <td>{{$profile->gender}}</td>
                                                </tr>
                                                <tr class="field">
                                                    <td class="field">Phone Number</td>
                                                    <td>{{$profile->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Office Line</td>
                                                    <td>{{$profile->extention}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Job Title</td>
                                                    <td>{{$profile->job_title}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Department</td>
                                                    <td>{{$profile->department}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @else
                                        <h4 class="panel-heading">No Profile content yet Please create one</h4>
                                        @endif
                                    </div>
                                    <!-- end table -->
                                </div>
                                <!-- end profile-info -->
                            </div>
                            <!-- end profile-right -->
                        </div>
                        <!-- end profile-section -->
                        
                        <!-- end profile-section -->
                </div>      
            </div>
        </div>
    </div>
   <!--  <div class="col-md-4">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning " data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Change Password Here</h4>
            </div>
            <div class="panel-body">
                <div class="panel-body">
                            <form class="form-horizontal" action="{{ route('changepass', $staff->id) }}" method="POST" name="update_product">
                                                @csrf
                                                @method('PUT')
                                <fieldset>
                                    
                                   <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="password" class="form-control" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password" />
                                </div>
                            </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
            </div>
        </div>
        
    </div> -->
    
</div>



@endsection
@section('extra-script')
    <script type="text/javascript">
        var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
              if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
              } else {
                confirm_password.setCustomValidity('');
              }
            }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        
    </script>
    @endsection