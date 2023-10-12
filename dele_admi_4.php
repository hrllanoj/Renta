<?php

$conexion = mysqli_connect("localhost", "root", "", "renta2");
$id=$_GET["id"];

$sql="DELETE FROM info_administracion_4 WHERE id_info_administracion ='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: info_admi_4.php");
}else{

}

?>