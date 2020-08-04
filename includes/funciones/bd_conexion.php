<?php
 $conn=new mysqli('localhost', 'root','aranda22', 'proyectoconferencia');

 if($conn->connect_error){
     echo $error -> $conn->connect_error;
 }
?>