<?php $this->load->view('overall/header'); ?>
<body>
	<?php $this->load->view('overall/nav'); ?>
	<div class="container">
		<h3 align="center"> <?php echo  $datos['LUGAR'] ;  ?></h3>
		<br>
		<div class="">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?=  form_open_multipart('eventos/editar', 'class="form-horizontal"');  ?>
				<fieldset>

					<div class="form-group">
						<label for="inputNombres" class="col-lg-2 control-label">Lugar</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="inputTema" placeholder="Casa"   value="<?php echo $datos['LUGAR'] ?>">
						</div>
					</div>	

					<div class="form-group">
						<label for="inputPrimerApellido" class="col-lg-2 control-label">Descripcion</label>
						<div class="col-lg-10">
							<!--	<textarea  type="text" class="form-control" name="inputDescripcion"  rows="10" required></textarea> -->
							<select name="inputDescripcion" id="inputDescripcion"  class="form-control">
								<option value="">[...]</option>
								<option value="Andres">Andrés</option>
								<option value="Sex">Sex</option>
								<option value="69">69</option>
								<option value="El">Oral a Él</option>
								<option value="Ella">Oral a Ella</option>
							</select>
						</div>
					</div>			
					<div class="form-group">
						<label for="inputSegundoApellido" class="col-lg-2 control-label"  style="font-weight: bold;">Fecha</label>
						<div class="col-lg-10">
							<input type="date" class="form-control" name="inputFecha" value="<?php echo $datos['FECHA'] ?>">
						</div>
					</div>			    	        


					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<input type="hidden" class="form-control" name="inputId" value="<?php echo $datos['ID_EVENTO'] ?>">				 
							<button type="submit" class="btn btn-success">Editar</button>
						</div>
					</div>
				</fieldset>
				<?=   form_close(); ?>


			</div>
			<div class="col-md-2"></div>
		</div>  
	</div>
	<?php $this->load->view('overall/footer'); ?>
	<script>
		$("#inputDescripcion").val("<?php echo $datos['TIPO'] ?>");
	</script>


</body>
</html>   