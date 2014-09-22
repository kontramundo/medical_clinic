$(document).ready(function(){    
    $("#frm_login").submit(function(evento) {
        evento.preventDefault();

        //Valida
        if ($("#usuario").val() == "") 
        {
            //remove success mesage replaced with error message
            $("#output").addClass("alert alert-danger animated fadeInUp").html("Por favor ingrese su usuario");
            
            return false;
        }

        if ($("#password").val() == "") 
        {
            //remove success mesage replaced with error message
            $("#output").addClass("alert alert-danger animated fadeInUp").html("Por Favor Ingrese su password");

            return false;
        }



        var inputs = decodeURIComponent($(this).serialize());

        $.ajax({
           type: "POST",
           url: "sesion/login",
           data: {campos: inputs},
           success: function(result){

            //console.log(result);
                if(result=='1')
                {
                    $(location).attr('href', "historia_clinica");
                }
                else
                {
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("Usuario y/o Password Incorrecto(s)");
                }
           }
         });
    });

    $("#frm_recuperar").submit(function(evento){
        evento.preventDefault();

         //Valida
        if ($("#usuario_r").val() == "") 
        {
            //remove success mesage replaced with error message
            $("#output").addClass("alert alert-danger animated fadeInUp").html("Por favor ingrese su usuario");
            
            return false;
        }

        //$("#btn_recuperar").attr('disabled', true);

        var inputs = decodeURIComponent($(this).serialize());

        $.ajax({
           type: "POST",
           url: "sesion/recuperar_password",
           data: {campos: inputs},
           success: function(result){

            console.log(result);
                if(result=='1')
                {
                    $("#output").addClass("alert alert-success animated fadeInUp").html("Se le ha enviado un correo con la informaci&oacute;n para recuperar su password");
                }
                else if(result=='2')
                {
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("El usuario no existe");
                }
                else
                {
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("Error al intentar recuperar password");
                }
           }
         });

    });


    $("#link_recuperar").click(function(evento){
        evento.preventDefault();

        $("#frm_login").hide('fast');
        $("#frm_recuperar").show('fast');
    });

    $("#link_login").click(function(evento){
        evento.preventDefault();

        $("#frm_recuperar").hide('fast');
        $("#frm_login").show('fast');
    });
});