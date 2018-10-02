<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->

            <li class="nav-item active open">
                <a href="{{url('dashboard')}}" class="nav-link">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>

                    <span class="selected"></span> </a>

            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-plane"></i>
                    <span class="title">Flights Menu</span>

                    <span class="badge badge-success2" style="margin-right:20px; margin-top:5px;">
                        287                                
                    </span>

                    <span class="arrow"></span> 
                </a>

                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/pending')}}" class="nav-link ">
                            <i class="fa fa-exclamation-circle"></i>
                            <span class="title">Pending Permits</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/approved')}}" class="nav-link ">
                            <i class="fa fa-check-circle"></i>
                            <span class="title">Approved Permits</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/expired')}}" class="nav-link ">
                            <i class="fa fa-exclamation-circle"></i>
                            <span class="title">Expired Permits</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/cancelled')}}" class="nav-link ">
                            <i class="fa fa-times-circle"></i>
                            <span class="title">Cancelled/Denied </span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{url('dashboard/permit-request/draft')}}" class="nav-link ">
                            <i class="fa fa-refresh"></i>
                            <span class="title">Drafts</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-money"></i>
                    <span class="title">Payment</span>

                    <span class="arrow"></span> </a>

                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{route('payments.index')}}" class="nav-link ">
                            <i class="fa fa-history"></i>
                            <span class="title">Payment History</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>

                    <span class="arrow"></span> </a>

                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{route('register')}}" class="nav-link ">
                            <i class="fa fa-user"></i>
                            <span class="title">Add User</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('users.customers')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Customers</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="{{route('users.admens')}}" class="nav-link ">
                            <i class="fa fa-users"></i>
                            <span class="title">Admins</span>
                        </a>
                    </li>                    
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{url('dashboard/contact-us')}}" class="nav-link">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Customer Support</span>

                </a>

            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>

    <!-- END SIDEBAR -->
</div>