@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="col-md-7">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Profile Update</h4>
                </div>
                <div class="panel-body">
                    <div class="profile-container">
                        <!-- begin profile-section -->
                        <div class="profile-section">
                            <!-- begin profile-left -->
                            <div class="profile-left">
                                <!-- begin profile-image -->
                                <div class="profile-image">
                                    <img src="img/company_logo.png" />
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
                                        <table class="table table-profile">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>
                                                        <h4>{{$user->tenants->name}}</h4>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="field">Phone Number 1</td>
                                                    <td><i class="fa fa-mobile fa-lg m-r-5"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Phone Number 2</td>
                                                    <td><i class="fa fa-mobile fa-lg m-r-5"></i></td>
                                                </tr>
                                                <tr class="highlight">
                                                    <td class="field">Company Address</td>
                                                    <td></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table -->
                                </div>
                                <!-- end profile-info -->
                            </div>
                            <!-- end profile-right -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Change Password Here</h4>
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                                <form class="form-horizontal" action="#">
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Old Password</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" placeholder="Enter password" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">New Password</label>
                                            <div class="col-md-8">
                                                <input type="password" id="password" class="form-control" placeholder="Enter password" />
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
            
        </div>
        
    </div>

@endsection