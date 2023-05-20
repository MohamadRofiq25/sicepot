@extends('layouts.main')

@section('container')
    <h2>Hello Statistician!</h2>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/bps.jpeg" class="d-block w-100" alt="img-3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/bps.jpeg" class="d-block w-100" alt="img-4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/bps.jpeg" class="d-block w-100" alt="img-1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="content">
        <h3>Lorem ipsum, dolor sit amet consectetur adipisicing.</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nobis odit quisquam obcaecati. Possimus
            aliquid aspernatur molestiae consectetur magnam ipsum facere tempora ut, natus eaque iure repudiandae nisi iste
            et beatae voluptas dolores quasi delectus, doloremque excepturi officia dolorem placeat corporis. Fugiat a error
            ut, explicabo temporibus eius minima veritatis.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum a, hic magnam eum aliquid, temporibus
            eveniet nisi, esse sint impedit adipisci corporis perspiciatis pariatur dolores doloribus! Praesentium
            perferendis aperiam debitis, beatae quos ipsum necessitatibus laborum adipisci et quam deleniti consectetur
            maxime fugiat atque id velit, quidem dolore ea! Ratione, consequuntur? Deleniti, et quia. Dolorum itaque illum
            culpa nam vitae distinctio, officiis temporibus consectetur nemo. Unde consequatur vero praesentium deserunt
            aliquid sunt ut id assumenda voluptates at consectetur tempora exercitationem natus sapiente libero molestias
            amet quis optio placeat, soluta, adipisci repudiandae est eligendi neque? Recusandae, a enim hic odio error ea!
        </p>
    </div>

    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000,
            wrap: false
        })
    </script>
@endsection
