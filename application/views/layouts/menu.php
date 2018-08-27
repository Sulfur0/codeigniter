<!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="<?php echo base_url(); ?>">Sistema Admin</a>
                </h1>
                <span>SA</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="<?php echo base_url(); ?>">
                        <i class="fas fa-th-large"></i>
                        Noticias y boletines
                    </a>
                </li>
                <li>
                    <a href="#usuariosSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Usuarios
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="usuariosSubmenu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Persona">Agregar Nuevo</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Persona/list">Lista de Usuarios</a>
                        </li>
                    </ul>
                </li>              
            </ul>
        </nav>