<?php
include('bd.php');
conectar();


$userName=$_POST["userName"];
$userEmail=$_POST["userEmail"];
$userPhone=$_POST["userPhone"];
$userMsg=$_POST["userMsg"];


 $tirasql="INSERT INTO contacto VALUES ('$userName', '$userEmail', '$userPhone', '$userMsg','')";
        mysql_query($tirasql);



?>