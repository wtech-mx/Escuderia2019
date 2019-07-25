<?php 
include("estilos-congig.html");
 ?>


	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Iniciar Sesion
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100 validate" id="loginMail"  type="email"  placeholder="email">
					<span class="focus-input100">
					</span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input id="loginPassword" class="input100 validate" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div id="btnLogin" class="container-login100-form-btn">
					<button class="login100-form-btn">
						Ingresar
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

		</div>
	</div>

	<?php 
include("script-config.php");
	 ?>