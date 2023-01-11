<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="{{ asset("styles.css") }}">

    <title>Cesar Serrano | @yield("title")</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="/">
                    Cs<span>.dev</span>
                </a>
            </div>
            <ul class="links">
                <li>
                    <a href="/#proyectos">Proyectos</a>
                </li>
                <li>
                    <a href="/acerca-de">Acerca de</a>
                </li>
                <li>
                    <a href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    
    @yield("content")

    <section class="contact" id="contacto">
        <div class="wrap contact__wrap">
            <div class="container contact__content">
                <h3>Contactame</h3>

                <p>Si necesitas un sitio web moderno y poderoso para tu negocio o para ti, estoy disponible para un trabajo. Puedes enviarme un correo directamente a <span class="txt-strong"> CesarAxel001@gmail.com</span>, o al número <span class="txt-strong">771 359 7174</span>.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="wrap">
            <div class="container">
                <ul class="footer__list">
                    <li class="footer__category">
                        <p class="category__title">Datos</p>
                        <ul class="category__info">
                            <li>771 359 7174</li>
                            <li>CesarAxel001@gmail.com</li>
                        </ul>
                    </li>

                    <li class="footer__category">
                        <p class="category__title">Redes</p>
                        <ul class="category__info">
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="#">GitHub</a><li>                            
                        </ul>
                    </li>

                    <li class="footer__category">
                        <p class="category__title">Paginas</p>
                        <ul class="category__info">
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/acerca-de">Acerca de</a><li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>