<?php 
    session_start();

    $mensaje = $_SESSION['mensaje']??'';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PatriciaDev</title>
    <!-- Estilo -->
    <link rel="stylesheet" href="estilo.css">
    <!-- Link RemixIcons -->
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Noto+Serif+Toto:wght@400;500;600;700&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;600&family=Delicious+Handrawn&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Noto+Serif+Toto:wght@400;500;600;700&family=Raleway:ital,wght@0,500;0,600;0,700;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;600&family=Anton&family=Delicious+Handrawn&family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Noto+Serif+Toto:wght@400;500;600;700&family=Raleway:ital,wght@0,500;0,600;0,700;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="preloader"></div>
    <div id="container">
        <div class="container-uno"   id="inicio">
                    <nav class="menu">
                        <label class="logo">
                            PatriciaDev
                            <i class="ri-code-s-slash-line"></i>
                        </label>

                        <ul class="menu_items">
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#patricia-dev">PatriciaDev</a></li>
                            <li><a href="#lo-que_hacemos">Lo que hacemos</a></li>
                            <li><a href="#lo-que_hicimos">Lo que hicimos</a></li>
                            <li><a href="#preguntas-frecuentes">Preguntas Frecuentes</a></li>
                            <li class="active"><a href="#contacto">Contáctanos</a></li>
                        </ul>
                        <span class="btn_menu">
                            <i class="ri-archive-drawer-fill"></i>
                        </span>
                    </nav>
                    
            </header>
    
           <div class="container-cover">
            <div class="container-info-cover">
                <h1>¡Hola!</h1>
                <div class="contenedor-texto">
    
                    <!-- <h2 class="titulo">Somos un laboratorio <br> de: <span class="typed"></span></h2> -->
    
                    <h2 class="titulo">
                         <span class="typed"></span>
                    </h2>
    
                    <div class="titulo" id="cadenas-texto">
                        <p>Somos un laboratorio <br> de: <i class="text">creatividad</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">amigos</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">magia</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">pasión</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">ideas</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">negocios</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">empresas</i></p>
                        <p>Somos un laboratorio <br> de: <i class="text">emprendimientos y más</i></p>
                    </div>
                </div>
                <!-- <div class="btn">
                      <a href="#contacto">Descubre</a>
                </div> -->
                <div class="text-presentacion">
                    <p>
                        Llegaste al lugar donde las ideas son inagotables, <br> la pasión por el diseño es increíble y la imaginación es imparable.
                    </p>
                </div>
        
            </div>
            <picture>
                <img src="img/f.elconfidencial.com_original_06b_efe_9ea_06befe9ea4c98482dcd5cb23d3d881b3.jpg" alt="">
            </picture>
           </div>
           
           
        </div>
        
        <div class="contenido" id="patricia-dev">
            <div class="articulos">
                <div class="secciones">
                    <div>
                        <div class="hero">
                            <h1 class="texto">PATRICIADEV</h1>
                        </div>
                        <p>
                            Somos un laboratorio de pasión,<br>
                            magia y creatividad.
                        </p>
                    </div>
                    <div><img src="img/ideas.png" alt=""></div>
                </div>
            </div>
        </div>

            <section>
                <div class="parrafo">
                    <div class="seccion-parrafo">
                        <div>
                            <p>
                                <b>" La imaginación es la facultad del descubrimiento preeminentemente.<br> Es lo que penetra en los mundos nunca vistos alrededor, los 
                                mundos de la ciencia " <br>_Ada Lovelace (Primera programadora)<br><br></b>
                                En este Laboratorio Creativo hay espacio para las ideas, las risas, los amigos,<br> los proyectos y los sueños. <br>
                                Tenemos la firme convicción de que nada nos queda grande y de que tenemos <br> la fuerza suficiente para transformar el mundo.<br>
                                Es literalmente cierto que puede tener éxito mejor y más rápido si ayuda a otros a tener éxito.<br> Y nosotros estamos para 
                                ayudar a que su empresa o empendimiento tenga el éxito buscado.
                            </p>
                        </div>
                        <div>
                            <img src="img/patriciadev.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section id="lo-que_hacemos">
                <div class="parrafo-dos">
                    <div class="seccion-parrafo_dos">
                        <h2>Lo que hacemos...</h2>
                        <div class="seccion-text">
                            <p>
                                Desde sitios optimizados hasta todo tipo de funcionalidades que necesites. ¡Se puede hacer!
                            </p>
                            <i class="ri-award-fill icon"></i>

                        </div>
                    </div>
                </div>
                <div class="container-card">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <i class="ri-global-line"></i>
                                <h2>Desarrollo de sitios web</h2>
                                <p>
                                    Desarrollamos sitios web profesionales a la medida del cliente, adaptables a todos los dispositivos y navegadores más populares
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <i class="ri-shopping-cart-line"></i>
                                <h2>Comercio electrónico</h2>
                                <p>
                                    Incrementa el nivel de ganancias y todas tus ventas con tu tienda en línea, con un panel de control y características como ninguna otra.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <i class="ri-computer-line"></i>
                                <h2>Aplicación Web</h2>
                                <p>
                                    Creamos la aplicación web segura que necesitas para llegar a tu audiencia potencial.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <i class="ri-android-line"></i>
                                <h2>Aplicaciones de Android</h2>
                                <p>
                                    Realizamos el desarrollo de aplicaciones móviles en android adaptables a tus necesidades, profesionales y optimizadas para una experiencia inigualable
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <i class="ri-registered-line"></i>
                                <h2>Marca para ti</h2>
                                <p>
                                    Creamos la marca que necesitas, adaptable a tu audiencia, utilizando un diseño original y único.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <i class="ri-apple-fill"></i>
                                <h2>Aplicaciones iOS</h2>
                                <p>
                                    ¡Desarrollamos la aplicación que necesitas para iOS con una experiencia única!
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </section>
                </div>

                <section id="lo-que_hicimos">
                    <div class="parrafo-tres">
                        <div class="seccion-parrafo_tres">
                            <h2>Nuestro Trabajo en Desarrollo</h2>
                        </div>
                        <div class="seccion-text_tres">
                            <p>
                                Estamos felices de ayudar a impulsar su empresa
                            </p>
                            <i class="ri-briefcase-4-line"></i>
                        </div>

                        <div class="card-container">

                        <div class="card-proyectos">
                            <img src="img/audio.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    Audiostudioacademy.com
                                </h2>
                                <p class="card-inf">
                                    Contrata los mejores cursos de Logic Pro X en audiostudioacademy
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/allstar.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    allstarsbusiness.com
                                </h2>
                                <p class="card-inf">
                                    Invierte directamente desde metamask y empieza a generar
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/bag.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    Tienda de bolsos en línea
                                </h2>
                                <p class="card-inf">
                                    Comprar mochilas de calidad al mejor precio
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/lol.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    Diseño de liga de leyendas
                                </h2>
                                <p class="card-inf">
                                    Diseño para compras de figuras de acción de league of legends
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/paisajismo.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    paisajismoaldunate.com
                                </h2>
                                <p class="card-inf">
                                    Remodelaciones y mejoras de tu jardín en la palma de tu mano
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/peri.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    Periféricos Ahora
                                </h2>
                                <p class="card-inf">
                                    Tienda online para comprar periféricos de alta calidad
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/redness.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    red-ness.es
                                </h2>
                                <p class="card-inf">
                                    ¡Personaliza tus productos a tu gusto y mucho más!
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/terrynoe.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    terrynoesports.com
                                </h2>
                                <p class="card-inf">
                                    ¡Los torneos de FIFA más emocionantes, aquí mismo!
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>

                        <div class="card-proyectos">
                            <img src="img/casino1.png" class="card-img" alt="">
                            <div class="card-body">
                                <h2 class="card-title_body">
                                    Pagina Para Casino
                                </h2>
                                <p class="card-inf">
                                    Modelo de pagina para juegos de azar.
                                </p>

                                <button class="card-boton">Descubre</button>
                            </div>
                        </div>



                        </div>
                    
                        
                    
                    </div>
                        
                    </section>

                    <section class="questions" id="preguntas-frecuentes">
                        <h2 class="title-questions">Preguntas frecuentes</h2>

                        <div class="faq">
                            <div class="question">
                                <h3>¿Los presupuestos de los proyectos son modificables?</h3>

                                <svg width="15" height="10" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                                </svg>

                            </div>
                            <div class="answer">
                                <p>
                                    Por supuesto, nos ajustamos a tu presupuesto y te damos el rendimiento correspondiente. Siempre buscamos la perfección
                                </p>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h3>¿Por qué deben elegirlos?</h3>

                                <svg width="15" height="10" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                                </svg>

                            </div>
                            <div class="answer">
                                <p>
                                    Hacemos todo lo posible para obtener siempre la satisfación de nuestro cliente, es por eso que siempre damos el 100%
                                </p>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h3>¿Cómo funciona el reclutamiento?</h3>

                                <svg width="15" height="10" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                                </svg>

                            </div>
                            <div class="answer">
                                <p>
                                    Primero afinamos un presupuesto para el proyecto, el tiempo y los detalles esenciales. Una vez que todo está listo, hay 2 opciones en las que podemos confiar;<br>
                                    1 - Podemos trabajar con el 50% del proyecto pagado y el resto al finalizar y entregar los archivos correspondientes.<br>
                                    2 - Puedes contratarnos directamente en freelancer.com donde tu dinero estará protegido por la misma plataforma hasta que el proyecto haya sido entregado correctamente.<br>

                                    Comenzaremos lo antes posible y otorgaremos los anticipos programados.
                                </p>
                            </div>
                        </div>

                        <div class="faq">
                            <div class="question">
                                <h3>¿Por qué un sitio web es una inversión?</h3>

                                <svg width="15" height="10" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                                </svg>

                            </div>
                            <div class="answer">
                                <p>
                                    Hoy en día es fácil llegar al cliente a través de un sitio web porque es donde solemos estar. Es por eso que desarrollar un sitio web especializado para un público en general aumenta las ganancias, llegan visitas y tu empresa se nota.
                                </p>
                            </div>
                        </div>


                    </section>

                   <section id="contacto">
                    <div class="formulario">
                        <div class="form_data">
                            <!-- a donde irá el formulario es el action -->
                            <!-- el method es como se enviará la información hay 2 métodos, el que siempre se usa es el POST
                            pero también tenés el GET (el get muestra la información en la url) el metodo post no la muestra -->
                            <form id="form" action="php/enviar.php" method='POST' class="form">
                                <h2>Contacto</h2>
                                <?php 
                                    if($mensaje!=''){
                                        echo '<p style="color:#0f0;margin-bottom:10px;">Mensaje envíado</p>';

                                        //ahora borro la variable session['mensaje']
                                        unset($_SESSION['mensaje']);
                                    }
                                ?>
                                
                                <!-- name es el nombre de la variable que recibiremos luego en php, por ejemplo: -->
                                <!-- $_POST['nombre'] -->
                                <input type="text" name="nombre" placeholder="Nombre" required >
                                <input type="text" name="correo" placeholder="Correo Electrónico" required>
                                <input type="text" name="celular" placeholder="Celular">
                                <textarea name="mensaje" placeholder="Ingresa el detalle de tu consulta" required></textarea>
                                <input type="submit" value="Enviar +" id="boton" required>
        
                                
                            </form>
                        </div>
                    </div>
    
                   </section>

                   <footer>
                        <div class="footer-seccion">
                            <div class="text-footer">
                                <p>Tú tienes las ideas, nosotros el talento para hacerlas posibles.<br> ¿Creamos juntos la historia de tu proyecto?</p>
                                <div class="hablemos">
                                    <div class="hablemos-izq">
                                        <img src="img/cafe-removebg-preview.png" alt="">
                                        <div class="hablemos-izq_dos">
                                        <h2>Hablemos</h2>
                                        <a href="https://wa.me/+5491158379333?text=Hola quiero información" target="_blank"><i class="ri-whatsapp-line"></i></a>
                                        <a href="https://www.facebook.com/profile.php?id=100092193961127"><i class="ri-facebook-fill"></i></a>
                                        <a href="https://www.instagram.com/PatriciaDev_2023/"><i class="ri-instagram-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                    <div class="hablemos-der">
                                        <!-- <img src="img/corazon-removebg-preview.png" alt=""> -->
                                        <p>
                                            Estamos ubicados en <b>Buenos Aires</b>, Argentina <br> pero una pandemia mundial nos enseñó a estar en cualquier parte del mundo.
                                        </p>
                                    
                                    <div class="footer-logo">
                                        <img src="img/logo.png" alt="">
                                    </div>
                                </div>
                        </div>
                            
                        
                   </footer>

    </div>

    <a class="gotopbtn" href="#"><i class="ri-arrow-up-fill"></i></i></a>
    <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
    <script src="codigo.js"></script>

    <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            setTimeout(()=>{
                loader.style.display = "none";
            },1500);
        })

    </script>
</body>
</html>