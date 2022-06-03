<?php 

include("db.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['usuarios']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['correo']) >= 1&& strlen($_POST['password']) >= 1) {
	    $name = trim($_POST['usuarios']);
	    $apellido = trim($_POST['lastname']);
        $email = trim($_POST['correo']);
        $contrasena = trim($_POST['password']);
	    $consulta = "INSERT INTO users(`usuarios`, `lastname`, `correo`, `password`) VALUES ('$name','$apellido,'$email','$contrasena')";
		
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
        
}
 
?>