@extends('layouts.client')
@section('content')
    <section>
        <div class="container" style="max-width: 920px">
            <h5 class="font-weight-bolder pt-4">
                Berita / {{$post->title}}
                <hr style="border: 1.5px solid; background-color: #3f51b5; color: #3f51b5; margin-top: 5px; margin-left: 0px;" >
            </h5>
            <div class="d-flex justify-content-center">
            <img src="{{ asset('/storage/images/'.$post->image)}}" alt=""
                style="width: 100%; max-width: 600px; height: auto; object-fit: cover;" 
                class="img-fluid pt-4 pb-4">
            </div>

            <h2 class="font-weight-bolder pt-4">
                {{$post->title}}
            </h2>

            <h6 class="font-weight-bolder pb-4">
                <i class="far fa-calendar-alt mr-2"></i>{{$post->created_at}} WIB
                <i class="fas fa-user ml-2 mr-2"></i><span >admin</span>
            </h6>

            <div class="pt-4 pb-4">
                <h5 class="font-weight-normal" style="font-size: 18px;">
                    {!!$post->body!!}
                </h5>
            </div>
        </div>
    </section>
    <div class="pt-4"></div>
    <hr style="border: 2px solid; color: #1c2a48; margin-top: 1px; margin-left: 0px; margin-bottom: 0px;" >
@endsection