<!--header start-->
<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="{{route('admin')}}" class="logo"><b>AL-Muhsiy<span>Group</span></b></a>
    <!--logo end-->

    <div class="top-menu">
        <ul class="nav pull-right top-menu">

                <li></li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <a href="{{route('admin.logout')}}" class="btn btn-theme pt-2" type="submit" style="margin-top: 15px">Logout</a>
            </form>
                </li>
        </ul>
    </div>
</header>
<!--header end-->
