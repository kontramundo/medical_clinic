$(document).ready(function(){
  	$('.md-trigger').modalEffects();

  	//Solo Numeros
	$(".solo_numeros").keyup(function(){
		if ($(this).val())
		{
			$(this).val($(this).val().replace(/[^0-9\.]/g, ""));
		}
	});
});

//Mensajes Modal
function success(header, mensaje)
{
	$("#modal_success").html('<div class="md-modal colored-header success md-effect-10" id="success"><div class="md-content"><div class="modal-header"><h3>'+header+'</h3><button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button></div><div class="modal-body"><div class="text-center"><div class="i-circle success"><i class="fa fa-check"></i></div><h4>&iexcl;EXITOSO!</h4><p>'+mensaje+'</p></div></div><div class="modal-footer"><button type="button" class="btn btn-success btn-flat md-close" data-dismiss="modal">Cerrar</button></div></div></div><div class="md-overlay"></div>');
	$("#btn_success").attr('data-modal', 'success');

	$("#btn_success").click();
}

function error(header, mensaje)
{
	$("#modal_success").html('<div class="md-modal colored-header danger md-effect-10" id="error"><div class="md-content"><div class="modal-header"><h3>Historia Cl&iacute;nica</h3><button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button></div><div class="modal-body"><div class="text-center"><div class="i-circle danger"><i class="fa fa-warning"></i></div><h4>&iexcl;ERROR!</h4><p>'+mensaje+'</p></div></div><div class="modal-footer"><button type="button" class="btn btn-danger btn-flat md-close" data-dismiss="modal">Cerrar</button></div></div></div><div class="md-overlay"></div>');
	$("#btn_success").attr('data-modal', 'error');

	$("#btn_success").click();
}