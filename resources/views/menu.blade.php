<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="/" class="navbar-brand">
            <img src="images/inventario2.png" alt="" class="d-inline-block align-top" height="30" width="30" />
        </a>
        
    
        <div class="navbar-nav">
            <a href="/" class="nav-item nav-link @yield('menu_home')">Home</a>
            <a href="/proveedores" class="nav-item nav-link @yield('menu_proveedores')">Proveedores</a>
            <a href="/productos" class="nav-item nav-link @yield('menu_productos')">Productos</a>
            <a href="/facturacion" class="nav-item nav-link @yield('menu_facturacion')">Facturación</a>
        </div>
    </div>    
</nav>