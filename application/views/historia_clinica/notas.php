 <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.switch/bootstrap-switch.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/datatables/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css"> -->

    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/lightbox/css/jquery.lightbox.css');?>" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?=base_url('assets/js/lightbox/css/jquery.lightbox.ie6.css');?>" /><![endif]-->

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
    <li class="active">Salvador Sánchez Jimenez</li>
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
          <form id="frm_alta" role="form"> 
            <div class="form-group">
              <label for="nombre">Nota</label> 
              <textarea rows="3" class="form-control" name="nota" id="nota" placeholder="Ingrese Nota" ></textarea>
            </div>
            <button class="md-trigger" id="btn_success" data-modal="" style="display:none"></button>
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
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <i class="fa fa-angle-right"></i> 01/10/2014
              </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
              We have a full documentation for every single thing in this template, let's check it out and if you need support with.
              </div>
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <i class="fa fa-angle-right"></i> 05/10/2014
              </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
              We have a full documentation for every single thing in this template, let's check it out and if you need support with.
              </div>
            </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <i class="fa fa-angle-right"></i> 01/11/2014
              </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
            </div>
          </div>


        </div>
      </div>  
    </div>
  </div>

  <!-- Notificaciones MODAL -->
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
      });
  </script>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript"  src="<?=base_url();?>assets/js/bootstrap/dist/js/bootstrap.min.js"></script>