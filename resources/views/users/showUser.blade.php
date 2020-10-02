@extends('layouts.master')
@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header"></h1>
        <!-- end page-header -->
        
        <!-- content begins -->
        <div class="row mt-5">
            <!-- begin col-12 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>    
                        </div>
                        <h4 class="panel-title">User's Profile</h4>
                    </div>
                    <div class="panel-body">
                    <div class="col-md-12">
                        <legend class="h5">User Information</legend>
                        <div class="table-responsive">
                                        <table class="table table-profile">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <form action="{{ route('updateUser', $staff->id) }}" method="POST" name="update_product">
                                                @csrf
                                                @method('PUT')
                                                <tr><td><div class="proimg"></div></td></tr>
                                                <tr>
                                                    <td class="field">User Email</td>
                                                    <td>{{$staff->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field">Full Name</td>
                                                    <td>{{$staff->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field text-info">Active Role</td>
                                                    <td class="text-info">{{$role_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="field"></td>
                                                    <td>
                                                        
                                                        <select class="form-control" name="role_id" required>
                                                            <option value="">Change Role</option>
                                                            @foreach($roles as $role)

                                                                @if ($role->name == $role_name)
                                                                    @continue
                                                                @endif
                                                                
                                                                <option value="{{$role->id}}">
                                                                        {{$role->name}}
                                                                </option>
                                                            
                                                            @endforeach
                                                        </select>
                                                    </td><td><input type="submit" value="Change User Role" class="btn btn-primary"></td>
                                                    
                                                </tr>


                                            </form>
                                            </tbody>
                                        </table>
                                    </div>
                          
                        </div>
                        <!-- hljhkl -->

                        <div class="col-md-12">
                        
                        <div class="table-responsive">
                                        <table class="table table-profile">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if($staff->activate == "1")
                                            <form action="{{ route('activateUser',$staff->id) }}" method="POST" name="update_product">
                                                @csrf
                                                @method('PUT')
                                                <tr>
                                                    <td class="field"></td>
                                                    <input type="hidden" name="activate" value="0">
                                                    <td><input type="submit" value="Deactivate User" class="btn btn-primary"></td>
                                                    
                                                </tr>
                                            </form>
                                            @else

                                             <form action="{{ route('activateUser',$staff->id) }}" method="POST" name="update_product">
                                                @csrf
                                                @method('PUT')
                                                <tr>
                                                    <td class="field"></td>
                                                    <input type="hidden" name="activate" value="1">
                                                    <td><input type="submit" value="Activate User" class="btn btn-danger"></td>
                                                    
                                                </tr>
                                            </form>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                          
                        </div>

                        <div class="col-md-12">
                            <div>
                             
                                    @csrf
                                     
                                           <legend class="h5">Role Permissions</legend>
                                            <div class="col-md-6">
                                            <ul class="ilist">
                                                @foreach($role_permission as $roleperm)
                                                <div> 
                                                    <li>{{$roleperm->name}}</li>
                                                
                                                </div>
                                                @endforeach
                                            </ul>
                                            </div>
                         </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <!-- begin panel -->
              
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>    
                        </div>
                        <h4 class="panel-title">User Permissions</h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <div>
                             <form action="{{route('user.permissions.revoke')}}" method="POST">
                                    @csrf
                                        <fieldset>
                                            <legend class="h5">Existing Permissions</legend>
                                            <div class="col-md-6">
                                            
                                            @foreach($user_permission as $userperm)
                                            <div> 
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="rpermissions[]" value="{{$userperm->id}}"/>
                                                {{$userperm->name}}
                                            </label>
                                            </div>
                                            @endforeach
                                            
                                            </div>
                                            <input type="hidden" name="userid" value="{{$staff->id}}">
                                            <input type="submit" value="Revoke Permissions" class="btn btn-danger permbtn">
                                </fieldset>
                                </form>
                         </div>
                         <br><br>

                            <div>
                                <form action="{{route('user.permissions.add')}}" method="POST">
                                    @csrf
                                        <fieldset>
                                            <legend class="h5">New Permissions</legend>
                                            <div class="col-md-6">
                                            
                                            @foreach($permissions as $permission)
                                            <div> 
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="permissions[]" value="{{$permission->id}}" />
                                                {{$permission->name}}
                                            </label>
                                            </div>
                                            @endforeach
                                            
                                            </div>
                                            <input type="hidden" name="userid" value="{{$staff->id}}">
                                            <input type="submit" value="Add Permissions" class="btn btn-primary permbtn">
                                </fieldset>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection