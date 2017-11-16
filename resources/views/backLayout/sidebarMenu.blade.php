
<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="{{url('dashboard')}}" class="site_title"><i class="fa fa-briefcase"></i> <span>Admin System</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile">
    <div class="profile_pic">
      <img src="{{ URL::asset('/images/img.jpg') }}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{Sentinel::getUser()->first_name.' ' .Sentinel::getUser()->last_name }}</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br/>

  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <ul class="nav side-menu">
        <br>
        <br>
        <br>
        <li><a href="{{url('dashboard')}}">INICIO</a></li> 
        @if (Sentinel::getUser()->hasAnyAccess(['configuracion.*']))
        <li><a><i class="fa fa-cogs"></i>Configuración<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
        @if (Sentinel::getUser()->hasAnyAccess(['sedes.*']))
            <li><a href="{{route('sedes.index')}}">All Sedes</a></li>
        @endif
            <li><a href="{{route('categorias.index')}}">All Categorias</a></li>
            <li><a href="{{route('cajas.index')}}">All Cajas</a></li>
            <li><a href="{{route('estados.index')}}">All Estados</a></li>
            <li><a href="{{route('user.index')}}">All Usuarios</a></li>
            <li><a href="{{route('role.index')}}">All Roles</a></li>
            <li><a href="{{route('tipos.index')}}">All Tipos Persona</a></li>
            
          </ul>
        </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['promociones.*']))
        <li><a><i class="fa fa-bullhorn"></i>Promociones<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('promociones.index')}}">All Promociones</a></li>
            <li><a href="{{route('promociones.create')}}">New Promociones</a></li>
          </ul>
        </li>
      @endif
        {{--  @if (Sentinel::getUser()->hasAnyAccess(['estados.*']))
        <li><a><i class="fa fa-bank"></i>Estados<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('estados.index')}}">All Estados</a></li>
            <li><a href="{{route('estados.create')}}">New Estado</a></li>
          </ul>
        </li>
      @endif
        @if (Sentinel::getUser()->hasAnyAccess(['sedes.*']))
        <li><a><i class="fa fa-bank"></i>Sedes<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('sedes.index')}}">All Sedes</a></li>
            <li><a href="{{route('sedes.create')}}">New Sede</a></li>
          </ul>
        </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['user.*']))
        <li><a><i class="fa fa-users"></i>Users<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('user.index')}}">All users</a></li>
            <li><a href="{{route('user.create')}}">New user</a></li>
          </ul>
        </li>
      @endif  
      @if (Sentinel::getUser()->hasAnyAccess(['role.*']))
        <li><a><i class="fa fa-sitemap"></i>Roles<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('role.index')}}">All Roles</a></li>
            <li><a href="{{route('role.create')}}">New Role</a></li>
          </ul>
        </li>
      @endif  --}}
      @if (Sentinel::getUser()->hasAnyAccess(['facturacion.*']))
         <li><a><i class="fa fa-shopping-bag"></i>Facturacion<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('facturacion.index')}}">Facturas</a></li>
          </ul>
        </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['ventas.*']))
        <li><a><i class="fa fa-check-square-o"></i>Ventas<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('ventas.index')}}">Realizar Ventas</a></li>
          </ul>
        </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['compras.*']))
        <li><a><i class="fa fa-cart-plus"></i>Compras<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('compras.index')}}">Comprar Productos</a></li>
          </ul>
        </li>
      @endif
    @if (Sentinel::getUser()->hasAnyAccess(['personas.*']))
        <li><a><i class="fa fa-universal-access"></i>Personal<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
      @if (Sentinel::getUser()->hasAnyAccess(['clientes.*']))
              <li><a>Clientes<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="{{route('personas.index')}}">All Clientes</a>
                  </li>
                  <li><a href="{{route('personas.create')}}">New Cliente</a>
                  </li>
                </ul>
              </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['proveedores.*']))
              <li><a>Proveedores<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="{{route('personas.index')}}">All Proveedores</a>
                  </li>
                  <li><a href="{{route('personas.create')}}">New Proveedor</a>
                  </li>
                </ul>
              </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['empleados.*']))
              <li><a>Empleados<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="{{route('personas.index')}}">All Empleados</a>
                  </li>
                  <li><a href="{{route('personas.create')}}">New Empleado</a>
                  </li>
                </ul>
              </li>
      @endif
          </ul>
        </li> 
    @endif
      @if (Sentinel::getUser()->hasAnyAccess(['inventario.*']))
        <li><a><i class="fa fa-cube"></i>Inventario<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="tables.html">Productos</a></li>
          </ul>
        </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['notificaciones.*']))
        <li><a><i class="fa fa-commenting"></i>Notificaciones<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('notificaciones.index')}}">Ver Notificaciones</a></li>
            <li><a href="{{route('notificaciones.create')}}">Agregar Notificaciones</a></li>
          </ul>
        </li>
      @endif
      @if (Sentinel::getUser()->hasAnyAccess(['reports.*']))
        <li><a><i class="fa fa-bar-chart-o"></i>Reportes<span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{route('reports.index')}}">Reporte Uno</a></li>
            <li><a href="{{url('reports/dos')}}">Reporte Dos</a></li>
            <li><a href="{{url('reports/tres')}}">Reporte Tres</a></li>
            <li><a href="{{url('reports/cuatro')}}">Reporte Cuatro</a></li>
          </ul>
        </li>
      @endif
       
      </ul>
    </div>
    <!--<div class="menu_section">
      <h3>Live On</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="e_commerce.html">E-commerce</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="project_detail.html">Project Detail</a></li>
            <li><a href="contacts.html">Contacts</a></li>
            <li><a href="profile.html">Profile</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="page_403.html">403 Error</a></li>
            <li><a href="page_404.html">404 Error</a></li>
            <li><a href="page_500.html">500 Error</a></li>
            <li><a href="plain_page.html">Plain Page</a></li>
            <li><a href="login.html">Login Page</a></li>
            <li><a href="pricing_tables.html">Pricing Tables</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
              <li><a href="#level1_1">Level One</a>
              <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li class="sub_menu"><a href="level2.html">Level Two</a>
                  </li>
                  <li><a href="#level2_1">Level Two</a>
                  </li>
                  <li><a href="#level2_2">Level Two</a>
                  </li>
                </ul>
              </li>
              <li><a href="#level1_2">Level One</a>
              </li>
          </ul>
        </li>                  
        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li> 
      </ul>
    </div>-->

  </div>
  <!-- /sidebar menu -->

  <!-- /menu footer buttons -->
  <div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
  </div>
  <!-- /menu footer buttons -->
</div>
