<h2>Administrador de usuarios</h2>
<div class="registroMain row">

    <form class="registerForm">
        <!-- INPUT NOMBRE -->
        <div class="row">
            <div class="input-field col s12">
                <input name="nombre" id="registroNombre" type="text" class="validate">
                <label for="nombre">Nombre</label>
            </div>
        </div>
        <!-- INPUT APELLIDO PATERNO -->
        <div class="row">
            <div class="input-field col s12">
                <input name="appaterno" id="registroApPaterno" type="text" class="validate">
                <label for="appaterno">Apellido Paterno</label>
            </div>
        </div>
        <!-- INPUT APELLIDO MATERNO -->
        <div class="row">
            <div class="input-field col s12">
                <input name="apmaterno" id="registroApMaterno" type="text" class="validate">
                <label for="apmaterno">Apellido Materno</label>
            </div>
        </div>
        <!-- INPUT APELLIDO MATERNO -->
        <div class="row">
            <div class="input-field col s12">
                <input name="email" id="registroMail" type="email" class="validate" onblur="validamail(this);">
                <label for="email">Correo Electrónico:</label>
                <div id="divValidaCorreo" class="validaRegistro" style="display:none" >El correo ya esta registrado</div>
            </div>
        </div>
        <!-- INPUT PASSWORD -->
        <div class="row">
            <div class="input-field col s12">
                <input name="password" id="registroPassword" type="password" class="validate" onkeyup="validaStrongPassword(this);">
                <label for="password">Contraseña:</label>
                <div id="divValidaPassword" class="validaRegistro" style="display:none" >El password debe contener al menos una letra mayúscula, al menos una letra minúscula, al menos un número, al menos un caracter especial ([! @ # $ % ^ & *), y una longitud mínima de 8 caracteres </div>
            </div>
        </div>
        <!-- INPUT CONFIRMA PASSWORD -->
        <div class="row">
            <div class="input-field col s12">
                <input name="repetirPass" id="registroRepetirPass" type="password" class="validate" onkeyup="validaRepetirPassword(this);">
                <label for="password">Repetir contraseña:</label>
                <div id="divValidaRepetirPassword" class="validaRegistro" style="display:none" >El password no coincide </div>
            </div>

        </div>
        <!-- ERROR PASSWORD-->
        <!-- <div class="row divRegistro registro divErrorPassword">
            El password no coincide
        </div> -->
        <!-- INPUT FECHA NACIMIENTO -->
        <div class="row divRegistro registro" >
            <label class="col s12">Fecha de nacimiento</label>
            <select id="dobday" class="col s3"></select>
            <select id="dobmonth" class="col s3"></select>
            <select id="dobyear" class="col s3"></select>
        </div>
        <!-- INPUT APELLIDO MATERNO -->
        <div class="row">
            <div class="input-field col s12">
                <input name="telefono" id="registroTelefono" type="text" class="validate" >
                <label for="telefono">Teléfono</label>
            </div>
        </div>
        <!-- TEMAS DE INTERES -->
        <div id="divPreferencias" class="row">
            <label for="chkPref" >Seleccione al menos un tema de su interés:</label>
        </div>
        <!-- INPUT PLACA AUTO -->
        <div class="row divRegistro registro">

            <div class="col s12"  style="display:none">
                Terminación de la placa de su auto:
                <div class="input-field inline">
                    <input name="placa" id="registroPlaca" >
                </div>
            </div>

        </div>
        <!-- INPUT CONFIRMACION -->
        <div class="divRegistro registro marginTop20 marginLeft35">
            <input type="checkbox" name="eula" id="registroEULA" />
            <label for="registroEULA">Estoy de acuerdo con los términos y condiciones</label>

        </div>
        <!-- BOTON TERMINOS Y CONDICIONES -->
        <div class="divRegistro registro marginTop20">
            <div id="btnEula">
                Consulta términos y contendiciones
            </div>
        </div>
        <!-- BOTON GUARDAR -->
        <div class="divRegistro registro">
            <div id="btnGuardar" class="waves-effect waves-light btn">
                Guardar
            </div>
        </div>

    </form>

    <div class="divRegistro registro divError">

    </div>

</div>
