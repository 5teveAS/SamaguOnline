<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <a href="/home">
                    <div>
                        <img src="{{asset('assets/images/world-logo.png')}}" class="logo-icon" alt="logo icon">
                    </div>
                </a>
                <a href="/home">
                    <div>
                        <h4 class="logo-text">Samagu S.A.</h4>
                    </div>
                </a>

                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="menu-label">Bienvenido a SAMAGU ONLINE</li>
                <ul class="navbar-nav ms-auto">

                <li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                        </div>
                        <div class="menu-title">Módulos de informacion</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('customer.datatable') }}"><i class="bx bx-right-arrow-alt"></i>Clientes</a>
                        </li>
                        <li> <a href="{{route('employee.datatable')}}"><i class="bx bx-right-arrow-alt"></i>Empleados</a>
                        </li>
                        <li> <a href="{{route('inventory.datatable') }}"><i class="bx bx-right-arrow-alt"></i>Inventario</a>
                        </li>
                        <li> <a href="{{route('supplier.datatable') }}"><i class="bx bx-right-arrow-alt"></i>Proveedores</a>
                        </li>
                        <li> <a href="{{route('project.datatable') }}"><i class="bx bx-right-arrow-alt"></i>Proyectos</a>
                        </li>
                        <li> <a href="{{route('expense.datatable') }}"><i class="bx bx-right-arrow-alt"></i>Gastos</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{ url('calendar/index') }}">
                        <div class="parent-icon"><i class="fadein animated bx bx-calendar"></i>
                        </div>
                        <div class="menu-title">Calendario</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('bill.datatable') }}">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-task"></i>
                        </div>
                        <div class="menu-title">Facturas Emitidas</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('calculator')}}">
                        <div class="parent-icon"><i class="lni lni-calculator"></i>
                        </div>
                        <div class="menu-title">Calculadora de Liquidaciones</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('user.datatable') }}">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-user"></i>
                        </div>
                        <div class="menu-title">Usuarios</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('databackup')}}">
                        <div class="parent-icon"><i class="bx bxs-disc"></i>
                        </div>
                        <div class="menu-title">Respaldo de Datos</div>
                    </a>
                </li>
                <li class="menu-label">Paginas</li>
                <li>
                    <a href="{{route('auth.profile')}}">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        <div class="menu-title">Perfil de Usuario</div>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <div class="parent-icon"><i class="bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Página informativa</div>
                    </a>
                </li>
            <!--end navigation-->
        </div>
