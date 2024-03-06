<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $cp = $_POST["cp"];
    $provincia = $_POST["provincia"];

    $servername = "localhost";
    $dbname = "tienda_gabriel";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $sql = "INSERT INTO Usuarios (nombre, contrasena, correo, telefono, direccion, codigo_postal, provincia, rol)
              VALUES (:nombre, :contrasena, :correo, :telefono, :direccion, :codigo_postal, :provincia, :rol)";
      $stmt = $conn->prepare($sql);
      $rol = "cliente";
      $stmt->bindParam(":nombre", $usuario);
      $stmt->bindParam(":contrasena", $contrasena);
      $stmt->bindParam(":correo", $email);
      $stmt->bindParam(":telefono", $telefono);
      $stmt->bindParam(":direccion", $direccion);
      $stmt->bindParam(":codigo_postal", $cp);
      $stmt->bindParam(":provincia", $provincia);
      $stmt->bindParam(":rol", $rol);
      $stmt->execute();
      header("Location: index.php");
  } catch(PDOException $e) {
      echo "Error al registrar el usuario: " . $e->getMessage();
  }
  $conn = null;
}
?>