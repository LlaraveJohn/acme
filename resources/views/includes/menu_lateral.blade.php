<nav class="navbar-default navbar-static-side" role="navigation" style="margin-top: -20px">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" style="text-align: center;">
                    <span>
                        <a href="{{url('/')}}">
                            <img alt="image" width="90" height="100" src="{{asset('img/admin.png')}}">
                        </a>
                    </span>
                </div><br>
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold" style="color: #FFFFFF;">
                                    John Llarave
                                </strong>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    <a href="{{url('/')}}">
                        <img src="{{asset('img/admin.png')}}" width="40">
                    </a>
                </div>
            </li>

            <li>
                <a href="{{url('/')}}">
                    <i class="fas fa-truck-moving fa-fw"></i>
                    <span class="nav-label">
                        Veiculos
                    </span>
                </a>
            </li>

            <li>
                <a href="{{url('/driver')}}">
                    <i class="fas fa-user-circle fa-fw"></i>
                    <span class="nav-label">
                        Conductor
                    </span>
                </a>
            </li>

            <li>
                <a href="{{url('/owner')}}">
                    <i class="fas fa-users fa-fw"></i>
                    <span class="nav-label">
                        Propietario
                    </span>
                </a>
            </li>

            <li>
                <a href="{{url('/report')}}">
                    <i class="fas fa-laptop-house fa-fw"></i>
                    <span class="nav-label">
                        Reporte
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>