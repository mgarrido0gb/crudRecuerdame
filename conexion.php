<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="1234";

    //nombre de la bdd
    $bd="recuerdame";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}

//XAMPP 3.3.0
?>
