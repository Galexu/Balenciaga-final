<?php
include("codigo_login.php");
include("header.php");
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "Usuario o contraseña incorrectos.";
}
?>
<div class="div_principal_login">
    <div class="div_login_izq"></div>
    <div class="div_login_med">

        <div><span class="h1falso">INICIAR SESIÓN</span></div>
        <div class="div_logeo bot">
            <form action="codigo_login.php" method="post" class="formn" id="formulario">
                <label class="texto_form" for="input_correo">Usuario*</label><br>
                <input type="text" name="usuario" id="input_correo" required><br>
                <label class="texto_form" for="input_password">Contraseña*</label><br>
                <input type="password" name="password" id="input_password" required><br><br>
                <button type="submit" id="siguiente_form">Siguiente</button>
                <div class="perfil"><a href="registro.php">Crear un perfil</a></div>
            </form>
        </div>
    </div>
    <div class="div_login_der"></div>
</div>
<?php include("footer.php");
?>