<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Bienvenido al portal del Afiliacion
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Usuario</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32" style="Font-color : 'blue'">
						<div>
							<a href="<?= base_url() ?>index.php/login" class="txt1">
								Registrarse
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Iniciar Sesion 
						</button>
					</div>

				</form>
				
				<div class="login100-more" style="background-image: url('<?php echo base_url();?>assets/login/img/013.jpg');">
				</div>
			</div>
		</div>
	</div>
	