@extends('layouts.client')
@section('content')
    <section>
        <div class="container pt-4 pb-2">
            <h2 class="font-weight-bolder">
                Berita
                <hr style="border: 2px solid; color: #3f51b5; margin-top: 5px; margin-left: 0px; " />
            </h2>

            <div class="row pt-2">
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
            </div>
            <div class="d-flex justify-content-end pt-2">
                {{$posts->links()}}
            </div>
            @else
                <h5 class="p-4">Berita tidak tersedia</h5>
            @endif 
        </div>        
    </section>
    <hr style="border: 2px solid; color: #1c2a48; margin-top: 1px; margin-left: 0px; margin-bottom: 0px;" > 
@endsection