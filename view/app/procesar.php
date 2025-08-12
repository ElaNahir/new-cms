<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="web description">
    <meta name="keywords" content="keys, to, seo">
    <meta name="author" content="elanahir.com">

</head>

<body>


<?php

function limpiarDatos($data) {
    $data = trim($data);  // Limipar espacios
    $data = stripslashes($data);  // Limpiar posibles comillas
    $data = htmlspecialchars($data);  // Limpiar caracteres especiales que pueden dar problemas
    return $data;
}



// Array de errores
$errores = [];

// Validar cada campo
if($_SERVER["REQUEST_METHOD"] == "POST") {    // Hacer petición al servidor que tenga el método POST
   
    // Nombre
    if(empty($_POST["nombre"]))  {        // Si el contenido que me llega del input nombre a través del método POST está vacío, muestra el error 1
        $errores["nombre"] = "El nombre es obligatorio";
    } else {
        $nombre = limpiarDatos($_POST["nombre"]);  // Además, aplica la función de limpiarDatos a los datos de nombre que llegan por POST
        if (strlen($nombre) < 2) {                 // Y si una vez limpios, su string length es menos de dos, muestra el error 2 
             $errores ["nombre"] = "El nombre debe tener al menos 2 caracteres";
        }
    }

    // Apellidos
    if(empty($_POST["apellidos"]))  {        // Si el contenido que me llega del input apellidos a través del método POST está vacío, muestra el error 1
        $errores["apellidos"] = "Los apellidos son obligatorio";
    }else {
        $apellidos = limpiarDatos($_POST["apellidos"]);  // Además, aplica la función de limpiarDatos a los datos de apellidos que llegan por POST 
    }

    // Teléfono
    if(empty($_POST["telefono"]))  {        
        $errores["telefono"] = "El telefono es obligatorio";
    } else {
        $telefono = limpiarDatos($_POST["telefono"]);  
        if (!preg_match ("/^[0-9]{9}$/", $telefono)) {     // Si el teléfono NO coincide con el mismo patrón regular (preg_match), muestra el error          
             $errores ["telefono"] = "El teléfono debe tener 9 dígitos";
        }
    }

    //Email
    if(empty($_POST["email"]))  {        
        $errores["email"] = "El email es obligatorio";
    } else {
        $email = limpiarDatos($_POST["email"]);  
        if (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {  // Filter_var tiene sus propios argumentos internos e identifica el patrón que debe seguir un correo electrónico     
             $errores ["email"] = "Introduce un email válido";
        }
    }

    // Nivel de estudios
    if(empty($_POST["estudios"]))  {        
        $errores["estudios"] = "Selecciona un nivel de estudios";
    }else {
        $estudios = limpiarDatos($_POST["estudios"]);  
    }

        // Cambio de residencia
     if(empty($_POST["cambio_residencia"]))  {     
        $errores["cambio_residencia"] = "Selecciona una opción";
    }else {
        $cambio_residencia = limpiarDatos($_POST["cambio_residencia"]);  
    }

    // Skills
     if(empty($_POST["skills"]))  {     
        $errores["skills"] = "Selecciona por lo menos una habilidad";
    } else {
        $skills = $_POST["skills"];
        // Validar cada skill de forma individual
        foreach ($skills as $skill){
        $skill = limpiarDatos($skill); 
        }
    }

    // Biografia
    if(empty($_POST["bio"]))  {     
        $errores["bio"] = "El resumen biográfico es obligatorio";
    } else {
        $bio = limpiarDatos($_POST["bio"]);
        if (strlen($bio) < 50) {                
             $errores ["bio"] = "El resumen debe tener al menos 50 caracteres";
        }
    }

    // Si no hay errores, se procesan los datos
    if(empty($errores)) {
        // Guardar datos en la base de datos, enviar un email con los datos...

        // Mostrar los datos en pantalla
        echo "<h1>Solicitud recibida correctamente:</h1>";

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellidos:</strong> $apellidos</p>";
        echo "<p><strong>Teléfono:</strong> $telefono</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Nivel de estudios:</strong> $estudios</p>";
        echo "<p><strong>Cambio de residencia:</strong> $cambio_residencia</p>";
        echo "<p><strong>Habilidades: </strong>" . implode(", ", $skills) . "</p>";  // Añade una coma (,) entre todos los elementos del array skills
        echo "<p><strong>Resumen biográfico:</strong>". nl2br($bio) ."</p>";     // Añade saltos de línea si los hay

        exit();
    }
}
?>

</body>
</html>