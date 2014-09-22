$(document).ready(function(){

	var origin = window.location.origin;
	var pathName = window.location.pathname.split('/');
	var base_url = origin+'/'+pathName[1]+'/';

	// Muestra/Oculta DIV Geneco Obstetrico segun sexo
	$(".sexo_l").click(function(){

		if($(this).find('input').val()=='Femenino')
		{
			$("#div_gineco_o").css('display', 'block');
		}
		else
		{
			$("#div_gineco_o").css('display', 'none');
		}

	});

	//Muestra Municipio / Lugar de Nacimiento
	$("#lugar_n_e").on('change', function(){

		if($(this).val())
		{
			$("#lugar_n").css('display', 'block');

			$.ajax({url: "historia_clinica/select_municipios",
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

	//Muestra Colonias Codigo Postal
	$("#codigo_postal").on('keyup', function(){
		if($(this).val().length==5)
		{
			$.ajax({url: "historia_clinica/select_codigo_postal",
				type:'POST',
				data:{id:$(this).val()},
				success:function(result){
            		$("#res_codigo_postal").html(result);
            	}
            });
		}
	});

	//Envia al controlador por AJAX-POST el formulario
	$("#frm_alta").submit(function(evento){
		evento.preventDefault();

		$.ajax({
		  type: "POST",
		  url: "historia_clinica/insertar",
		  data: $(this).serialize()
		}).done(function( msg ) {

		 	if(msg==1)
		 	{
			    //$('.md-trigger').get(0).click();
			    success('Historia Cl&iacute;nica', 'El registro se guardo exitosamente');
			 }
			 else
			 {
			 	error('Historia Cl&iacute;nica', 'Error al guardar el registro');
			 }


			});
	});
});