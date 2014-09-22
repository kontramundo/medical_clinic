<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="kontramundo systems">
    <meta name="description" content="Medical Clinic System">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Clinic</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>/assets/img/logo.ico" />
    
    <!-- CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/login.css" rel="stylesheet">

    <!-- JS -->
    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/medical_clinic/sesion.js"></script>
</head>
<body>
    <div class="container">
    	<div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form id="frm_login" action="" method="">
                    <input name="usuario" id="usuario" type="text" placeholder="Usuario" >
                    <input name="password" id="password" type="password" placeholder="Password" >
                    <a href="" id="link_recuperar">&iquest;Olvidaste tu password?</a>
                    <button class="btn btn-primary btn-block login" id="btn_login" type="submit">Iniciar Sesi&oacute;n</button>
                    <small class="text-muted">&copy; Kontramundo System's</small>
                </form>

                <form id="frm_recuperar" action="" method="" style="display:none;">
                    <input name="usuario_r" id="usuario_r" type="text" placeholder="Usuario" >
                    <a href="" id="link_login">Iniciar Sesi&oacute;n</a>
                    <button class="btn btn-primary btn-block login" id="btn_recuperar" type="submit">Recuperar Password</button>
                    <small class="text-muted">&copy; Kontramundo System's</small>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>
