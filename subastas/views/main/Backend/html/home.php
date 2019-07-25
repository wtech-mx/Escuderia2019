    <?<?php 
        include("estilos-config.php");
     ?>    

        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="img-circle" width="30"></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>

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
                            <a class="waves-effect waves-dark" href="index.php" aria-expanded="false">
                            <i class="fa fa-home"></i>
                            <span class="hide-menu">inicio</span>
                            </a>
                        </li>
                        <li class="<?php echo $pagina == 'user_admin' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="user_admin.php" aria-expanded="false">
                            <i class="fa fa-user-circle-o"></i>
                            <span class="hide-menu">Usuarios</span>
                            </a>
                        </li>
                        <li class="<?php echo $pagina == 'subastasadmin' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="subastasadmin.php" aria-expanded="false">
                            <i class="fa fa-legal"></i>
                            <span class="hide-menu">Administrador Subastas</span></a>
                        </li>
                        <li class="<?php echo $pagina == 'altaautos' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="altaautos.php" aria-expanded="false">
                            <i class="fa fa-car"></i>
                            <span class="hide-menu">Administrador Autos</span></a>
                        </li>
                        <li class="<?php echo $pagina == 'resultados' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="resultados.php" aria-expanded="false">
                            <i class="fa fa-check-square-o"></i>
                            <span class="hide-menu"></span>Resultados Subastas</a>
                        </li>
                        <li class="<?php echo $pagina == 'cotizaciones' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="cotizaciones.php" aria-expanded="false">
                            <i class="fa fa-file-text"></i>
                            </span>Cotizacion</a>
                        </li>
                       <li class="<?php echo $pagina == 'homeadmin' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="homeadmin.php" aria-expanded="false">
                            <i class="fa fa-pencil"></i>
                            <span class="hide-menu"></span>Administrador Home</a>
                    </li>
                        <li class="<?php echo $pagina == 'contactanos' ? 'active' : ''; ?>"> 
                            <a class="waves-effect waves-dark" href="contactanos.php" aria-expanded="false">
                                <a class="waves-effect waves-dark" href="contactanos.php" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="hide-menu"></span>Contactanos</a>
                    </li>
                        

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


    <?php 
    include("script-config.php");
    ?>