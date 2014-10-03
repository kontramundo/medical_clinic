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
              <label for="nombre">Nombre</label> <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre" value="<?=$detalle->nombre;?>">
            </div>
            <div class="form-group">
              <label for="apellidos">Apellidos</label> <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese Apellidos" value="<?=$detalle->apellidos;?>">
            </div>
            <div class="form-group"> 
              <label for="edad">Edad</label> <input type="text" class="form-control solo_numeros" name="edad" id="edad" maxlength="2" placeholder="Ingrese Edad" value="<?=$detalle->edad;?>">
            </div> 
            <div class="form-group">
                      <label for="sexo">Sexo</label>
                      <div class="col-sm-12">
                        <label class="radio-inline sexo_l"> <input type="radio"  name="sexo" class="icheck sexo" value="Femenino" <?php if($detalle->sexo=='Femenino') echo 'checked';?>> Femenino</label> 
                        <label class="radio-inline sexo_l"> <input type="radio" name="sexo" class="icheck sexo" value="Masculino" <?php if($detalle->sexo=='Masculino') echo 'checked';?>> Masculino</label> 
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
                      <option value="<?=$estado_c->id_cat_estado_civil?>" <?php if($detalle->id_cat_estado_civil==$estado_c->id_cat_estado_civil) echo 'selected';?>><?=utf8_decode($estado_c->nombre)?></option>
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
                  <option value="<?=$escolaridad->id_cat_escolaridad;?>" <?php if($detalle->id_cat_escolaridad==$escolaridad->id_cat_escolaridad) echo 'selected';?>><?=utf8_decode($escolaridad->nombre)?></option>
                  <?php 
                endforeach;
                ?>
              </select>
            </div> 
            <div class="form-group"> 
              <label for="ocupacion">Ocupaci&oacute;n</label>
              <input type="text" class="form-control" name="ocupacion" id="ocupacion" placeholder="Ingrese Ocupacion" value="<?=$detalle->ocupacion;?>">
            </div> 
            <div class="form-group"> 
              <label for="lugar_n_e">Lugar de Nacimiento</label>
              <select name="lugar_n_e" id="lugar_n_e" class="form-control">
                  <option value="" selected>Seleccione Lugar de Nacimiento</option>
                  <?php     
                  foreach ($estados as $estado):
                    ?>
                      <option value="<?=$estado->id_cat_estado?>" <?php if($detalle->id_lugar_n==$estado->id_cat_estado) echo 'selected';?>><?=$estado->estado;?></option>
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
                  <option value="<?=$religion->id_cat_religion?>" <?php if($detalle->id_cat_religion==$religion->id_cat_religion) echo 'selected';?> ><?=utf8_decode($religion->nombre)?></option>
                  <?php 
                endforeach;
                ?>
              </select>
            </div>
            <div class="form-group"> 
              <label for="telefono">Tel&eacute;fono</label>
              <input type="text" class="form-control solo_numeros" name="telefono" id="telefono" maxlength="10" placeholder="Ingrese Tel&eacute;fono" value="<?=$detalle->telefono;?>">
            </div>
            <div class="form-group"> 
              <label for="codigo_postal">C&oacute;digo Postal</label>
              <input type="text" class="form-control solo_numeros" name="codigo_postal" id="codigo_postal" maxlength="5" placeholder="Ingrese C&oacute;digo Postal" value="<?=$detalle->codigo_postal;?>" >
            </div>
              <div id="res_codigo_postal"><!-- Imprime Select Colonia-Municipio-Estado --></div>

            <div class="form-group"> 
              <label for="domicilio">Calle</label>
              <input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Ingrese Domicilio" value="<?=$detalle->calle;?>">
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
              <input type="text" class="form-control" name="medico" id="medico" placeholder="Ingrese M&eacute;dico Familiar" value="<?=$detalle->medico_familiar;?>">
            </div> 
            <div class="form-group"> 
              <label for="direccion_m">Direcci&oacute;n</label>
              <input type="text" class="form-control" name="direccion_m" id="direccion_m" placeholder="Ingrese Direcci&oacute;n" value="<?=$detalle->direccion_m;?>">
            </div> 
            <div class="form-group"> 
              <label for="telefono_m">Tel&eacute;fono</label>
              <input type="text" class="form-control solo_numeros" name="telefono_m" id="telefono_m" maxlength="10" placeholder="Ingrese Tel&eacute;fono" value="<?=$detalle->telefono_m;?>">
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
                                <input type="checkbox" name="heredofamiliares[]" class="icheck heredofamiliares" value="<?=$heredo->id_cat_heredofamiliar?>" <?=$heredo->checked;?>> 
                                <?=$heredo->nombre;?>
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
                              <input type="checkbox" name="patologicos[]" class="icheck patologicos" value="<?=$patolo->id_cat_patologico?>" <?=$patolo->checked;?>>
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
                              <input type="checkbox" name="no_patologicos[]" class="icheck no_patologicos" value="<?=$no_patolo->id_cat_no_patologico?>" <?=$no_patolo->checked;?>> 
                              <?=$patolo->nombre;?>
                            </label>
                          </div>
                          <?php 
                        endforeach;
                        ?>
                      </div>
                  </div>

                  <div class="form-group"  id="div_gineco_o" <?php if($detalle->sexo!='Femenino') echo 'style="display:none;"';?>>
                      <label class="col-sm-3 control-label">Gineco-obst&eacute;tricos</label>
                      <div class="col-sm-9">
                        <?php 
                        foreach ($obstetricos as $obste):
                          ?>
                          <div class="radio">
                            <label>
                              <input type="checkbox" name="obstetricos[]" class="icheck obstetricos" value="<?=$obste->id_cat_obstetrico?>" <?=$obste->checked;?>> 
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
                      <textarea class="form-control" name="padecimiento" id="padecimiento" placeholder="Ingrese Padecimiento"><?=$detalle->padecimiento;?></textarea>
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
              <input type="text" class="form-control solo_numeros" name="peso" id="peso" placeholder="Ingrese Peso" value="<?=$detalle->peso;?>">
            </div> 
            <div class="form-group"> 
              <label for="talla">Talla</label>
              <input type="text" class="form-control solo_numeros" name="talla" id="talla" placeholder="Ingrese Talla" value="<?=$detalle->talla;?>">
            </div> 
            <div class="form-group"> 
              <label for="fr">F.R.</label>
              <input type="text" class="form-control solo_numeros" name="fr" id="fr" placeholder="Ingrese F.R." value="<?=$detalle->fr;?>">
            </div>
            <div class="form-group"> 
              <label for="fc">F.C.</label>
              <input type="text" class="form-control solo_numeros" name="fc" id="fc" placeholder="Ingrese F.C." value="<?=$detalle->fc;?>">
            </div>
            <div class="form-group"> 
              <label for="ta">T/A</label>
              <input type="text" class="form-control solo_numeros" name="ta" id="ta" placeholder="Ingrese T/A" value="<?=$detalle->ta;?>">
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
                      <textarea class="form-control" rows="3" name="comentarios" id="comentarios" placeholder="Ingrese Comentarios"><?=$detalle->comentarios;?></textarea>
                  </div>
                  <div class="form-group">
                      <label for="diagnostico">Diagnostico Integral</label>
                      <textarea class="form-control" rows="3" name="diagnostico" id="diagnostico" placeholder="Ingrese Diagnostico Integral"><?=$detalle->talla;?></textarea>
                  </div>
                  <div class="form-group">
                      <label for="tratamiento">Tratamiento</label>
                      <textarea class="form-control" rows="3" name="tratamiento" id="tratamiento" placeholder="Ingrese Tratamiento"><?=$detalle->talla;?></textarea>
                  </div>
                  <div class="form-group">
                      <label for="estudios">Interpretaci&oacute;n de Estudios <small>Laboratorio y Gabinete</small></label>
                      <textarea class="form-control" rows="3" name="estudios" id="estudios" placeholder="Ingrese Interpretaci&oacute;n de Estudios"><?=$detalle->talla;?></textarea>
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