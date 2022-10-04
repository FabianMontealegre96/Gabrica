<?php 
require "header.php";
?>
<body>
	<section id="SectionForm">
	<div id='contieneImg'>
		<center>
			<img src="assets/img/KV.png" id='perrito' >
			<img src="assets/img/texturas.png" id='textura' >
		</center>
		
	</div>
	<div id='contieneForm'>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto" id='formularioContenedor'>
					<div class="card border-0 rounded-3 my-5" style='background:#EDEFF1;'>
						<div class="card-body p-4 p-sm-5">
							<div id="circulo">1.</div><h4 class="card-title text-center mb-5 fw-light fs-5">Inscripcion Punto de Venta</h4>
							<form action="" method='get' id='formularioLead'>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="nomCliente" name='nomCliente' placeholder="Nombre del cliente">
									<label id='valida1' class ='validacion'>Campo requerido</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="nit" name='nit' placeholder="NIT">
									<label for="nit" id='valida2' class ='validacion'>Campo requerido</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="nomPunto" name='nomPunto' placeholder="Nombre del punto">
									<label for="nomPunto" id='valida3' class ='validacion'>Nombre del punto</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="nomEquipo" name='nomEquipo' placeholder="Nombre del equipo">
									<label for="nomEquipo" id='valida4' class ='validacion'>Nombre del equipo</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<select class="form-control text-muted" id="ciudad" name="ciudad">
										<option value='' >-Ciudad-</option>
										<?php
											$listadoCiudad = new modeloController();
											$ciudades = $listadoCiudad->consultarCiudad();
											foreach($ciudades as $valor) {
												echo "<option value=".$valor['cod'].">".$valor['nombre_ciudad']."</option>";
											}
											
										?>
									</select>
									<label for="ciudad" id='valida5' class ='validacion'>Ciudad</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="promotor" name='promotor' placeholder="Promotor">
									<label for="promotor" id='valida6' class ='validacion'>Promotor</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="rtc" name='rtc' placeholder="RTC">
									<label for="rtc" id='valida7' class ='validacion'>RTC</label>
								</div>
								<div class="form-group mb-3 text-muted">
									<input type="text" class="form-control valida" id="capUser" name='capUser' placeholder="Capitan y/o usuario (solo minusculas)">
									<label for="capUser" id='valida8' class ='validacion'>Capitan y/o usuario (solo minusculas)</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="checkTerminos">
									<label class="form-check-label" for="checkTerminos">
										He leido y aceptos los terminos de tratamiento de datos personales
									</label>
									<label id='valida9' class='validacion'>Debes aceptar los terminos y condiciones</label>
								</div>
								<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
								<input type="hidden" name="hora" value="<?php echo date("H:i:s"); ?>">
								<input type="hidden" name="fecha" value="<?php echo date("Y-m-d"); ?>">
								<input type="hidden" name="m" value="guardar">
								<center><input type='submit' id='siguiente' value='Siguiente'></center>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	</section> 
	
</body>

</html>