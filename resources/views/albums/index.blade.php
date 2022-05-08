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
    <h3 class="text-center mt-5 mb-3 upper" style="letter-spacing: 2.5px"> Albums de
        {{ $user['name'] }}
    </h3>
    <center>
        <div class="linea"></div>
    </center>

    <div class="row">
        @foreach ($collectionAlbums as $collectionAlbum)
            <div class="col-sm-12 col-md-4 mt-2 mb-2">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body" style="height: 18vh">
                            <h5 class="card-title upper">{{ $collectionAlbum['title'] }}</h5>

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('posts.get_list_photos', $collectionAlbum['id']) }}" class="btn btn-dark">Abrir Carpeta
                                <i class="fas fa-folder"></i>
                                <span class="badge">
                                    <span data-purecounter-start="0"
                                        data-purecounter-end="{{ $countPhotos[$collectionAlbum['id']] }}"
                                        class="purecounter">0</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <style>
        img {
            height: 40vh;
            object-fit: cover
        }

        .linea {
            width: 40vh;
            height: 4px;
            background-color: black;
            margin-bottom: 30px;
        }

    </style>
@endsection
