<?php
include('php/bd.php');
conectar();


$nombre=$_POST["nombre"];
$mision=$_POST["mision"];
$vision=$_POST["vision"];
$perfil_egresado=$_POST["perfil_egresado"];


  $tirasql2="INSERT INTO programa VALUES ('', '$nombre', '$mision', '$vision', '$perfil_egresado')";
        $b=mysql_query($tirasql2);

     if (!$b){

                echo "no se inserto la programa";
            }

    else
        echo "se inserto la programa";   



?>