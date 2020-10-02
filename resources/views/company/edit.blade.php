@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="col-md-6 bg-white paduppro pl-0">

            <form class="form-horizontal" method="POST">
                                       
                <div class="form-group">
                    <label class="col-md-4 control-label">Company Logo</label>
                    <div class="col-md-8">
                        <input type="file" class="form-control"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Phone Number</label>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control" placeholder="Phone Number" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Address</label>
                    <div class="col-md-8">
                        <input type="text" value="" class="form-control" placeholder="Address" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                    </div>
                </div>
            </form>
                              
        </div>
        <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Change Password Here</h4>
                </div>
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

@endsection