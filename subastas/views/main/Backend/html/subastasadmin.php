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
					Administrador de Subastas
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">#Lote *</span>
					<input id="txtNombreSubasta" class="input100" type="text" name="name" placeholder="Ingresar lote">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Fecha Inicio *</span><br>
					<input type="date" id="txtFechaInicio" name="txtFechaInicio" max="2050-01-02"><br>
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Hora Inicio</span><br>
					<input type="time" id="dpFechaInicio" name="dpFechaInicio" name="dpFechaInicio">
				</div>
			
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Fecha Fin *</span><br>
					<input type="date" id="txtFechaFin" name="txtFechaFin" min="2019-01-01"><br>
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Hora Fin</span><br>
					<input type="time" id="dpFechaFin" name="dpFechaFin">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Empresa *</span>
					<input id="btnAgregaEmpresa" class="input100" type="text" name="cmbEmpresas" placeholder="Ingresar Empresa">
				</div>

				
					<div id="divTipoSubastas" class="wrap-contact100-form-radio">
						<span class="label-input100">Tipo de subasta</span>

						<div id="divTipoSubastas" class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Abierta
							</label>
						</div>

						<div id="divTipoSubastas" class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								Cerrada
							</label>
						</div>

					</div>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Incremento *</span>
					<input id="txtIncremento" name="txtIncremento" class="input100" type="text" placeholder="Ingresar Incremento">
				</div>
				

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Ofertas por Usuario *</span>
					<input class="input100" type="text" id="txtNumPujas" name="txtNumPujas" placeholder="Oferta">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Autos ganados por usuarios</span>
					<input class="input100" type="text" id="txtAutosGanados" name="txtAutosGanados" placeholder="Cantidad">
				</div>

				<div id="btnGuardarSubasta" class="container-contact100-form-btn">
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