<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url();?>assets/images/favicon.png">

    <title>Medical Clinic</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.switch/bootstrap-switch.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/jquery.select2/select2.css" />
      
      
    <!-- Slider -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.slider/css/slider.css" />
      
    <!-- DateRange -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/bootstrap.daterangepicker/daterangepicker-bs3.css" />

    <!-- DataTables -->
    <!-- <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/datatables/css/jquery.dataTables.css"> -->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css">

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

    <!-- DATATABLE -->
    <script type="text/javascript" src="<?=base_url();?>assets/js/datatables/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.js"></script>


    <!-- JS General -->
    <script src="<?=base_url();?>assets/js/medical_clinic/generales.js"></script>    
  </head>
<body>

<!-- Fixed navbar -->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="fa fa-gear"></span>
      </button>
      <a class="navbar-brand" href="#"><span>Medical Clinic</span></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><a href="#"><i class="fa fa-stethoscope"></i> Historia Clinica</a></li>
        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Consentimiento</a></li>  
        
      </ul>
      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="dropdown profile_menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="<?=base_url();?>assets/images/avatar2.jpg" />Salvador Sanchez <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cuenta</a></li>
            <li class="divider"></li>
            <li><a href="sesion/logout">Cerrar Sesi&oacute;n</a></li>
          </ul>
        </li>
      </ul>     
    </div><!--/.nav-collapse -->
  </div>
</div>

<div id="cl-wrapper" class="sb-collapsed">
  <div class="cl-sidebar">
    <div class="cl-toggle"><i class="fa fa-bars"></i></div>
    <div class="cl-navblock">
      <div class="menu-space">
        <div class="content">
          <div class="side-user">
            <div class="avatar"><img src="<?=base_url();?>assets/images/avatar1_50.jpg" alt="Avatar" /></div>
            <div class="info">
              <a href="#">Jeff Hanneman</a>
              <img src="<?=base_url();?>assets/images/state_online.png" alt="Status" /> <span>Online</span>
            </div>
          </div>
          <ul class="cl-vnavigation">
            <li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="#"><i class="fa fa-stethoscope"></i><span>Historia Clinica</span></a>
              <ul class="sub-menu">
                <li><a href="<?=base_url();?>historia_clinica">Registro</a></li>
                <li><a href="<?=base_url();?>historia_clinica/consulta">Consulta</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-pencil-square-o"></i><span>Consentimiento</span></a>
              <ul class="sub-menu">
                <li><a href="form-elements.html">Registro</a></li>
                <li><a href="form-validation.html">Consulta</a></li>
              </ul>
            </li>

            <li><a href="#"><i class="fa fa-cog"></i><span>Administracci&oacute;n</span></a>
              <ul class="sub-menu">
                <li><a href="form-multiselect.html">Cuenta</a></li>
                <li><a href="form-wysiwyg.html">Catalogos</a></li>
                <li><a href="form-upload.html">Sistema</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-right collapse-button" style="padding:7px 9px;">
      <!-- <input type="text" class="form-control search" placeholder="Search..." /> -->
      <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
    </div>
  </div>
</div>


<div class="container-fluid" id="pcont">