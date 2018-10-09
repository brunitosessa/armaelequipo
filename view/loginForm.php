<div class="w3-container">
	<!-- Formulario Login -->
	<div id="id01" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-teal" style="max-width:600px">
		
			<div class="w3-center"><br>
				<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-text-black w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
				<div class="imgcontainer w3-center">
					<img src="../images/logo.png" style="width:150px">
				</div>
			</div>

			<div class="w3-section" ng-app="loginApp" ng-controller="loginController">

				<label><b>E-mail</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese E-mail" ng-model="email" name="email" required>
				<label><b>Password</b></label>
				<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pass" ng-model="password" required>

				<button class="w3-button w3-block w3-green w3-section w3-padding" id="btn-login" >Login</button>
				<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
			</div>

			<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
				<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-light-grey">Cancel</button>
				<span class="w3-right w3-padding w3-hide-small">Olvidaste tu <a href="#">contraseña?</a></span>
			</div>

		</div>
	</div>

	<!-- Formulario Contacto -->
	<div id="id02" class="w3-modal">
		<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-blue-grey" style="max-width:600px">
		
			<div class="w3-center"><br>
				<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-text-black w3-xlarge w3-hover-light-grey w3-display-topright" title="Close Modal">&times;</span>
				<div class="imgcontainer w3-center">
					<img src="../images/logo.png" style="width:80px">
				</div>
			</div>

			<form class="w3-container" action="/action_page.php">
			<div class="w3-section">
				<label><b>Compejo</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese nombre del bar" name="bar" required>
				<label><b>Nombre y apellido</b></label>
				<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese nombre y apellido" name="nya" required>
				<label><b>Telefono de contacto</b></label>
				<input class="w3-input w3-border" type="text" placeholder="Ingrese telefono de contacto" name="nya" required>
				<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Enviar solicitud de ingreso</button>
			</div>
			</form>

		</div>
	</div>
</div>
