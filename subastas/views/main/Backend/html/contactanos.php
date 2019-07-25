<?php 
include("inicio.php");
include("estilos-form.php")
 ?>

<body class="skin-default-dark fixed-layout">

        <div id="main-wrapper">

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Usuarios</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                                <li class="breadcrumb-item active">Usuarios</li>
                            </ol>
                            <a class="btn btn-success d-none d-lg-block m-l-15" href="https://wrappixel.com/templates/elegant-admin/"> </a>
                            
                        </div>
                    </div>
                </div>

                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">Needed Services *</span>
                    <div>
                        <select class="js-select2" name="service">
                            <option>Nuevas</option>
                            <option>Atendidas</option>
                            <option>Todas</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Buscar
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
            </div>

        </div>

    </div>
</body>

<?php 
include("script-form.php")
?>