



<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mis Perris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/estilo.css" />
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>


<?php
// recuperar los datos desde el formulario

$correo=$_POST["txtCorreo"];
$run_postulante=$_POST["txtRun"];
$nombre=$_POST["txtNombre"];
$fecha_nacimiento=$_POST["dtpFecha"];
$telefono=$_POST["txtTelefono"];
$ciudad=$_POST["cboCiudad"];
$region=$_POST["cboRegion"];
$tipo_vivienda=$_POST["cboVivienda"];

include_once '../Controlador/conexion.php';
include_once '../Controlador/DaoFormulario.php';
include_once '../modelo/Formulario.php';

$form=new Formulario();
$form->setRun_postulante($run_postulante);
$form->setNombre($nombre);
$form->setFecha_nacimiento($fecha_nacimiento);
$form->setTelefono($telefono);
$form->setCiudad($ciudad);
$form->setRegion($region);
$form->setTipo_vivienda($tipo_vivienda);
$form->setCorreo($correo);

$dao=new DaoFormulario();
$resp=$dao->Crear($form);

if ($resp>0) {
    
    echo '<script> alert("Agregado");document.location.href="../Vistas/index.html"</script>';
}else{
    echo alert("No Agregado");
}



?>
