<!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="<?php echo base_url(); ?>index.php/persona">Sistema Admin</a>
                </h1>
                <span>SA</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">                
                <li>
                    <a href="#usuariosSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Usuarios
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="usuariosSubmenu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Persona/create">Agregar Nuevo</a>
                        </li>

                            <li>
                            <a href="<?php echo base_url(); ?>index.php/Persona/listar">Lista de Usuarios</a>
                        </li>
                                                            
                </ul>
                    
		         <li>
                    <a href="#clientesSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        Clientes
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="clientesSubmenu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Cliente/create">Agregar Nuevo</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Cliente/index">Lista de Clientes</a>
                            </li>

                        
                    </ul>

                   
                         <li>
                    <a href="#ventasSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-cart-plus"></i>
                        Ventas
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="ventasSubmenu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Ventas/create">Registrar Venta</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url(); ?>index.php/Ventas/listarVentas">Historial de Ventas</a>
                        </li>
                    </ul>
                </li>
                     
           
        </nav>