@extends("layout")

@section("title", $proyecto)

@section("content")
    
<div class="hero hero-project">
    <div class="hero-wrap">
        <div class="container--2">
            <h1>¡Hola!</h1>

            <h2>Descripción</h2>

            <p>Full website design and build for a concept team collaboration platform. This website also includes a beautiful blog. I have built the website and the blog in Webflow which has one of the best CMS for blog hosting.</p>
                
            <div class="btn-border btn-border--primary">
                <a href="#" class="btn btn--primary">Ver sitio</a>                
            </div>
        </div>
    </div>
</div>

<div class="project-full">
    <div class="wrap">
        <div class="container--3">
            <img src="{{ asset("images/tapai-coworking-full.png") }}" alt="">
        </div>
    </div>
</div>

@endsection
