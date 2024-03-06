<?php session_start();
$paginaActual = basename($_SERVER['PHP_SELF']);
$claseHeader = ($paginaActual == 'login.php' || $paginaActual == 'contacto.php') ? 'header_login' : 'header';
$servername = "localhost";
$username = "root";
$password = "";
$database = "tienda_gabriel";

$conexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST["usuario"];
  $contrasena = $_POST["password"];
  try {
      $sql = "SELECT * FROM Usuarios WHERE nombre = :nombre";
      $stmt = $conexion->prepare($sql);
      $stmt->bindParam(":nombre", $usuario);
      $stmt->execute();
      
      if ($stmt->rowCount() == 1) {
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $contrasenaGuardada = $row['contrasena'];

          if ($contrasena == $contrasenaGuardada ) {
              $fecha = date("Y-m-d H:i:s");
              $resultado = "éxito";

              $sql1 = "INSERT INTO intento_accesos (fecha, usuario, resultado) VALUES (:fecha, :usuario, :resultado)";
              $stmt1 = $conexion->prepare($sql1);
              $stmt1->bindParam(":fecha", $fecha);
              $stmt1->bindParam(":usuario", $usuario);
              $stmt1->bindParam(":resultado", $resultado);
              $stmt1->execute();

              $_SESSION['usuario'] = $usuario;
              $_SESSION['login'] = true;
              $usuario = $_SESSION['usuario'];
              $sql = "SELECT rol FROM usuarios WHERE nombre = :nombre";
              $stmt = $conexion->prepare($sql);
              $stmt->bindParam(":nombre", $usuario);
              $stmt->execute();
      
              $row = $stmt->fetch(PDO::FETCH_ASSOC);
              $rol = $row['rol'];
              $_SESSION['rol'] = $rol;
              header("Location: index.php");
              exit();
          }
      }
      $fecha = date("Y-m-d H:i:s");
      $resultado = "fallido";

      $sql1 = "INSERT INTO intento_accesos (fecha, usuario, resultado) VALUES (:fecha, :usuario, :resultado)";
      $stmt1 = $conexion->prepare($sql1);
      $stmt1->bindParam(":fecha", $fecha);
      $stmt1->bindParam(":usuario", $usuario);
      $stmt1->bindParam(":resultado", $resultado);
      $stmt1->execute();

      header("Location: login.php?error=1");
      exit();
  } catch (PDOException $e) {
      echo "Error al iniciar sesión: " . $e->getMessage();
  }
  $conexion = null;
}


$jsonData = file_get_contents('php://input');
$_SESSION['productoId'] = $jsonData;