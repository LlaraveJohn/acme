<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <span class="m-r-sm text-muted welcome-message">Prueba técnica</span>
        </li>

        <li>
            <a>
                <form id="logout-form" action="#" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-link" value="Salir"> <i class="fas fa-sign-out-alt"></i>
                </form>
            </a>
        </li>
    </ul>
</nav>