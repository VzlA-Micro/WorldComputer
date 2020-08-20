<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- FONTAWESOME -->
    <link href="<?= ROOT; ?>vendor/fortawesome/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- JQUERY -->
    <script src="<?= ROOT; ?>node_modules/jquery/dist/jquery.js"></script>
    
    <!-- SWEETALERT -->
    <link rel="stylesheet" href="<?= ROOT; ?>node_modules/sweetalert2/dist/sweetalert2.css">
    <script src="<?= ROOT; ?>node_modules/sweetalert2/dist/sweetalert2.js"></script>

    <!-- BOOTSTRAP -->
    <link href="<?= ROOT; ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- BOOTADMIN -->
    <link href="<?= ROOT; ?>public/assets/css/bootadmin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <!-- DATATABLE -->
    <link href="<?= ROOT; ?>vendor/datatables/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">

    <title>WORLD & COMPUTER</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="<?= ROOT;?>"><i class="fas fa-desktop"></i> World & Computer</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Usuario</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
	<!-- MENU -->
<div class="d-flex">
	<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        <li><a href="<?= ROOT;?>Usuario"><i class="fa fa-fw fa-user"></i> Usuarios</a></li>
        <li><a href="<?= ROOT;?>Empleado"><i class="fa fa-fw fa-wrench"></i> Empleados</a></li>
        <li><a href="<?= ROOT;?>Cliente"><i class="fa fa-fw fa-users"></i> Clientes</a></li>
        <li><a href="<?= ROOT;?>Proveedor"><i class="fa fa-fw fa-truck"></i> Proveedores</a></li>
        <li><a href="<?= ROOT;?>Inventario"><i class="fa fa-fw fa-chart-area"></i> Inventario</a></li>
        <li><a href="<?= ROOT;?>Compra"><i class="fa fa-fw fa-shopping-cart"></i>Compras</a></li>
        <li><a href="<?= ROOT;?>Venta"><i class="fa fa-fw fa-dollar-sign"></i> Ventas</a></li>
        <li><a href="<?= ROOT;?>Venta/Crear"><i class="fa fa-fw fa-shopping-basket"></i> Caja</a></li>
        <li><a href="<?= ROOT;?>Reporte"><i class="fa fa-fw fa-calendar"></i> Reportes</a></li>
        <li>
            <a href="#sm_expand_1" data-toggle="collapse">
                <i class="fa fa-fw fa-sitemap"></i> Gestion de Productos
            </a>
            <ul id="sm_expand_1" class="list-unstyled collapse">
                <li><a href="<?= ROOT;?>Producto"><i class="fa fa-fw fa-bookmark"></i> Resumen</a></li>
                <li><a href="<?= ROOT;?>Categoria"><i class="fa fa-fw fa-tag"></i> Categoría</a></li>
            </ul>
        </li>
        <li>
            <a href="#sm_expand_2" data-toggle="collapse">
                <i class="fa fa-fw fa-globe"></i> Permisos
            </a>
            <ul id="sm_expand_2" class="list-unstyled collapse">
                <li><a href="<?= ROOT;?>Rol"><i class="fa fa-fw fa-address-card"></i> Roles</a></li>
            </ul>
        </li>
    </ul>
</div>