<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="{{route('admin')}}"><img src="{{asset('backend/img/admin.png')}}" class="img-circle" width="80"></a></p>
            <h5 class="centered">Admin</h5>
            <li class="mt">
                <a class="active" href="{{route('admin')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span> Banner </span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('banner')}}">View banner</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Team</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('admin.team')}}">View Team</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Emails</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('admin.contactemail')}}">Contact Us</a></li>
                    <li><a href="{{route('admin.webemail')}}">Request for Website</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
