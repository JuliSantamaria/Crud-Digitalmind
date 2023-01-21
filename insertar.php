<?php
include("conexion.php");
$con=conectar();

$dni=$_POST['dni'];
$nacionalidad=$_POST['nacionalidad'];
$nombres=$_POST['nombres'];
$apellido=$_POST['apellido'];
$Tipodehabitacion=$_POST['Tipodehabitacion'];
$nrodereserva=$_POST['nrodereserva'];

$sql="INSERT INTO habitaciones VALUES('$dni','$nacionalidad','$nombres','$apellido','$Tipodehabitacion', '$nrodereserva')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: habitaciones.php");
    
}else {
}
?>