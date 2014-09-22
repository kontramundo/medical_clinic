<style type="text/css">
    
    .test{
        background-color: gray;
    }
</style>

<div class="page-head">
	<h2><i class="fa fa-stethoscope"></i> Historia Clinica</h2>
	<ol class="breadcrumb">
		<li class="active">Consulta</li>
	</ol>
</div>
<div class="cl-mcont">
	<div class="row">
		<div class="col-md-12">
			<div class="block-flat">
				<div class="content">
					<div class="table-responsive">
						<table id="example" class="display no-border" cellspacing="0" width="100%">
					        <thead class="no-border" style="background:#5E5E5E; color:#fff;">
					            <tr>
					                <th>ID</th>
					                <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Tel&eacute;fono</th>
                                    <th>Direcci&oacute;n</th>
                                    <th>Acciones</th>
					            </tr>
					        </thead>
                            <tbody class="no-border-x no-border-y"></tbody>
					    </table>
					</div>
				</div>
			</div>					
		</div>
	</div>
</div>

<script src="<?=base_url();?>assets/js/medical_clinic/historia_clinica.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

     	$('#example').dataTable( {
        "paginationType": "full_numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "<?=base_url();?>historia_clinica/test",
         "columns": [
            { "data": "id_historia_clinica" },
            { "data": "nombre" },
            { "data": "edad" },
            { "data": "sexo" },
            { "data": "telefono" },
            { "data": "direccion" },
            { "data": "detalle", "sClass": "text-center"}
          ],

           "language": {
                "processing": "<i class='fa fa-spinner fa-spin'></i> Cargando...",
                "loadingRecords": "",
                "lengthMenu": "Mostrar _MENU_ registros por p&aacute;gina",
                "zeroRecords": "No se encontro ning&uacute;n registro",
                "info": "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Ning&uacute;n Resultado",
                "infoFiltered": "(Filtrado de _MAX_ registros en total)",
                "paginate": {
                    "first":      "Primera",
                    "last":       "Última",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                'search': 'Buscar:'
            }
      } );
 });
</script>