<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Application color -->
    <meta name="theme-color" content="#ffffff">

    <!-- Movil performance -->
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- PWA tags for apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/portafolio-icono.jpg">
    <link rel="apple-touch-startup-image" href="images/portafolio-icono.jpg">

    <!-- PWS general settings to load manifest -->
    <!--Configuracion General de PWA cargar el manifiesto-->
    <link rel="manifest" href="manifest.json"/>

    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Application color -->
    <meta name="theme-color" content="#ffffff">

    <!-- Movil performance -->
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- PWA tags for apple -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="images/portafolio-icono.jpg">
    <link rel="apple-touch-startup-image" href="images/portafolio-icono.jpg">

    <!-- PWS general settings to load manifest -->
    <!--Configuracion General de PWA cargar el manifiesto-->
    <link rel="manifest" href="manifest.json"/>

    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <title>Portafolio de Miguel Terrazas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="main.js"></script>

</head>
<body>
    <!-- Header -->
    <header id="header">
        <nav>
            <ul>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero fade-in">
        <h1>Hola, soy Miguel Terrazas</h1>
        <p>Desarrollador Full Stack apasionado por crear soluciones innovadoras</p>
        <a href="#proyectos" class="cta">Mira mis proyectos</a>
    </section>

    <!-- Sección Sobre mí -->
    <section id="sobre-mi" class="sobre-mi fade-in">
        <h2>Sobre mí</h2>
        <p>Hola, soy Miguel Terrazas, un desarrollador Full Stack apasionado por la tecnología y la innovación. Me especializo en crear aplicaciones web y móviles que resuelven problemas del mundo real, utilizando tecnologías modernas y eficientes. A lo largo de mi carrera, he trabajado en proyectos que van desde la implementación de sistemas empresariales hasta el desarrollo de aplicaciones de uso diario, siempre con un enfoque en la calidad del código y la experiencia del usuario.</p>
        <p>Estoy en constante aprendizaje, adoptando nuevas tecnologías y mejores prácticas para mejorar tanto mis habilidades como los proyectos en los que trabajo. Me apasiona la programación, la automatización de procesos, y el diseño de soluciones robustas que realmente impactan en la vida de las personas. Mi objetivo es seguir construyendo herramientas útiles y colaborando en proyectos desafiantes e innovadores.</p>
    </section>

    <!-- Sección de la consola -->
    <section id="sobre-mi" class="sobre-mi fade-in">
        <h2>Sobre mí</h2>
        <div class="console">
            <div class="console-header">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <pre id="sobre-mi-texto"></pre>
        </div>
    </section>

    <!-- Script para la escritura del texto en la consola -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const texto = `
Hola, soy Miguel Terrazas, un desarrollador Full Stack apasionado por la tecnología y la innovación.
Me especializo en crear aplicaciones web y móviles que resuelven problemas del mundo real, utilizando tecnologías modernas y eficientes.
A lo largo de mi carrera, he trabajado en proyectos que van desde la implementación de sistemas empresariales hasta el desarrollo de aplicaciones de uso diario, siempre con un enfoque en la calidad del código y la experiencia del usuario.
Estoy en constante aprendizaje, adoptando nuevas tecnologías y mejores prácticas para mejorar tanto mis habilidades como los proyectos en los que trabajo.
Me apasiona la programación, la automatización de procesos, y el diseño de soluciones robustas que realmente impactan en la vida de las personas.
Mi objetivo es seguir construyendo herramientas útiles y colaborando en proyectos desafiantes e innovadores.`;

            let i = 0;
            const velocidad = 50; // Velocidad de escritura en milisegundos
            const textoContainer = document.getElementById("sobre-mi-texto");

            function escribirTexto() {
                if (i < texto.length) {
                    textoContainer.textContent += texto.charAt(i);
                    i++;
                    setTimeout(escribirTexto, velocidad);
                }
            }

            escribirTexto();
        });
    </script>

    <!-- Proyectos destacados -->
    <section id="proyectos" class="proyectos">
        <h2>Proyectos destacados</h2>
        <div class="grid-proyectos">
            <!-- Proyecto 1 -->
            <div class="proyecto fade-in">
                <h3>1. Tienda en línea de productos artesanales</h3>
                <p>Un sitio web de comercio electrónico dedicado a la venta de productos artesanales hechos a mano...</p>
                <img src="images/tienda.png" alt="SmartHome Control" class="proyecto-img">
            </div>

            <!-- Proyecto 2 -->
            <div class="proyecto fade-in">
                <h3>2. Red social para entusiastas de la fotografía</h3>
                <p>Un sitio web que funcione como una red social para fotógrafos profesionales y aficionados...</p>
                <img src="images/fotografia.jpg" alt="SmartHome Control" class="proyecto-img">
            </div>

            <!-- Proyecto 3 -->
            <div class="proyecto fade-in">
                <h3>3. Plataforma de reservas para servicios de belleza y bienestar</h3>
                <p>Un sitio web que permita a los usuarios reservar servicios de belleza y bienestar...</p>
                <img src="images/belleza.webp" alt="SmartHome Control" class="proyecto-img">
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="contacto fade-in">
        <h2>Contáctanos</h2>
        <form action="https://formspree.io/f/mnqlwkne" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Miguel Terrazas. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script src="animations.js"></script>
</body>
</html>
" content="yes">



    <title>Portafolio de Miguel Terrazas</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <!-- Header -->
    <header id="header">
        <nav>
            <ul>
                <li><a href="#sobre-mi">Sobre mí</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    
</html>
