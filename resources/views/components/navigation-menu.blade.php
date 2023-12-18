<style>
    .custom-menu-color {
        background-color:black 
    }

    .custom-text1-color {
        color:lightcyan; 
    }

    .custom-menu-item {
        color:lightcyan !important; 
    }

    .custom-menu-item:hover {
        color:darksalmon !important; 
    }
    #texto{
        color:darkgoldenrod!important;
    }
</style>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark custom-menu-color" id="sidenavAccordion">
        <div class="sb-sidenav-menu custom-menu-color">
            <div class="nav">
                <div class="sb-sidenav-menu-heading custom-text-color " id = "texto" >Inicio</div>
                <a class="nav-link custom-menu-item" href="{{ route('panel') }}">
                    <div class="sb-nav-link-icon custom-menu-item"><i class="fas fa-tachometer-alt"></i></div>
                    PANEL
                </a>

                <div class="sb-sidenav-menu-heading custom-text-color" id = "texto"> Modulos</div>

                @can('ver-compra')
                <a class="nav-link collapsed custom-menu-item" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCompras" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-store"></i></div>
                    COMPRAS
                    <div class="sb-sidenav-collapse-arrow custom-menu-item"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCompras" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @can('ver-compra')
                        <a class="nav-link custom-menu-item" href="{{ route('compras.index') }}">VER</a>
                        @endcan
                        @can('crear-compra')
                        <a class="nav-link custom-menu-item" href="{{ route('compras.create') }}">CREAR</a>
                        @endcan
                    </nav>
                </div>
                @endcan

                @can('ver-venta')
                <a class="nav-link collapsed custom-menu-item " href="#" data-bs-toggle="collapse" data-bs-target="#collapseVentas" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon custom-menu-item"><i class="fa-solid fa-cart-shopping"></i></div>
                    VENTAS
                    <div class="sb-sidenav-collapse-arrow custom-menu-item"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVentas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @can('ver-venta')
                        <a class="nav-link custom-menu-item " href="{{ route('ventas.index') }}">VER</a>
                        @endcan
                        @can('crear-compra')
                        <a class="nav-link custom-menu-item" href="{{ route('ventas.create') }}">CREAR</a>
                        @endcan
                    </nav>
                </div>
                @endcan

                @can('ver-categoria')
                <a class="nav-link custom-menu-item " href="{{ route('categorias.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-tag "></i></div>
                    CATEGORIAS
                </a>
                @endcan

                @can('ver-presentacione')
                <a class="nav-link custom-menu-item" href="{{ route('presentaciones.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item"><i class="fa-solid fa-box-archive"></i></div>
                    PRESENTACIONES
                </a>
                @endcan

                @can('ver-marca')
                <a class="nav-link custom-menu-item " href="{{ route('marcas.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-bullhorn"></i></div>
                    MARCAS
                </a>
                @endcan

                @can('ver-producto')
                <a class="nav-link custom-menu-item " href="{{ route('productos.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-brands fa-shopify"></i></div>
                    PRODUCTOS
                </a>
                @endcan

                @can('ver-cliente')
                <a class="nav-link custom-menu-item " href="{{ route('clientes.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-users"></i></div>
                    CLIENTES
                </a>
                @endcan

                @can('ver-proveedore')
                <a class="nav-link custom-menu-item " href="{{ route('proveedores.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-user-group"></i></div>
                    PROVEEDORES
                </a>
                @endcan

                @hasrole('administrador')
                <div class="sb-sidenav-menu-heading" id = "texto">OTROS</div>
                @endhasrole

                @can('ver-user')
                <a class="nav-link custom-menu-item " href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-user"></i></div>
                    USUARIOS
                </a>
                @endcan

                @can('ver-role')
                <a class="nav-link custom-menu-item " href="{{ route('roles.index') }}">
                    <div class="sb-nav-link-icon custom-menu-item "><i class="fa-solid fa-person-circle-plus"></i></div>
                    ROLES
                </a>
                @endcan


            </div>
        </div>
        <div class="sb-sidenav-footer custom-text1-color">
                    <div class="small">Bienvenido a nuestro sistema de ventas </div>
                    {{ auth()->user()->name }}
        </div>
    </nav>
</div>