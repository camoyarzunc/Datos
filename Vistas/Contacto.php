<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mis Perris</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
   <script src="../js/validarut.js"></script> 
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../jquery/jquery.js"></script>
    <script src="../jquery/jquery.validate.js"></script>
    <script>
	$(document).ready(function (event) {
        $("#txtRun").change(function () { //se ejecuta el script cuando el txtRun pierda foco
            var rut=document.getElementById("txtRun").value; //rescata rut (tiene que ir con - por ejemplo 11111111-1)
            if(Fn.validaRut(rut)==false){ //se va al script de validacion mandando el rut
                alert("desactivo");
                botonEnviar.disabled=true;
                $("#error").show();//si es falso desabilita el boton ( tienes que ponerle el nombre de tu boton de registrar)
            }else{
                botonEnviar.disabled=false; //si es valido habilita el boton
                alert("desactivo");
                $("#error").hide();
        }});
	});
        </script>


    <div class="barra">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <img src="../img/logo.png" alt="logo">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                <a href="index.html" class="blanco">Inicio</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                <a href="" class="blanco">Quienes somos</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                <a href="" class="blanco">Servicios</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                <a href="Contacto.php" class="blanco">Contactanos</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(event) {
            $("#cboRegion").change(function() {
                var id = $("#cboRegion").val();
                $.ajax({
                    url: "llenar_combo.php",
                    type: 'POST',
                    data: {
                        id_region: id
                    },
                    success: function(data) {
                        $("#cboCiudad").html(data);
                    }
                });
            });
        });
    </script>
    <?php
         $cone= mysqli_connect("localhost", "root", "","misperris");
         $reg= mysqli_query($cone,"select * from region")
        ?>

        <form action="../Vistas/Ingresar.php" method="post" id="formulario" autocomplete="off">
            <div class="form-group">
                <label for="Correo">Correo Electronico</label>
                <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ej: correo@gmail.com"   >
            </div>
            <div class="form-group">
                <label for="Run">Rut</label>
                <input type="text" id="txtRun" name="txtRun"  placeholder="Ej : 11.111.111-1"   >
                <label name="error" id="error" style="display: none;">Rut Invalido</label> 
            </div>
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Ingrese Nombre Completo"  maxlength = 50, minlength = 20 >
            </div>
            <div class="form-group">
               
                <label for="Fecha">Fecha de Nacimiento</label>
                <input max="2000-31-12"  type="date" class="form-control" id="dtpFecha" name="dtpFecha" >
            </div>
            <div class="form-group">
                <label for="Telefono">Telefono</label>
                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono"  maxlength = 9  minlength = 9 placeholder = "Ej : 912345678"  >
            </div>
            <div class="form-group">
                <label for="Region">Region</label>
                <select name="cboRegion" class="form-control" id="cboRegion"    >
                <?php
                            while($row=mysqli_fetch_array($reg)){
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                            }
                            ?>
            </select>
            </div>
            <div class="form-group">
                <label for="Ciudad">Ciudad</label>
                <select name="cboCiudad" class="form-control" id="cboCiudad"  ></select>
            </div>
            <div class="form-group">
                <label for="Vivienda">Tipo de Vivienda</label>
                <select name="cboVivienda" class="form-control" id="cboVivienda"  >
                <option value="0">Seleccione</option>
                <option value="1">Casa Con Patio Grande</option>
                <option value="2">Casa con patio pequeño</option>
                <option value="3">Casa sin patio</option>
                <option value="4">Departamento</option>
            </select>
            </div>
          
            //<input type="submit" value="enviar">
            <p>¿Ya tienes una cuenta? <a href="../Vistas/login.html">Ingresa Aqui </a></p>

        </form>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <script>
           /* jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });*/
            $().ready(function () {
                // validate the comment form when it is submitted            
                $("#formulario").validate({
                    rules: {
                        txtRun : { required :true
                                } ,
                        cboCiudad: {
                            required: true                    
                        },                   
                        txtNombre:{
                            required: true
                        },
                        txtCorreo:{
                            required: true,
                            email: true
                        },txtTelefono:{
                            required: true
                        },
                        cboRegion: {
                            required: true
                        },
                        cboVivienda: {
                            required: true
                        },
                        dtpFecha: {
                            required: true
                            
                        }                    
                    },
                    messages: {
                        txtRun: {
                            required: "Este Campo es Obligatorio"
                        },
                        txtCorreo: {
                            required: "Este Campo es Obligatorio",
                            email: "Email Invalido"
                        },
                        txtNombre: {
                            required: "Este Campo es Obligatorio"
                            
                        },
                        txtTelefono: {
                            required: "Este Campo es Obligatorio"
                        },
                        cboRegion: {
                            required: "Este Campo es Obligatorio"
                        },
                        cboCiudad: {
                            required: "Este Campo es Obligatorio"
                        },
                        cboVivienda: {
                            required: "Este Campo es Obligatorio"
                        },
                        dtpFecha: {
                            required: "Este Campo es Obligatorio"
                        }
                    }
                });
            });
        </script>
</body>
</html>