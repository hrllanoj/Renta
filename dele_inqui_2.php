<?php

$conexion = mysqli_connect("localhost", "root", "", "renta2");
$id=$_GET["id"];

$sql="DELETE FROM info_inquilino_2 WHERE id_info_inquilino ='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: info_inqui_2.php");
}else{

}

?>