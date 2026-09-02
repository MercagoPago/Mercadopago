
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Formatear la información
    $fecha = date("Y-m-d H:i:s");
    $contenido = "Fecha: $fecha \nNombre: $nombre \nEmail: $email \nMensaje: $mensaje \n-------------------------\n";

    // Guardar en el archivo .txt (FILE_APPEND para añadir sin sobreescribir)
    file_put_contents("datos.txt", $contenido, FILE_APPEND);

    // Mensaje de éxito
    echo "¡Datos guardados con éxito! <a href='formulario.html'>Volver</a>";
} else {
    echo "Acceso no válido.";
}
?>
