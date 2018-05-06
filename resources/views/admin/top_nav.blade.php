<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-light bg-gradient-x-grey-blue">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a href="#" class="nav-link nav-menu-main menu-toggle hidden-xs">
                        <i class="fa fa-menu font-large-1"></i></a></li>
                <li class="nav-item"><a href="{{route('admin.dashboard')}}" class="navbar-brand">
                        <img alt="stack admin logo"
                             src="/admin_inc/app-assets/images/logo/stack-logo.png" class="brand-logo">
                        <h2 class="brand-text">Mr. Gift</h2></a></li>
                <li class="nav-item d-md-none">
                    <a data-toggle="collapse" data-target="#navbar-mobile"
                       class="nav-link open-navbar-container">
                        <i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div id="navbar-mobile" class="collapse navbar-collapse">
                <ul class="nav navbar-nav mr-auto float-left">

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                            <span class="avatar avatar-online">
                                <img src="/admin_inc/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
                                <i></i></span>
                            <span class="user-name">{{Auth::guard('admin')->user()->firstname}}
                                {{Auth::guard('admin')->user()->lastname}}</span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">
                                <i class="fa fa-user"></i> Edit Profile</a><a href="#" class="dropdown-item">
                                <i class="fa fa-envelope"></i> My Inbox</a><a href="#" class="dropdown-item">
                                <i class="fa fa-check-square"></i> Task</a><a href="#" class="dropdown-item">
                                <i class="fa fa-weixin"></i> Chats</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout',['id'=>Auth::guard('admin')->user()->id])}}" class="dropdown-item">
                                <i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</nav>

