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
    <main role="main" class="container">
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h6 class="border-bottom border-gray pb-2 mb-0">Usuarios</h6>

            @foreach ($users as $user)
                <div class="media text-muted pt-4">
                    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32"
                        class="mr-2 rounded"
                        src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1809fb61634%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1809fb61634%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.541290283203125%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                        data-holder-rendered="true" style="width: 32px; height: 32px;">
                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <div class="row" style="padding: 0px">
                            <div class="col-12 col-xs-6 col-sm-6 col-md-6">
                                <strong class="text-gray-dark">{{ $user['name'] }}</strong>
                                <span class="d-block">{{ $user['email'] }}</span>
                            </div>
                            <div class="col-12 col-xs-6 col-sm-6 col-md-6">
                                <div class="d-flex justify-content-between align-items-center w-100">

                                    <a href="{{ route('posts.get_list_posts', $user['id']) }}"
                                        class="btn btn-outline-info btn-xs">
                                        Posts <span class="badge badge-dark">
                                            <span data-purecounter-start="0"
                                                data-purecounter-end="{{ $countPosts[$user['id']] }}"
                                                class="purecounter">0</span>!
                                        </span>
                                    </a>
                                    <a href="" class="btn btn-outline-success btn-xs">
                                        Albums <span class="badge badge-dark">
                                            <span data-purecounter-start="0"
                                                data-purecounter-end="{{ $countAlbums[$user['id']] }}"
                                                class="purecounter">0</span>!
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
<style>
    img {
        height: 80vh;
        object-fit: cover
    }

</style>
