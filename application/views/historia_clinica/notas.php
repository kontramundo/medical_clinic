<!-- Bootstrap core CSS -->
<link href="<?=base_url();?>assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.switch/bootstrap-switch.min.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />

<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/datatables/css/jquery.dataTables.css">
<!-- <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css"> -->

<!-- Select2 -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/jquery.select2/select2.css" />
  
<!-- Slider -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.slider/css/slider.css" />
  
<!-- DateRange -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.daterangepicker/daterangepicker-bs3.css" />

<!-- Modals -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/jquery.niftymodals/css/component.css" />
  
<!-- Custom styles for this template -->
<link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" />

<link rel="stylesheet" href="<?=base_url();?>assets/fonts/font-awesome-4/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url();?>assets/css/pygments.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/jquery.nanoscroller/nanoscroller.css" />
<link href="<?=base_url();?>assets/js/jquery.icheck/skins/square/blue.css" rel="stylesheet">

<!-- JQUERY -->
<script src="<?=base_url();?>assets/js/jquery.min.js"></script>

<!-- JS General -->
<script src="<?=base_url();?>assets/js/medical_clinic/generales.js"></script>   
 

<div class="page-head">
  <h2><i class="fa fa-stethoscope"></i> Historia Clinica</h2>
  <ol class="breadcrumb">
    <li class="active"><?=$paciente;?></li>
  </ol>
</div>

<div class="cl-mcont">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="block-flat">
        <div class="header">              
          <h3><i class="fa fa-pencil"></i> Notas Evoluci&oacute;n</h3>
        </div>
        <div class="content"> 
          <form name="frm_nota" id="frm_nota" method="post" role="form"> 
            <div class="form-group">
              <label for="nombre">Nota</label> 
              <input type="hidden" name="id_historia_clinica" id="historia_clinica" value="<?=$id_historia_clinica;?>" />
              <textarea rows="3" class="form-control" name="nota" id="nota" placeholder="Ingrese Nota" required></textarea>              
            </div>
            <button class="btn btn-primary" id="btn_guardar" type="submit">Guardar</button>
          </form>
        </div>
      </div>  
    </div>

    <div class="col-sm-12 col-md-12">
      <div class="block-flat">
        <div class="header">              
          <h3><i class="fa fa-history"></i> Historial</h3>
        </div>
        <div class="content"> 
          

          <div class="panel-group accordion" id="accordion">
            <?php 
            foreach($notas_evolucion AS $nota)
            {

              ?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$nota->id_nota_evolucion;?>">
                    <i class="fa fa-angle-right"></i> <?=date('d/m/Y', strtotime($nota->fecha_registro));?>
                  </a>
                  </h4>
                </div>
                <div id="collapse<?=$nota->id_nota_evolucion;?>" class="panel-collapse collapse">
                  <div class="panel-body">
                  <?=$nota->nota;?>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
          </div>


        </div>
      </div>  
    </div>
  </div>

<!-- Notificaciones MODAL -->
  <button class="md-trigger" id="btn_success" data-modal="" style="display:none"></button>
  <div id="modal_success"></div>

     
</div>



  <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.select2/select2.min.js"></script>
  <!-- <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.parsley/dist/parsley.js"></script> -->
  <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.slider/js/bootstrap-slider.js"></script>
  <!-- <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.nanoscroller/jquery.nanoscroller.js"></script> -->
  <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.nestable/jquery.nestable.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/behaviour/general.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.ui/jquery-ui.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.switch/bootstrap-switch.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.icheck/icheck.min.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.niftymodals/js/jquery.modalEffects.js"></script> 

  <script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
          App.init();

        $("#frm_nota").submit(function(evento){
          evento.preventDefault();

          if($("#nota").val())
          {
            $.ajax({
              type: "POST",
              url: "<?=base_url('historia_clinica/insertar_nota_evolucion');?>",
              data: $(this).serialize()
            }).done(function( msg ) {
              if(msg==1)
              {
                var uniqid = Math.random().toString(36).substring(7);

                  $("#accordion").prepend('<div class="panel panel-default">\
                <div class="panel-heading">\
                  <h4 class="panel-title">\
                  <a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#'+uniqid+'">\
                    <i class="fa fa-angle-right"></i> <?=date('d/m/Y');?>\
                  </a>\
                  </h4>\
                </div>\
                <div id="'+uniqid+'" class="panel-collapse collapse">\
                  <div class="panel-body">\
                  '+$("#nota").val()+'\
                  </div>\
                </div>\
              </div>');


                  success('Historia Cl&iacute;nica', 'El registro se guardo exitosamente');
               }
               else
               {
                  error('Historia Cl&iacute;nica', 'Error al guardar el registro');
               }
               $("#nota").val('');
            });
          }
        });
      });
  </script>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript"  src="<?=base_url();?>assets/js/bootstrap/dist/js/bootstrap.min.js"></script>