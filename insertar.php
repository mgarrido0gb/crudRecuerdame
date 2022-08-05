<?php
    include("conexion.php");
    $con=conectar();

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $nota=$_POST['nota'];

    $sql="INSERT INTO persona VALUES('$id','$nombre','$nota')";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: persona.php");
    }else{
        
    }

?>