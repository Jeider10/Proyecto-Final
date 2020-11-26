<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home.index') }}"><i class="fa fa-home"></i><span>Inicio</span></a>
</li>

<li class="{{ Request::is('configEmpresas*') ? 'active' : '' }}">
    <a href="{{ route('configEmpresas.index') }}"><i class="fa fa-cogs"></i><span>Configuracion De La Empresa</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-users"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('proveedores*') ? 'active' : '' }}">
    <a href="{{ route('proveedores.index') }}"><i class="fa fa-address-card"></i><span>Proveedores</span></a>
</li>

<li class="{{ Request::is('ciudads*') ? 'active' : '' }}">
    <a href="{{ route('ciudads.index') }}"><i class="fa fa-building"></i><span>Ciudad</span></a>
</li>

<li class="{{ Request::is('articulos*') ? 'active' : '' }}">
    <a href="{{ route('articulos.index') }}"><i class="fa fa-shopping-basket"></i><span>Articulos</span></a>
</li>

<li class="{{ Request::is('pedidos*') ? 'active' : '' }}">
    <a href="{{ route('pedidos.index') }}"><i class="fa fa-truck"></i><span>Pedidos</span></a>
</li>

<li class="{{ Request::is('facturas*') ? 'active' : '' }}">
    <a href="{{ route('facturas.index') }}"><i class="fa fa-list-ol"></i><span>Facturas</span></a>
</li>

<li class="{{ Request::is('detalleFacturas*') ? 'active' : '' }}">
    <a href="{{ route('detalleFacturas.index') }}"><i class="fa fa-stack-exchange"></i><span>Detalles De Facturas</span></a>
</li>

<li class="{{ Request::is('tipoArticulos*') ? 'active' : '' }}">
    <a href="{{ route('tipoArticulos.index') }}"><i class="fa fa-sort-alpha-asc"></i><span>Tipo Articulos</span></a>
</li>

<li class="{{ Request::is('devolucions*') ? 'active' : '' }}">
    <a href="{{ route('devolucions.index') }}"><i class="fa fa-plane"></i><span>Devoluciones</span></a>
</li>

