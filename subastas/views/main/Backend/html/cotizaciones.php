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
    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Cotizaciones
                </span>

                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                    <span class="label-input100">Nombre *</span>
                    <input class="input100" type="text" name="name" placeholder="Nombre">
                </div>

               <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <span class="label-input100">Fecha Inicio *</span><br>
                    <input type="date" name="bday" max="2050-01-02"><br>
                </div>

                <div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
                    <span class="label-input100">Fecha Final *</span><br>
                    <input type="date" name="bday" max="2050-01-02"><br>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Bucar
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>

                <div id="divAdminHomeContenido">

  <table class="table" id="listaUsuarios">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Modelo</th>
        <th scope="col">Detalle</th>
        <th scope="col">Fecha</th>
        <th scope="col">Estatus</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
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