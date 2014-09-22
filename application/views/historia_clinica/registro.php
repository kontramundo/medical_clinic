<div class="page-head">
	<h2><i class="fa fa-stethoscope"></i> Historia Clinica</h2>
	<ol class="breadcrumb">
		<ol class="breadcrumb">
	        <li class="active">Registro</li>
      	</ol>
	</ol>
</div>
<div class="cl-mcont">
	<div class="row">
		<form id="frm_alta" role="form"> 
			<div class="col-sm-6 col-md-6">
				<div class="block-flat">
					<div class="header">							
						<h3><i class="fa fa-user"></i> Informaci&oacute;n Personal</h3>
					</div>
					<div class="content">	
						<div class="form-group">
							<label for="nombre">Nombre</label> <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre" >
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos</label> <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese Apellidos" >
						</div>
						<div class="form-group"> 
							<label for="edad">Edad</label> <input type="text" class="form-control solo_numeros" name="edad" id="edad" maxlength="2" placeholder="Ingrese Edad">
						</div> 
						<div class="form-group">
			                <label for="sexo">Sexo</label>
			                <div class="col-sm-12">
			                  <label class="radio-inline sexo_l"> <input type="radio"  name="sexo" class="icheck sexo" value="Femenino"> Femenino</label> 
			                  <label class="radio-inline sexo_l"> <input type="radio" name="sexo" class="icheck sexo" value="Masculino"> Masculino</label> 
			                </div>
			            </div>
			             <div class="clearfix"></div>
						<div class="form-group"> 
							<label for="estado_c">Estado Civil</label>
							<select name="estado_c" id="estado_c" class="form-control">
				    			<option value="" selected>Seleccione Estado Civil</option>
								<?php
								foreach ($estado_civil as $estado_c):
									?>
		                            <option value="<?=$estado_c->id_cat_estado_civil?>"><?=utf8_decode($estado_c->nombre)?></option>
		                            <?php 
		                        endforeach;
								?>
							</select>
						</div> 
						<div class="form-group"> 
							<label for="escolaridad">Escolaridad</label>
							<select name="escolaridad" id="escolaridad" class="form-control">
				    			<option value="" selected>Seleccione Escolaridad</option>
				    			<?php
								foreach ($escolaridades as $escolaridad):
									?>
		                            <option value="<?=$escolaridad->id_cat_escolaridad;?>"><?=utf8_decode($escolaridad->nombre)?></option>
		                            <?php 
		                        endforeach;
								?>
							</select>
						</div> 
						<div class="form-group"> 
							<label for="ocupacion">Ocupaci&oacute;n</label>
							<input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ingrese Ocupacion">
						</div> 
						<div class="form-group"> 
							<label for="lugar_n_e">Lugar de Nacimiento</label>
							<select name="lugar_n_e" id="lugar_n_e" class="form-control">
				    			<option value="" selected>Seleccione Lugar de Nacimiento</option>
				    			<?php    	
		                        foreach ($estados as $estado):
		                        	?>
		                            <option value="<?=$estado->id_cat_estado?>"><?=$estado->estado;?></option>
		                            <?php 
		                        endforeach;
		                        ?>
							</select>
						</div> 
							<div class="form-group"> 
								<select name="lugar_n" id="lugar_n" class="form-control" style="display:none;">
								</select>
							</div>

						<div class="form-group"> 
							<label for="religion">Religi&oacute;n</label>
							<select name="religion" id="religion" class="form-control">
								<option value="" selected>Seleccione Religi&oacute;n</option>
								<?php
								foreach ($religiones as $religion):
									?>
		                            <option value="<?=$religion->id_cat_religion?>"><?=utf8_decode($religion->nombre)?></option>
		                            <?php 
		                        endforeach;
								?>
							</select>
						</div>
						<div class="form-group"> 
							<label for="telefono">Tel&eacute;fono</label>
							<input type="text" class="form-control solo_numeros" name="telefono" id="telefono" maxlength="10" placeholder="Ingrese Tel&eacute;fono">
						</div>
						<div class="form-group"> 
							<label for="codigo_postal">C&oacute;digo Postal</label>
							<input type="text" class="form-control solo_numeros" name="codigo_postal" id="codigo_postal" maxlength="5" placeholder="Ingrese C&oacute;digo Postal">
						</div>
							<div id="res_codigo_postal"><!-- Imprime Select Colonia-Municipio-Estado --></div>

						<div class="form-group"> 
							<label for="domicilio">Calle</label>
							<input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Ingrese Domicilio">
						</div>
					</div>
				</div>	

				<div class="block-flat">
					<div class="header">							
						<h3><i class="fa fa-user-md"></i> Informaci&oacute;n Medico Familiar</h3>
					</div>
					<div class="content">	
						<div class="form-group"> 
							<label for="medico">M&eacute;dico Familiar</label>
							<input type="text" class="form-control" name="medico" id="medico" placeholder="Ingrese M&eacute;dico Familiar">
						</div> 
						<div class="form-group"> 
							<label for="direccion_m">Direcci&oacute;n</label>
							<input type="text" class="form-control" name="direccion_m" id="direccion_m" placeholder="Ingrese Direcci&oacute;n">
						</div> 
						<div class="form-group"> 
							<label for="telefono_m">Tel&eacute;fono</label>
							<input type="text" class="form-control solo_numeros" name="telefono_m" id="telefono_m" maxlength="10" placeholder="Ingrese Tel&eacute;fono">
						</div> 
					</div>
				</div>			
			</div>

			<div class="col-sm-6 col-md-6">
				<div class="block-flat">
					<div class="header">							
						<h3><i class="fa fa-ambulance"></i> Antecedentes</h3>
					</div>
					<div class="content">
						<div class="form-group">
			                <label class="col-sm-3 control-label">Antecedentes Heredofamiliares</label>
			                <div class="col-sm-9">
			               		<?php 
	                        	foreach ($heredofamiliares as $heredo):
	                        		?>
	                                <div class="radio">
										<label>
												<input type="checkbox" name="heredofamiliares[]" class="icheck heredofamiliares" value="<?=$heredo->id_cat_heredofamiliar?>"> <?=$heredo->nombre;?>
										</label>
									</div>
	                                <?php 
	                            endforeach;
		                        ?>
			                </div>
			            </div>

			            <div class="form-group">
			                <label class="col-sm-3 control-label">Personales Patol&oacute;gicos</label>
			                <div class="col-sm-9">
			               		<?php 
	                        	foreach ($patologicos as $patolo):
	                        		?>
	                                <div class="radio">
										<label>
											<input type="checkbox" name="patologicos[]" class="icheck patologicos" value="<?=$patolo->id_cat_patologico?>">
											<?=$patolo->nombre;?>
										</label>
									</div>
	                                <?php 
	                            endforeach;
	                        	?>
			                </div>
			            </div>

			            <div class="form-group">
			                <label class="col-sm-3 control-label">Personales No Patol&oacute;gicos</label>
			                <div class="col-sm-9">
			               		<?php 
	                        	foreach ($no_patologicos as $no_patolo):
	                        		?>
	                                <div class="radio">
										<label>
											<input type="checkbox" name="no_patologicos[]" class="icheck no_patologicos" value="<?=$no_patolo->id_cat_no_patologico?>"> 
											<?=$patolo->nombre;?>
										</label>
									</div>
	                                <?php 
	                            endforeach;
	                        	?>
			                </div>
			            </div>

			            <div class="form-group"  id="div_gineco_o" style="display:none;">
			                <label class="col-sm-3 control-label">Gineco-obst&eacute;tricos</label>
			                <div class="col-sm-9">
			               		<?php 
	                        	foreach ($obstetricos as $obste):
	                        		?>
	                                <div class="radio">
										<label>
											<input type="checkbox" name="obstetricos[]" class="icheck obstetricos" value="<?=$obste->id_cat_obstetrico?>"> 
											<?=$obste->nombre;?>
										</label>
									</div>
	                                <?php 
	                            endforeach;
	                        	?>
			                </div>
			            </div>

			             <div class="form-group">
			                <label for="padecimiento">Padecimiento Actual</label>
			                <textarea class="form-control" name="padecimiento" id="padecimiento" placeholder="Ingrese Padecimiento"></textarea>
			            </div>
					</div>
				</div>				
			</div>

			<div class="col-sm-6 col-md-6">
				<div class="block-flat">
					<div class="header">							
						<h3><i class="fa fa-stethoscope"></i> Exploraci&oacute;n Clinica</h3>
					</div>
					<div class="content">
						<div class="form-group"> 
							<label for="peso">Peso</label>
							<input type="text" class="form-control solo_numeros" name="peso" id="peso" placeholder="Ingrese Peso">
						</div> 
						<div class="form-group"> 
							<label for="talla">Talla</label>
							<input type="text" class="form-control solo_numeros" name="talla" id="talla" placeholder="Ingrese Talla">
						</div> 
						<div class="form-group"> 
							<label for="fr">F.R.</label>
							<input type="text" class="form-control solo_numeros" name="fr" id="fr" placeholder="Ingrese F.R.">
						</div>
						<div class="form-group"> 
							<label for="fc">F.C.</label>
							<input type="text" class="form-control solo_numeros" name="fc" id="fc" placeholder="Ingrese F.C.">
						</div>
						<div class="form-group"> 
							<label for="ta">T/A</label>
							<input type="text" class="form-control solo_numeros" name="ta" id="ta" placeholder="Ingrese T/A">
						</div>
					</div>
				</div>

				<div class="block-flat">
					<div class="header">							
						<h3><i class="fa fa-medkit"></i> Diagnostico</h3>
					</div>
					<div class="content">	
						<div class="form-group">
			                <label for="comentarios">Comentarios</label>
			                <textarea class="form-control" rows="3" name="comentarios" id="comentarios" placeholder="Ingrese Comentarios"></textarea>
			            </div>
			            <div class="form-group">
			                <label for="diagnostico">Diagnostico Integral</label>
			                <textarea class="form-control" rows="3" name="diagnostico" id="diagnostico" placeholder="Ingrese Diagnostico Integral"></textarea>
			            </div>
			            <div class="form-group">
			                <label for="tratamiento">Tratamiento</label>
			                <textarea class="form-control" rows="3" name="tratamiento" id="tratamiento" placeholder="Ingrese Tratamiento"></textarea>
			            </div>
			            <div class="form-group">
			                <label for="estudios">Interpretaci&oacute;n de Estudios <small>Laboratorio y Gabinete</small></label>
			                <textarea class="form-control" rows="3" name="estudios" id="estudios" placeholder="Ingrese Interpretaci&oacute;n de Estudios"></textarea>
			            </div>

			            <!-- Carga de archivos -->
			            <div class="form-group">
			            	<label for="archivo">Adjuntar archivo:</label>
			              	<input type="file" name="archivo" id="archivo" class="input_file" accept="image/png, image/jpeg" style="display:none;" placeholder="Examinar"/>
			              	<p><button data-file="archivo" data-folder="assets/uploads" data-res="#res_archivo" class="btn btn-large btn-info adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivos</button></p>
			            </div>

			            <table  class="display no-border" cellspacing="0" width="100%">
			            	<thead class="no-border">
			            		<tr>
			            			<th>Archivo</th>
			            			<th class="text-center">Acciones</th>
			            		</tr>
			            	</thead>
			            	<tbody class="no-border-x no-border-y" id="res_archivo">
			            		
			            	</tbody>
			            </table>
			            <!-- Fin carga dearchivos -->

			            <div class="checkbox">
			              	<button class="btn btn-success" type="submit">Guardar</button>
			            </div>
					</div>
				</div>

			</div>
		</form>
	</div>

	<!-- Notificaciones MODAL -->
	<button class="md-trigger" id="btn_success" data-modal="" style="display:none"></button>
    <div id="modal_success"></div>

     
</div>

<script src="<?=base_url();?>assets/js/medical_clinic/historia_clinica.js"></script>
<script src="<?=base_url();?>assets/js/medical_clinic/upload.js"></script>