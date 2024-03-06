<?php
include("codigo_login.php");
include("header.php");
?>


<div class="container_regis">
    <div class="regis_izq"></div>
    <div class="regis_der"></div>
    <div class="regis_med">
        <form method="post" action="guardar.php" class="formu">
            <label class="texto_form" for="usuario"><span class="registroUsuario">Usuario</span></label>
            <input type="text" id="usuario" name="usuario">
            <br>
            <label class="texto_form" for="contrasena" class="registroPass">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena">
            <br>
            <label class="texto_form" for="email">Email:</label>
            <input type="email" id="email" name="email">
            <br>
            <label class="texto_form" for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono">
            <br>
            <label class="texto_form" for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion">
            <br>
            <label class="texto_form" for="cp">Código Postal:</label>
            <input type="text" id="cp" name="cp">
            <br>
            <label class="texto_form" for="provincia">Provincia:</label>
            <input type="text" id="provincia" name="provincia">
            <br>
            <button type="submit" id="siguiente_registro">Registrarse</button>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>