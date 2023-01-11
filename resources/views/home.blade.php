@extends("layout")

@section("title", "Inicio")

@section("content")    

<div class="hero">
    <div class="hero-wrap">
        <div class="container">
            <h2>Desarrollador y Diseñador Web</h2>

            <h1>¡Hola!<br>Soy Cesar Serrano</h1>

            <p>Diseño y construyo experiencias de usuarios geniales para cualquier negocio. Si necesitas un sitio moderno y poderoso, enviame un correo. Si estamos en sintonia, te dare un tiempo y costo estimado (~_^).</p>
            
            <div class="btn-border btn-border--primary">
                <a href="#" class="btn btn--primary">Contactame</a>                
            </div>
        </div>
    </div>
</div>

<main id="proyectos">
    <div class="wrap">
        <div class="container">
            <h2>Proyectos destacados</h2>

            <ul class="projects">
                @for ($i = 0; $i < 3; $i++)
                <li class="project">
                    <div class="project__info">
                        <div class="accent"></div>
                        <h3>Tapai Coworking</h3>
                        <ul class="tags">
                            <li class="tag">Desarrollo Web</li>
                            <li class="tag">Diseño Web</li>
                        </ul>
                        <p class="project__desc">Full website design and build for a concept team collaboration platform. This website also includes a beautiful blog. I have built the website and the blog in Webflow which has one of the best CMS for blog hosting.</p>
                        <div class="btn-border btn-border--secondary">
                            <a href="/proyectos/{{ "tapai-coworking" }}" class="btn btn--secondary">Ver proyecto</a>                
                        </div>
                    </div>

                    <div class="project__img">
                        <img src="{{ asset("images/tapai-coworking.png") }}" alt="">
                    </div>
                </li>
                @endfor
            </ul>
        </div>
    </div>
</main>

@endsection
