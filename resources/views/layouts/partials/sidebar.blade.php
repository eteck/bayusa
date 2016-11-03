<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('recursos/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><i class="fa fa-industry"></i>  OPCIONES</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="{{ url('backoffice') }}">
                    <i class='fa fa-table'></i> <span>Catalogo</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> 
                        <a href="{{ route('admin.category.index') }}">
                            <i class="fa fa-list-alt"></i> 
                            Categorias
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.product.index') }}">
                        <i class="fa fa-suitcase"></i> Productos</a>
                    </li>
                     <li>
                        <a href="{{ route('admin.order.index') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Pedidos</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class='fa fa-th-large'></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> 
                        <a href="{{ route('admin.user.index') }}">
                            <i class="fa fa-users"></i> 
                            Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.order.index') }}">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i> Roles</a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
