<?php
    include("conexion.php");
    $con=conectar();

$dni=$_POST['dni'];
$nacionalidad=$_POST['nacionalidad'];
$nombres=$_POST['nombres'];
$apellido=$_POST['apellido'];
$Tipodehabitacion=$_POST['Tipodehabitacion'];


$sql="UPDATE habitaciones SET  dni='$dni', nacionalidad='$nacionalidad', nombres='$nombres',apellido='$apellido', Tipodehabitacion= '$Tipodehabitacion' WHERE dni='$dni'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: habitaciones.php");
    }
?>  