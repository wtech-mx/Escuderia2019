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
                    Características del auto
                </span>

                 <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Marca *</span>
                    <div>
                        <select class="js-select2" id="cbMarcaAuto" name="cbMarcaAuto">
                            <option>Marca</option>
                            <option>eCommerce Bussiness</option>
                            <option>UI/UX Design</option>
                            <option>Online Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Modelo *</span>
                    <div>
                        <select class="js-select2" id="cbModeloAuto" name="cbModeloAuto">
                            <option>Modelo</option>
                            <option>eCommerce Bussiness</option>
                            <option>UI/UX Design</option>
                            <option>Online Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Color *</span>
                    <div>
                        <select class="js-select2" id="cbColorAuto" name="cbColorAuto">
                            <option>Color</option>
                            <option>eCommerce Bussiness</option>
                            <option>UI/UX Design</option>
                            <option>Online Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Transmisión *</span>
                    <div>
                        <select class="js-select2" id="cbTipoTransmisionAuto" name="cbTipoTransmisionAuto">
                            <option>Automatico</option>
                            <option>Manual</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
                
                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <div>
                        <select class="js-select2" id="cbAnioAuto" name="cbAnioAuto">
                         <option value="0">Año</option>
                         <?php  for($i=1990;$i<=2020;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">KM</span>
                    <input class="input100" type="text" name="cbKMAuto" id="cbKMAuto" placeholder="Ingresa km">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">No. Serie</span>
                    <input class="input100" type="text" name="txtNoSerie" id="txtNoSerie" placeholder="Ingresa no. serie">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Placa</span>
                    <input class="input100" type="text" name="txtPlaca" id="txtPlaca" placeholder="Ingresa placa">
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Precio basado en *</span>
                    <div>
                        <select class="js-select2" name="cbMotivoPrecio" id="cbMotivoPrecio">
                            <option>Basado valuacion tecnica</option>
                            <option>Fijado por el cliente</option>
                            <option>Precio en libro azul</option>
                            <option>Depreciacion del activo</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Estado *</span>
                    <div>
                        <select class="js-select2" id="cbEstadoAuto" name="cbEstadoAuto">
                            <option>Baja California</option>
                            <option>Manual</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Precio</span>
                    <input class="input100" type="text" name="precioAuto" id="precioAuto" placeholder="Precio">
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Ciudad *</span>
                    <div>
                        <select class="js-select2" name="cbCiudadAuto" id="cbCiudadAuto">
                            <option>Ensenada</option>
                            <option>Manual</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            
                <div class="wrap-input100 input100-select bg1">
                    <span class="label-input100">Caracteristicas *</span>
                    <div>
                        <select class="js-select2" id="cbFeaturesAutos">
                            <option>Seleccione</option>
                            <option>eCommerce Bussiness</option>
                            <option>UI/UX Design</option>
                            <option>Online Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                    <span class="label-input100">Descripcion</span>
                    <textarea id="txtaDescripcionAuto" class="input100" name="message" placeholder="Ingrese descipcion..."></textarea>
                </div>
                

                <div class="wrap-input100 input100-select bg1">
                    <form enctype="multipart/form-data" action="uploader.php" method="POST">
                        <input id="fotoAuto" name="uploadedfile" type="file" />
                        <input id="btnUpload" type="submit" value="Subir archivo" />
                    </form>
                </div>
                
                <span class="contact100-form-title">
                    Datos de contacto
                </span>
                
                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100" data-validate="Please Type Your Name">
                    <span class="label-input100">Nombre *</span>
                    <input class="input100" type="text" name="nombreContacto" id="nombreContacto" placeholder="Ingresa nombre">
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                    <span class="label-input100">Correo *</span>
                    <input class="input100" type="text" name="correoContacto" id="correoContacto" placeholder="Ingresa correo">
                </div>

                <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                    <span class="label-input100">Telefono</span>
                    <input class="input100" type="text" name="telefonoContacto" id="telefonoContacto" placeholder="Ingresa telefono">
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <span class="label-input100">Celular</span>
                    <input class="input100" type="text" name="celularContacto" id="celularContacto" placeholder="Ingresa celular">
                </div>

                <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                    <span class="label-input100">Informacion personal</span>
                    <textarea class="input100" id="infoContacto" name ="infoContacto" placeholder="Ingrese informacion..."></textarea>
                </div>

                <div id="btnGuardarCatalogo" class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Guardar
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