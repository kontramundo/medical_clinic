$(document).ready(function(){

	// Variables globales
	var input_name;
	var folder;
	var res_upload;
	var uniqid = Math.round(new Date().getTime() + (Math.random() * 100));

	//Abre ventana para buscar archivo
	$(".adjuntar").click(function(evento){
		evento.preventDefault();

		input_name = $(this).data('file');
		folder     = $(this).data('folder');
		res_upload = $(this).data('res');
		
		$("#"+input_name).click();
	});

	//Carga el archivo
	$('.input_file').change(function(){
		var url = "upload/subir";
		var inputFile = document.getElementById(input_name);
		var file = inputFile.files[0];
		var data = new FormData();

		data.append('input',input_name);
		data.append('archivo',file);
		data.append('folder',folder);
		data.append('uniqid',uniqid);

		$.ajax({
			url:url,
			type:'POST',
			contentType:false,
			data:data,
			processData:false,
			cache:false
		}).done(function(msg) {
			$(res_upload).append(msg);
			document.getElementById(input_name).value = "";
		});
	});


	//Elimina archivo
	$('body').on('click', '.eliminar', function(){
		var archivo = $(this).data('name');
		var url = "upload/eliminar";
		var id = archivo.split('.');

		id = '#'+id[0];

		$.ajax({
		url: url,
		type:"POST",
		data:{folder: folder, archivo: archivo, uniqid: uniqid},
			success:function(data){
				if(data==1)
				{
					$(id).html('');
				}
				else
				{
					$(id).html(data);
				}
		}});
	});

});