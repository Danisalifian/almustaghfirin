@extends('layouts.client')
@section('content')

    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide pb-4" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active view">
                <img src="{{asset('assets/client/img/1.jpg')}}" 
                    alt="Responsive image" style="width: 100%; height: 650px; object-fit: cover;">
                <div class="mask flex-center rgba-black-light">
                    <h5 class="white-text text-center font-weight-bolder container mb-2" style="margin-top: 250px;">
                        Menyadari akan keberadaan kami sebagai manusia yang bertaqwa kepada Allah SWT, maka kiranya kita perlu memupuk rasa ukhuwah islamiyyah demi izzul islam wal muslimin
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- EndCarousel -->

    <section id="news">    
        <div class="container pt-4 pb-4">
            <h2 class="font-weight-bolder">Berita</h2>
            <br>

            <div class="row" style="margin-top: -30px;">
                @if(count($posts) > 0 )
                @foreach($posts as $post)
                <div class="col-sm-4 p-3">
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top rounded-0" src="{{ asset('/storage/images/'.$post->image)}}" 
                                alt="Card image cap" style="height: 192px; object-fit: cover;">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                        </div>

                        <div class="card-body d-flex flex-row">
                            <div>
                                <h5 class="card-title font-weight-bolder mb-2">
                                    {{$post->title}}
                                </h5>

                                <p class="card-text">
                                    <i class="far fa-calendar-alt mr-2"></i>{{$post->created_at}} WIB
                                </p>
                            </div>
                        </div>

                        <div class="ml-auto">
                            <a type="button" class="btn btn-outline-info waves-effect btn-sm" 
                                style="width: 140px; margin-right: 13px;" href="{{url('berita/'.$post->id)}}">
                                Selengkapnya
                            </a>
                        </div>                              
                    </div>
                </div>
                @endforeach
                @else
                    <h5 style="font-weight: 200; padding: 20px;">Berita tidak tersedia</h5>
                @endif
            </div>    

            <div class="pt-4 pl-2">
                <a type="button" class="btn btn-outline-info waves-effect" href="{{url('berita')}}"
                    style="width: 170px; margin-right: 15px;">
                    Lebih banyak
                </a>
            </div> 

        </div>
    </section>

    <section id="gallery">
        <div class="mdb-color darken-3">
            <div class="container-fluid">
                <h2 class="service-title pad-bt15 font-weight-bolder pt-4 text-center text-white">Galeri</h2>

                <div class="row">
                    @if(count($photos) > 0)
                    @foreach($photos as $photo)
                    <div class="col-md-4 p-3">
                        <div class="view overlay z-depth-1-half">
                            <img src="{{ asset('/storage/photos/'.$photo->photo)}}" class="img-fluid"
                                alt="" style="width: 100%; max-width: 600px; max-height: 232px; object-fit: cover;">
                            <a href="">
                                <div class="mask rgba-white-light"></div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h5 class="text-white" style="font-weight: 200; padding: 20px;">Gambar tidak tersedia</h5>
                    @endif
                </div>

                <div class="pt-2 pl-2 text-center">
                    <a type="button" class="btn btn-primary" href="{{url('galeri/gambar')}}"
                      style="width: 170px; margin-right: 15px;">
                        Lihat lainnya
                    </a>
                </div>

                <div class="pt-4">
                    <div class="row">
                    @if(count($videos) > 0)
                    @foreach($videos as $video)
                        <div class="col-md-6">
                            <div class="embed-responsive embed-responsive-16by9 mb-4">
                                <iframe class="embed-responsive-item" src="{{'https://www.youtube.com/embed/'.$video->url_video.'?rel=0'}}"
                                allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    @else
                        <h5 class="text-white" style="font-weight: 200; padding: 20px;">
                            Video tidak tersedia
                        </h5>
                    @endif
                </div>

                <div class="pt-2 pl-2 text-center pb-4">
                    <a type="button" class="btn btn-primary" href="{{url('galeri/video')}}"
                        style="width: 170px; margin-right: 15px;">
                        Lihat lainnya
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection