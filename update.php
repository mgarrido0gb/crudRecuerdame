<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$nota=$_POST['nota'];


$sql="UPDATE persona SET  id='$id',nombre='$nombre',nota='$nota' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: persona.php");
    }
?>