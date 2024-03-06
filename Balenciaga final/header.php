<!DOCTYPE html>
<head lang="es">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./estilos/style.css" />
    <link rel="stylesheet" href="./estilos/login_style.css" />
    <link rel="stylesheet" href="./estilos/novedades_style.css">
    <link rel="stylesheet" href="./estilos/contacto_style.css">
    <link rel="stylesheet" href="./estilos/registro_style.css">
    <link rel="stylesheet" href="./estilos/producto_style.css">
    <link rel="stylesheet" href="./estilos/cesta_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>BALENCIAGO</title>
</head>
<body>
    <div class="capa"></div>
    <div class="<?=$claseHeader?>">
        <div class="div_barra_menu">
            <div class="div_links">
                <nav>
                    <ul class="ul_links">
                        <li class="li_links">
                            <a class="nav_links asd"><span class="texto">NOVEDADES</span></a>
                        </li>
                        <li class="li_links">
                            <a class="nav_links"><span class="texto">HOMBRE</span></a>
                        </li>
                        <li class="li_links">
                            <a class="nav_links"><span class="texto">MUJER</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="div_logo">
                <a href="index.php" class="a_logo"><img src="./imagenes/logo.svg" alt="logo" class="logo" /></a>
            </div>
            <div class="div_logearse">
                <a href="contacto.php" target="" class="a_logearse">
                    <span class="texto">
                        CONTACTO
                    </span>
                </a>
                <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                <a href="perfil.php?rol=<?=$_SESSION['rol']?>" target="" class="a_logearse">
                    <span class="texto" class="ayudaa">
                        <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario']:''; ?>
                        <a href="index.php?logout=true" class="a_logearse">
                            <span class="texto">CERRAR SESSION</span>
                        </a>
                        <?php
                            } else { ?>
                        <a href="login.php" target="" class="a_logearse">
                            <span class="texto">
                                INICIAR SESION
                            </span>
                        </a>
                        <?php } ?>
                    </span>
                </a>
                <button type="submit" class="button_cesta" id="boton_cesta">
    <img src="./imagenes/cesta.png" alt="icono_cesta" class="img_cesta" />
</button>

            </div>
        </div>

        <div class="menu_oculto_novedades">
            <div class="div_menu_oculto_novedades">
                <div class="div_menu_oculto_1"><a href="novedades.php?categoria=mujer" class="a_oculto"><span
                            class="menu_oculto_texto">NOVEDADES -
                            MUJER</span></a></div>
                <div class="div_menu_oculto_2"><a href="novedades.php?categoria=hombre" class="a_oculto"><span
                            class="menu_oculto_texto">NOVEDADES -
                            HOMBRE</span></a></div>
                <div class="div_menu_oculto_3">
                    <a href="novedades.php?categoria=discover" class="a_oculto"><span
                            class="menu_oculto_texto">DISCOVER</span><br></a>
                    <a href="" class="texto_menu_oculto">Verano 23 Mujer</a><br>
                    <a href="" class="texto_menu_oculto">Verano 23 Hombre</a><br>
                    <a href="" class="texto_menu_oculto">High Summer Bags</a><br>
                    <a href="" class="texto_menu_oculto">Garde-Robe</a><br>
                    <a href="" class="texto_menu_oculto">Le cagole</a><br>
                    <a href="" class="texto_menu_oculto">Kids</a><br>
                </div>
                <div class="div_menu_oculto_4">
                    <a href="" class="menu_oculto_texto llamenos_num">LLÀMENOS <span class="llamenos"> +34 9 11 98 78
                            47</a><br>
                    <span class="texto_menu_horario">Lun - Sabe 9:30 - 7:00</span><br>
                    <a href="" class="menu_oculto_texto llamenos_num"><span>CONCERTAR UNA CITA</span></a><br>
                    <span class="texto_menu_horario">La tienda le contestara en breve</span>
                </div>
                <div class="div_menu_oculto_5"><a><span></span></a></div>
                <div class="div_menu_oculto_6"><a><span></span></a></div>
            </div>
        </div>

        <div class="menu_oculto_hombre">
            <div class="div_menu_oculto_novedades">
                <div class="div_menu_oculto_1_hombre">
                    <a href="novedades.php?categoria=hombre" class="a_oculto"><span
                            class="menu_oculto_texto bbb">ROPA</span></a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo </a>
                    <a href="" class="texto_menu_oculto">Novedades</a>
                    <a href="" class="texto_menu_oculto">adidas</a>
                    <a href="" class="texto_menu_oculto">Garde-Robe</a>
                    <a href="" class="texto_menu_oculto jjj">Abrigos y Chaquetas</a>
                    <a href="" class="texto_menu_oculto">Sudaderas</a>
                    <a href="" class="texto_menu_oculto">Camisetas</a>
                    <a href="" class="texto_menu_oculto">Punto</a>
                    <a href="" class="texto_menu_oculto">Camisas</a>
                    <a href="" class="texto_menu_oculto">Pantalones</a>
                    <a href="" class="texto_menu_oculto">Activewear</a>
                    <a href="" class="texto_menu_oculto">Trajes de baño</a>
                    <a href="" class="texto_menu_oculto">Ropa interior</a>
                </div>
                <div class="div_menu_oculto_2_hombre">
                    <a href="novedades.php?categoria=hombre" class="a_oculto"><span
                            class="menu_oculto_texto bbb">ZAPATOS</span></a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo</a>
                    <a href="" class="texto_menu_oculto">Novedades</a>
                    <a href="" class="texto_menu_oculto">adidas</a>
                    <a href="" class="texto_menu_oculto jjj">Zapatillas</a>
                    <a href="" class="texto_menu_oculto">Botas y Zapatos</a>
                    <a href="" class="texto_menu_oculto">Sandalias y Mules</a>
                    <a href="" class="texto_menu_oculto jjj">Runner</a>
                    <a href="" class="texto_menu_oculto">Speed</a>
                    <a href="" class="texto_menu_oculto">Triple S</a>
                    <a href="" class="texto_menu_oculto">Track</a>
                    <a href="" class="texto_menu_oculto">Defender</a>
                    <a href="" class="texto_menu_oculto">Crocs</a>

                </div>
                <div class="div_menu_oculto_3_hombre">
                    <a href="novedades.php?categoria=hombre" class="a_oculto"><span
                            class="menu_oculto_texto bbb">BOLSOS</span></a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo</a>
                    <a href="" class="texto_menu_oculto">Novedades</a>
                    <a href="" class="texto_menu_oculto">adidas</a>
                    <a href="" class="texto_menu_oculto jjj">Bolsos y Totes</a>
                    <a href="" class="texto_menu_oculto">Mochilas</a>
                    <a href="" class="texto_menu_oculto">Riñoneras</a>
                    <a href="" class="texto_menu_oculto">Bolsos bandolera y mensajero</a>
                    <a href="" class="texto_menu_oculto jjj">Le Cagole</a>
                    <a href="" class="texto_menu_oculto">Explorer</a>
                    <a href="" class="texto_menu_oculto">Army</a>
                    <a href="" class="texto_menu_oculto">Car</a>
                    <a href="" class="texto_menu_oculto">Everyday</a>
                </div>
                <div class="div_menu_oculto_4_hombre">
                    <a href="" class="texto_menu_oculto bbb">PEQUEÑA MARROQUINERíA</a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo</a>
                    <a href="" class="texto_menu_oculto">Carteras</a>
                    <a href="" class="texto_menu_oculto">Tarjeteros</a>
                    <a href="" class="texto_menu_oculto">Clutches y Bolsitos</a>
                    <a href="" class="texto_menu_oculto jjj">Cash</a>
                    <a href="" class="texto_menu_oculto">Car</a>
                    <a href="" class="texto_menu_oculto">Explorer</a>
                </div>
                <div class="div_menu_oculto_5_hombre">
                    <a href="" class="texto_menu_oculto bbb">ACCESORIOS</a>
                    <a href="" class="texto_menu_oculto kkk">Gafas</a>
                    <a href="" class="texto_menu_oculto">Cinturones</a>
                    <a href="" class="texto_menu_oculto">Bufandas y Gorras</a>
                    <a href="" class="texto_menu_oculto">Calcetines</a>
                    <a href="" class="texto_menu_oculto">Accesorios para el teléfono y Llaveros</a>
                    <a href="" class="texto_menu_oculto">Home wear</a>
                    <a href="" class="texto_menu_oculto">Objects</a>
                    <a href="" class="texto_menu_oculto jjj">Joyas</a>
                    <a href="" class="texto_menu_oculto">Pendientes</a>
                    <a href="" class="texto_menu_oculto">Pulseras y Anillos</a>
                    <a href="" class="texto_menu_oculto">Collares</a>
                </div>
                <div class="div_menu_oculto_6_hombre">
                    <a href="" class="menu_oculto_texto llamenos_num">LLÀMENOS <span class="llamenos"> +34 9 11 98 78
                            47</a><br>
                    <span class="texto_menu_horario">Lun - Sabe 9:30 - 7:00</span><br>
                    <a href="" class="menu_oculto_texto llamenos_num"><span>CONCERTAR UNA CITA</span></a><br>
                    <span class="texto_menu_horario">La tienda le contestara en breve</span>
                </div>
            </div>
        </div>

        <div class="menu_oculto_mujer">
            <div class="div_menu_oculto_novedades">
                <div class="div_menu_oculto_1_mujer">
                    <a href="novedades.php?categoria=mujer" class="a_oculto"><span
                            class="menu_oculto_texto bbb">ROPA</span></a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo </a>
                    <a href="" class="texto_menu_oculto">Novedades</a>
                    <a href="" class="texto_menu_oculto">adidas</a>
                    <a href="" class="texto_menu_oculto">Garde-Robe</a>
                    <a href="" class="texto_menu_oculto jjj">Abrigos y Chaquetas</a>
                    <a href="" class="texto_menu_oculto">Sudaderas</a>
                    <a href="" class="texto_menu_oculto">Camisetas</a>
                    <a href="" class="texto_menu_oculto">Punto</a>
                    <a href="" class="texto_menu_oculto">Camisas</a>
                    <a href="" class="texto_menu_oculto">Pantalones</a>
                    <a href="" class="texto_menu_oculto">Vestidos y faldas</a>
                    <a href="" class="texto_menu_oculto">Activewear</a>
                    <a href="" class="texto_menu_oculto">Trajes de baño</a>
                    <a href="" class="texto_menu_oculto">Ropa interior</a>
                </div>
                <div class="div_menu_oculto_2_mujer">
                    <a href="novedades.php?categoria=mujer" class="a_oculto"><span
                            class="menu_oculto_texto bbb">ZAPATOS</span></a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo</a>
                    <a href="" class="texto_menu_oculto">Novedades</a>
                    <a href="" class="texto_menu_oculto">High Summer</a>
                    <a href="" class="texto_menu_oculto">adidas</a>
                    <a href="" class="texto_menu_oculto jjj">Zapatillas</a>
                    <a href="" class="texto_menu_oculto">Botas y Botines</a>
                    <a href="" class="texto_menu_oculto">Zapatos de Tacón</a>
                    <a href="" class="texto_menu_oculto">Sandalias y Mules</a>
                    <a href="" class="texto_menu_oculto jjj">Runner</a>
                    <a href="" class="texto_menu_oculto">Speed</a>
                    <a href="" class="texto_menu_oculto">Triple S</a>
                    <a href="" class="texto_menu_oculto">Track</a>
                    <a href="" class="texto_menu_oculto">Crocs</a>

                </div>
                <div class="div_menu_oculto_3_mujer">
                    <a href="novedades.php?categoria=mujer" class="a_oculto"><span
                            class="menu_oculto_texto bbb">BOLSOS</span></a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo</a>
                    <a href="" class="texto_menu_oculto">Novedades</a>
                    <a href="" class="texto_menu_oculto">adidas</a>
                    <a href="" class="texto_menu_oculto jjj">Bolsos de mano</a>
                    <a href="" class="texto_menu_oculto">Bolsos de hombro</a>
                    <a href="" class="texto_menu_oculto">Bolsos mini</a>
                    <a href="" class="texto_menu_oculto">Bolsos con cadena</a>
                    <a href="" class="texto_menu_oculto">Bolsos tote</a>
                    <a href="" class="texto_menu_oculto jjj">Hourglass</a>
                    <a href="" class="texto_menu_oculto">Le Cagole</a>
                    <a href="" class="texto_menu_oculto">Crush</a>
                    <a href="" class="texto_menu_oculto">Downtown</a>
                </div>
                <div class="div_menu_oculto_4_mujer">
                    <a href="" class="texto_menu_oculto bbb">PEQUEÑA MARROQUINERíA</a>
                    <a href="" class="texto_menu_oculto kkk">Ver todo</a>
                    <a href="" class="texto_menu_oculto">Carteras con cadena</a>
                    <a href="" class="texto_menu_oculto">Carteras</a>
                    <a href="" class="texto_menu_oculto">Tarjeteros</a>
                    <a href="" class="texto_menu_oculto">Clutches y Bolsitos</a>
                    <a href="" class="texto_menu_oculto jjj">Hourglass</a>
                    <a href="" class="texto_menu_oculto">Envelope</a>
                    <a href="" class="texto_menu_oculto">Cash</a>
                </div>
                <div class="div_menu_oculto_5_mujer">
                    <a href="" class="texto_menu_oculto bbb">ACCESORIOS</a>
                    <a href="" class="texto_menu_oculto kkk">Gafas</a>
                    <a href="" class="texto_menu_oculto">Cinturones</a>
                    <a href="" class="texto_menu_oculto">Bufandas y Gorras</a>
                    <a href="" class="texto_menu_oculto">Calcetines y Medias</a>
                    <a href="" class="texto_menu_oculto">Accesorios para el teléfono y Llaveros</a>
                    <a href="" class="texto_menu_oculto">Accesorios para el pelo</a>
                    <a href="" class="texto_menu_oculto">Home Wear</a>
                    <a href="" class="texto_menu_oculto">Objects</a>
                    <a href="" class="texto_menu_oculto jjj">Joyas</a>
                    <a href="" class="texto_menu_oculto">Pendientes</a>
                    <a href="" class="texto_menu_oculto">Pulseras y Anillos</a>
                    <a href="" class="texto_menu_oculto">Collares</a>
                </div>
                <div class="div_menu_oculto_6_mujer">
                    <a href="" class="menu_oculto_texto llamenos_num">LLÀMENOS <span class="llamenos"> +34 9 11 98 78
                            47</a><br>
                    <span class="texto_menu_horario">Lun - Sabe 9:30 - 7:00</span><br>
                    <a href="" class="menu_oculto_texto llamenos_num"><span>CONCERTAR UNA CITA</span></a><br>
                    <span class="texto_menu_horario">La tienda le contestara en breve</span>
                </div>
            </div>
        </div>





        <?php
    if ($paginaActual != 'login.php' && $paginaActual != 'contacto.php') {
    ?>
        <div class="div_barra_busqueda">
            <button type="submit">
                <img src="./imagenes/lupa.png" alt="lupa" class="img_barra_busqueda" />
            </button>
            <input type="search" spellcheck="false" name="busqueda" class="input_barra_busqueda"
                placeholder="¿QUÉ BUSCA?" />
        </div>

        <?php
    }
    
    ?>
    </div>