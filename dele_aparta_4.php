<?php

$conexion = mysqli_connect("localhost", "root", "", "renta2");
$id=$_GET["id"];

$sql="DELETE FROM info_apartamento_4 WHERE id_info_apartamento ='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: info_aparta_4.php");
}else{

}

?>