@extends('layouts.client')
@section('content')
    <section>
        <div class="container pt-4 pb-2">
            <h3 class="font-weight-bolder">
                Galeri / Video
                <hr style="border: 1.5px solid; color: #3f51b5; margin-top: 5px; margin-left: 0px;" >
            </h3>            

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
                <div class="d-flex justify-content-end pt-2">
                    {{$videos->links()}}
                </div>
                @else
                    <h5 class="p-4">
                        Video tidak tersedia
                    </h5>
                @endif
            </div>

            <div class="d-flex justify-content-end">
                
            </div>
        </div>      
    </section>
    <hr style="border: 2px solid; color: #1c2a48; margin-top: 1px; margin-left: 0px; margin-bottom: 0px;" >       
@endsection