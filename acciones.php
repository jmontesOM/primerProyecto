
<?php
include('config.php');





//Guardar valores formulario
$formName=$_POST['name']; 
$formSurname=$_POST['surname']; 
$formPhone=$_POST['phone'];



//Guardar datos en BD

 
    $sql = "INSERT INTO misusuarios (names, surname, phone) VALUES ('$formName', '$formSurname', '$formPhone')";
    mysqli_query($con, $sql);



?>
