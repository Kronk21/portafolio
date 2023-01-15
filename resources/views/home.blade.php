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
                @foreach ($projects as $project)
                <li class="project">
                    <div class="project__info">
                        <div class="accent"></div>
                        <h3>{{ $project["name"] }}</h3>
                        <ul class="tags">
                            @foreach ($project["tags"] as $tag)                                
                            <li class="tag">{{ $tag }}</li>
                            @endforeach                            
                        </ul>
                        <p class="project__desc">{{ $project["description"] }}</p>
                        <div class="btn-border btn-border--secondary">
                            <a href="/proyectos/{{ $project["id"] }}" class="btn btn--secondary">Ver proyecto</a>                
                        </div>
                    </div>

                    <div class="project__img">
                        <img src="{{ asset("images/" . $project['id'] . ".png") }}" alt="{{ $project["name"] }}">
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</main>

@endsection
