<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header"INTERCONEXIONES</li>
            <li>
                <a href="/home">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>TecniScan</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Meykos</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Seguros GyT</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Gface</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>    
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Filas</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>    
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Credomatic</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>   
            <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Signos Vitales</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>   
             <li class="treeview">
                <a href="#">
                <i class="fa fa-cogs"></i> <span>Catàlogos</span> 
                <!--<i class="fa fa-angle-left pull-right">-->
                </i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/clientes"><i class="fa fa-users"></i>Admin. Clientes</a></li>
                    <li><a href="/users"><i class="fa fa-users"></i>Admin. Usuarios</a></li>
                    <li><a href="/roles"><i class="fa fa-level-up"></i> Admin. Roles</a></li>
                    <li><a href="/estados"><i class="fa fa-certificate"></i>Admin. Estados</a></li>
                </ul>
            </li>   
            <li>
                <a href="/auth/logout">
                <i class="fa fa-sign-out"></i> <span>Cerrar Sesión</span> 
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>