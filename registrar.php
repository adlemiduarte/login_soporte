<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $sistema = $_POST['sistema'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO prospectos (nombre, correo, sistema_interes, mensaje) 
            VALUES ('$nombre', '$correo', '$sistema', '$mensaje')";

    if (mysqli_query($conexion, $sql)) {
        echo "<script>
                alert('Solicitud enviada con éxito. Un consultor te contactará.');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    
    mysqli_close($conexion);
}
?>