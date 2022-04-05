<?php require 'Views/layout/header.php'; ?>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="<?= constant('URL') ?>/public/assets/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php require 'Views/layout/navbar.php'; ?>
        
        
        <!-- Main Sidebar Container -->
        <?php require 'Views/layout/sidebar.php'; ?>
        
        
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $this->title ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Materias</li>
                            <li class="breadcrumb-item active"><?= $this->title ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php require 'Views/layout/copyright.php'; ?>
<?php require 'Views/layout/footer.php'; ?>