<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= constant('URL') ?>/public/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="<?= constant('URL') ?>/public/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="<?= constant('URL') ?>/home" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                        Alumnos
                        <i class="fas fa-angle-left right"></i>
                        <!-- <span class="badge badge-info right">6</span> -->
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/nuevoalumno" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nuevo alumno</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/student" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Listado de alumnos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>
                        Materias
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/nuevamateria" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nueva materia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/materia" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Listado de materias</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                        Grupos
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/nuevogrupo" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nuevo grupo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/group" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Listado de grupos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Usuarios
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/nuevousuario" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Nuevo usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= constant('URL') ?>/user" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Listado de usuario</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>