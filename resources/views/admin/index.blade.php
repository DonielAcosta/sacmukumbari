<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Agrega aquí tus estilos CSS -->
    <style>
        /* Estilos del menú lateral */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #3498db; /* Cambiamos el color del menú a azul */
            padding-top: 20px;
            color: white;
        }
        
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        
        .sidebar a:hover {
            background-color: #2980b9; /* Cambiamos el color de fondo al pasar el mouse */
        }
        
        .submenu ul {
            display: none; /* Ocultamos inicialmente los submenús */
        }

        .submenu.active ul {
            display: block; /* Mostramos el submenú cuando la opción está activa */
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                      <a href="{{ route('crear') }}">Crear Nuevo</a>
                    <ul>
                        <li><a href="#">Panel 1</a></li>
                        <li><a href="#">Panel 2</a></li>
                        <!-- Agrega más paneles según sea necesario -->
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a href="form-input-groups.html">Input Groups </a></li>
                        <li><a href="form-horizontal.html">Horizontal Form </a></li>
                        <li><a href="form-vertical.html"> Vertical Form </a></li>
                        <li><a href="form-mask.html"> Form Mask </a></li>
                        <li><a href="form-validation.html"> Form Validation </a></li>
                        <li><a href="form-select2.html">Form Select2 </a></li>
                        <li><a href="form-fileupload.html">File Upload </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<script>
    // Script para activar el submenú al hacer clic en la opción "Dashboard"
    document.addEventListener('DOMContentLoaded', function() {
        var dashboardMenu = document.querySelector('.submenu:first-child');

        dashboardMenu.addEventListener('click', function() {
            dashboardMenu.classList.toggle('active');
        });
    });
</script>

</body>
</html>
