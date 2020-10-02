@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Update Profile</h4>
                </div>
                <div class="panel-body">
                    
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('userProfile') }}">
                         @csrf
                        @if (! is_null($profile))
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profile Image</label>
                            <div class="col-md-8">
                                <input type="file" name="photo" id="photo" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="fname" class="form-control" value="{{$profile->fname}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="lname" class="form-control" value="{{$profile->lname}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Initial</label>
                            <div class="col-md-3">
                                <select class="form-control" name="initial">
                                    <option value="{{$profile->initial}}">{{$profile->initial}}</option>
                                    <option value="Mr"> Mr.</option>
                                    <option value="Mrs"> Mrs</option>
                                    <option value="Miss"> Miss</option>
                                </select>
                            </div>

                            <label class="col-md-1 control-label">Gender</label>
                            <div class="col-md-4">
                               <select class="form-control" name="gender">
                                    <option value="{{$profile->gender}}">{{$profile->gender}}</option>
                                    <option value="Male"> Male</option>
                                    <option value="Female"> Female</option>
                               </select>
                            </div>
                        
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone Number</label>
                            <div class="col-md-4">
                                <input type="text" name="phone" class="form-control" value="{{$profile->phone}}" />
                            </div>
                            <label class="col-md-1 control-label">Ext</label>
                            <div class="col-md-3">
                                <input type="text" name="extension" class="form-control" value="{{$profile->extention}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-8">
                                <input type="date" name="dob" class="form-control" placeholder="Date of Birth" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Job Title</label>
                            <div class="col-md-8">
                                <input type="text" name="job" class="form-control" value="{{$profile->job_title}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Department</label>
                            <div class="col-md-8">
                                <input type="text" name="dept" class="form-control" value="{{$profile->department}}" />
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="col-md-3 control-label">Address</label>
                            <div class="col-md-8">
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div> -->
                        
                        @else
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profile Image</label>
                            <div class="col-md-8">
                                <input type="file" name="photo" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="fname" class="form-control" placeholder="First Name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Initial</label>
                            <div class="col-md-3">
                                <select class="form-control" name="initial">
                                    <option value="....">**** Select Your Title****</option>
                                    <option value="Mr"> Mr.</option>
                                    <option value="Mrs"> Mrs</option>
                                    <option value="Miss"> Miss</option>
                                </select>
                            </div>
                            <label class="col-md-1 control-label">Gender</label>
                            <div class="col-md-4">
                               <select class="form-control" name="gender">
                                    <option value="...."> ***Select your Gender***</option>
                                    <option value="Male"> Male</option>
                                    <option value="Female"> Female</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone Number</label>
                            <div class="col-md-4">
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                            </div>
                            <label class="col-md-1 control-label">Ext</label>
                            <div class="col-md-3">
                                <input type="text" name="extension" class="form-control" placeholder="234001" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-8">
                                <input type="date" name="dob" class="form-control" placeholder="Date of Birth" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Job Title</label>
                            <div class="col-md-8">
                                <input type="text" name="job" class="form-control" placeholder="Job Title" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Department</label>
                            <div class="col-md-8">
                                <input type="text" name="dept" class="form-control" placeholder="Job Title" />
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-8">
                                <button type="submit" class="btn btn-sm btn-success m-r-5">Submit</button>
                                <button type="reset" class="btn btn-sm btn-warning ">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>         
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        
                    </div>
                    <h4 class="panel-title">Change Password Here</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('changepass', $profile->id) }}" method="POST" name="update_product">
                        @csrf
                        @method('PUT')
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Old Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password" required />
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
    </div>

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