<?php
include('db.php');

// SE CAPTURAN LOS DATOS DEL FORMULARIO
$username = $_POST['usernamelog'];
$password = $_POST['passwordlog'];

// SE INICIA SESIÓN
$consulta = "SELECT * FROM `usuarios` WHERE usuario_username='$username' AND usuario_contraseña='$password'";

$resultados = mysqli_query($conn, $consulta);
$filas = mysqli_num_rows($resultados);

if ($filas) {
    session_start();
    $_SESSION['username'] = $username;
    header("location:index.php");
} else {
    echo '<script>
            alert("DATOS INCORRECTOS");
            window.history.go(-1);
          </script>';
}

mysqli_free_result($resultados);
mysqli_close($conn);
?>
