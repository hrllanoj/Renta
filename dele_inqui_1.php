<?php

$conexion = mysqli_connect("localhost", "root", "", "renta2");
$id=$_GET["id"];

$sql="DELETE FROM info_inquilino WHERE id_info_inquilino ='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: info_inqui_1.php");
}else{

}

?>