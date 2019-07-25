
        <aside class="left-sidebar">
            <div class="d-flex no-block nav-text-box align-items-center">
                <span><img src="../assets/images/logo-icon.png" alt="elegant admin template"></span>
                <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
                <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=inicio" aria-expanded="false">
                            <i class="fa fa-home"></i>
                            <span class="hide-menu">inicio</span>
                            </a>
                        </li>
                        <li class="<?php echo $pagina == 'user_admin' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=user_admin" aria-expanded="false">
                            <i class="fa fa-user-circle-o"></i>
                            <span class="hide-menu">Usuarios</span>
                            </a>
                        </li>
                        <li class="<?php echo $pagina == 'subastasadmin' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=subastasadmin" aria-expanded="false">
                            <i class="fa fa-legal"></i>
                            <span class="hide-menu">Administrador Subastas</span></a>
                        </li>
                        <li class="<?php echo $pagina == 'altaautos' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=altaautos" aria-expanded="false">
                            <i class="fa fa-car"></i>
                            <span class="hide-menu">Administrador Autos</span></a>
                        </li>
                        <li class="<?php echo $pagina == 'resultados' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=resultados" aria-expanded="false">
                            <i class="fa fa-check-square-o"></i>
                            <span class="hide-menu"></span>Resultados Subastas</a>
                        </li>
                        <li class="<?php echo $pagina == 'cotizaciones' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=cotizaciones" aria-expanded="false">
                            <i class="fa fa-file-text"></i>
                            </span>Cotizacion</a>
                        </li>
                       <li class="<?php echo $pagina == 'homeadmin' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=homeadmin" aria-expanded="false">
                            <i class="fa fa-pencil"></i>
                            <span class="hide-menu"></span>Administrador Home</a>
                    </li>
                        <li class="<?php echo $pagina == 'contactanos' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="?p=contactanos" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="hide-menu"></span>Contactanos</a>
                    </li>
                        

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

   

    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard1.js"></script>