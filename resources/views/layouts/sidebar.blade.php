<div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->
                <ul class="nav">
                    <li class="nav-profile">
                        <div class="image">
                            <a href=""><img src="/img/user-1.jpg" alt="Company Logo" /></a>
                        </div>
                        <div class="info">
                             {{ucfirst($user->name)}}
                            
                        </div>
                    </li>
                </ul>
                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{url('/home')}}">
                            <i class="fa fa-laptop"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('users*') ? 'active' : '' }}">
                        @can('isSuperAdmin')
                        <a href="{{url('/users')}}">
                            <i class="fa fa-user"></i> 
                            <span>Users</span>
                        </a>
                        @endcan
                       
                    </li>


                  <!--    <li class="{{ Request::is('approvals') ? 'active' : '' }}">
                        @canany(['isSuperAdmin','isAdmin'])
                        <a href="{{url('/approvals/level')}}">
                            <i class="fa fa-exclamation"></i> 
                            <span>Approval Limits</span>
                        </a>
                        @endcanany
                       
                    </li> -->


                    <li class="has-sub">
                        @canany(['isSuperAdmin','isAdmin'])
                        <a href="#">
                          <i class="fa fa-bar-chart"></i>   
                            <span>Reports</span>
                        </a>
                       @endcanany
                    </li>
                    
                    <li class="has-sub">
                        @can('isSuperAdmin')
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="fa fa-cogs"></i>
                            <span>Settings</span> 
                        </a>
                        @endcan
                        <ul class="sub-menu">
                            <li><a href="form_elements.html">SYSTEM</a></li>
                            <li><a href="form_slider_switcher.html">COMPANY</a></li>
                        </ul>
                    </li>
                    
                    <!-- begin sidebar minify button -->
                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>