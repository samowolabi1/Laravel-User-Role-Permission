@extends('layouts.master')
@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header"></h1>
        <!-- end page-header -->
        
        <!-- content begins -->
        <div class="row">
            <div class="col-md-12 pr-5">
              
                <a href="#nav-pills-tab-1" data-toggle="tab"><i class="fa fa-2x fa-th-list"></i></a> &nbsp;

                <a href="#nav-pills-tab-2" data-toggle="tab"><i class="fa fa-2x fa-th-large"></i></a> &nbsp;

                <a class="btn btn-danger pull-right" href="#modal-dialog" data-toggle="modal" >Add Vendor <i class="fa fa-plus"></i></a>
                <br><br>
                <!-- starts modal -->
                <div class="modal fade" id="modal-dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title">Add New Vendor</h4>
                                </div>
                                <div class="modal-body">
                                    <!--modal body start  --> 
                                <!-- ends -->
                                </div>
                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- modal ends -->
             
                <!-- end page-header -->
                
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="nav-pills-tab-1">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>    
                                        </div>
                                        <h4 class="panel-title">Vendors</h4>
                                    </div>
                                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-pills-tab-2">
                                <div class="row">
                                <!-- begin col-3 -->
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dividerr"></div>   
            </div>        
        </div>
    </div>
@endsection