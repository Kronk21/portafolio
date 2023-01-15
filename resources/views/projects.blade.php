@extends("layout")

@section("title", $project["name"])

@section("content")
    
<div class="hero hero-project">
    <div class="hero-wrap">
        <div class="container--2">
            <h1>{{ $project["name"] }}</h1>

            <h2>Descripción</h2>

            <p>{{ $project["description"] }}</p>
                
            <div class="btn-border btn-border--primary">
                <a href="{{ $project["link"] }}" target="_blank" class="btn btn--primary">Ver sitio</a>                
            </div>
        </div>
    </div>
</div>

<div class="project-full">
    <div class="wrap">
        <div class="container--3">
            <img src="{{ asset("images/" . $project["id"] . "-full.png") }}" alt="">
        </div>
    </div>
</div>

@endsection
