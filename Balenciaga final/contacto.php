<?php
include("codigo_login.php");
include("header.php");
?>


<div class="div_contacto">
    <div class="contacto_iz">
    </div>
    <div class="contacto_der"></div>
    <div class="contacto_cliente">
        <span class="texto_asis texto">ASISTENCIA AL CLIENTE</span><br>
        <div class="texto lll">
            <p>Nuestro Servicio de Atención al Cliente está disponible para ayudarle con sus consultas relativas a
                pedidos en línea. Al ponerse en contacto con el Servicio de Atención al Cliente, acepta que sus datos se
                transfieran fuera de su país/región local.
            </p>
            <p>
                Nuestro Servicio de Atención al Cliente permanecerá excepcionalmente cerrado en la siguiente fecha:
            </p>
            <p>
                Lunes 10 de abril de 2023 - Lunes de Pascua
            </p>
        </div>

    </div>
    <div class="contacto_mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12148.161620029032!2d-3.6849569!3d40.4301042!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422895b15598fb%3A0xf4dce2c2335b4656!2sBALENCIAGA%20Madrid%20Lagasca!5e0!3m2!1ses!2ses!4v1682954119901!5m2!1ses!2ses"
            width="90%" height="90%" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contacto_faq">
        <div class="div_faq">
            <span class="texto_ttt">PREGUNTAS FRECUENTES</span>
            <span>Respuestas a las preguntas más frecuentes</span>
            <button href="" class="nnn">VER LAS FAQ</button>
        </div>
        <div class="div_faq">
            <span class="texto_ttt"> LLÁMENOS</span>
            <span>Lun-Sab 9:30-19:00</span>
            <button href="" class="nnn">+34 911 78 47</button>
        </div>
        <div class="div_faq">
            <span class="texto_ttt">ESCRÍBANOS CORREO ELECTRÓNICO</span>
            <form method="post" action="codigo_login.php" class="div_faq">
                <textarea class="texto_ttt yyy" id="mensaje" name="mensaje"></textarea>
                <input class="nnn" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</div>


<?php

include("footer.php");
?>