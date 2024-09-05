<?php
include('conexion.php');

if (isset($_POST['send'])) {
    // Validación de todos los campos
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        // Limpieza de las entradas del formulario
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje)
        VALUES ('$name', '$phone','$email','$message')";
        $resultado = mysqli_query($conex,$consulta);

        // Aquí puedes agregar la lógica para insertar los datos en la base de datos o procesarlos
        // Por ejemplo:
        // $query = "INSERT INTO contactos (nombre, telefono, email, mensaje) VALUES ('$name', '$phone', '$email', '$message')";
        // $resultado = mysqli_query($conexion, $query);
        
        echo "Datos enviados correctamente.";
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>;
