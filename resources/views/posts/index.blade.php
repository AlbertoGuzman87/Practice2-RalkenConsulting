@extends('template')
@section('header')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/img (1).jpg') }}" alt="First slide">
                <div class="carousel-caption">
                    <h1>First slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <button type="button" class="btn btn-outline-light btn-md">Ver más</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/img (2).jpg') }}" alt="Second slide">
                <div class="carousel-caption">
                    <h1>Second slide label</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button type="button" class="btn btn-outline-light btn-md">Ver más</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/img (3).jpg') }}" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Third slide label</h1>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <button type="button" class="btn btn-outline-light btn-md">Ver más</button>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
@section('body')
    <h3 class="text-center mt-5 mb-3 upper" style="letter-spacing: 2.5px"> Posts de
        {{ $user['name'] }}
    </h3>
    <center>
        <div class="linea"></div>
    </center>
    <div class="row">
        @foreach ($collectionPosts as $collectionPost)
            <div class="col-sm-6">
                <div class="card mt-2 mb-2" style="height: 220px">
                    <div class="card-body">
                        <h5 class="card-title upper">{{ $collectionPost['title'] }}</h5>
                        <p class="card-text">{{ $collectionPost['body'] }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
<style>
    img {
        height: 40vh;
        object-fit: cover
    }
    .linea {
        width: 40em;
        height: 4px;
        background-color: black;
        margin-bottom: 30px;
    }

</style>
