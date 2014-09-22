<div class="container">
	 <div class="starter-template">
	    <h1 style="text-align:center;">Consentimiento Informado</h1>

		<div class="row">
			<form id="frm_afiliacion" class="form-horizontal" role="form">
				<div class="col-md-6">
					<div class="form-group" style="clear:both;">
				    	<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="edad" class="col-sm-3 control-label">Edad</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" name="edad" id="edad" placeholder="Ingrese Edad">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="domicilio" class="col-sm-3 control-label">Domicilio</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Ingrese Domicilio">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="doctor" class="col-sm-3 control-label">Doctor</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" name="doctor" id="doctor" placeholder="Ingrese Doctor">
				    	</div>
				  	</div>
				</div>
				<div class="col-md-6">

					<div class="form-group">
				    	<label for="padecimiento" class="col-sm-3 control-label">Padecimiento</label>
				    	<div class="col-sm-9">
				    		<textarea class="form-control" rows="3" name="padecimiento" id="padecimiento" placeholder="Ingrese Padecimiento"></textarea>
				    	</div>
				  	</div>

			  		<button type="button" class="btn btn-default">Guardar</button>
				  	<div id="resultado"><!-- Resultado Insert --></div>
				</div>
			</form>
		</div>
	</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			$("#sexo").change(function(){

				if($(this).val()=='Femenino')
				{
					$("#div_gineco_o").css('display', 'block');
				}
				else
				{
					$("#div_gineco_o").css('display', 'none');
				}

			});

			$("#lugar_n_e").change(function(){

				if($(this).val())
				{
					$("#lugar_n").css('display', 'block');

					$.ajax({url:"<?php echo base_url();?>paginas/paginas/select_municipios",
						type:'POST',
						data:{id:$(this).val()},
						success:function(result){
		            		$("#lugar_n").html(result);
		            	}
		            });
				}
				else
				{
					$("#lugar_n").html('');
					$("#lugar_n").css('display', 'none');
				}
			});

		});
	</script>