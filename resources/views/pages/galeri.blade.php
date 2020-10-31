@extends('layouts.client')
@section('content')
    <section>
        <div class="container pt-4 pb-2">
            <h3 class="font-weight-bolder">
                Galeri
                <hr style="border: 2px solid; color: #3f51b5; margin-top: 5px; margin-left: 0px;" >
            </h3>            

            <div class="row pt-2">
                @if(count($photos) > 0)
                @foreach($photos as $photo)
                <div class="col-md-4 p-3">
                    <div class="view overlay z-depth-1-half">
                        <a href="#" class="pop" data-toggle="modal">
                            <img src="{{ asset('/storage/photos/'.$photo->photo)}}" class="img-fluid"
                                alt="" style="width: 100%; max-width: 600px; max-height: 232px; object-fit: cover;">
                        
                            <div class="mask rgba-white-light"></div>
                        </a>
                        
                        <div class="modal fade" tabindex="-1" role="dialog" id="imagemodal"
                            aria-labelledby="modalLebel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="p-1">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                            <span aria-hidden="true">
                                                &times;
                                            </span>                                
                                        </button>
                                    </div>
                                    <div class="modal-body mb-0 p-1">
                                        <img class="imagepreview img-fluid"
                                            style="display: block; width: 800px; height: auto; min-width: 337px;"
                                            src="" alt=""  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <h5 class="p-4">
                        Gambar tidak tersedia
                    </h5>
                @endif
            </div>

            <div class="pt-2 pl-2 text-center">
                <a type="button" class="btn btn-primary" href="{{url('galeri/gambar/')}}"
                    style="width: 220px; margin-right: 15px;">
                    Lihat gambar lainnya
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
                        @else
                            <h5 class="p-4">
                                Video tidak tersedia
                            </h5>
                        @endif
                    </div>
                </div>

                <div class="pt-2 pl-2 text-center pb-4">
                    <a type="button" class="btn btn-primary" href="{{url('galeri/video')}}"
                        style="width: 220px; margin-right: 15px;">
                        Lihat video lainnya
                    </a>
                </div>
        </div>      
    </section>
    <hr style="border: 2px solid; color: #1c2a48; margin-top: 1px; margin-left: 0px; margin-bottom: 0px;" >

<script language = "javascript" type = "text/javascript">
    $('li').click(function() {
        $(this).addClass('active').siblings().removeClass('active');
    });
</script>
        
    
@endsection