<?php
//Conectar a BD
$con = mysqli_connect("127.0.0.1","pma","","usuarios");

//Guardar valores formulario
$formName = $_POST['name']; 
$formSurname = $_POST['surname']; 
$formPhone = $_POST['phone'];
$formSuscription = $_POST['suscription'];


//Guardar datos en BD
$sql = "INSERT INTO misusuarios VALUES ($formName', '$formSurname', '$formPhone', '$formSuscription')";




?>
