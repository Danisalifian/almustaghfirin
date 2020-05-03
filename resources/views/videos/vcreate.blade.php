@extends('layouts.admin')
@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
                @include('inc.msgadmin')
            <!-- OVERVIEW TAMBAH VIDEO-->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Video</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['action' => 'VideoController@store', 'method' => 'POST']) !!}
                            {{Form::text('url_video', '', ['class' => 'form-control', 'placeholder' => 'sumber tautan'])}}
                        </div>	 
                            {{Form::submit('Simpan', ['class'=>'btn btn-primary', 'data-toggle' => 'modal', 'data-target' => '.bd-example-modal-sm'])}}
                            {!! Form::close() !!}                       	
                    </div>
                </div>
            </div>
            <!-- END OVERVIEW TAMBAH VIDEO -->
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Video Overview</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @if(count($videos) > 0)
                            @foreach($videos as $video)
                                <div class="col-md-3">
                                    <div class="metric">
                                        <div class="videoWrapper">
                                            <iframe width="560" height="316" src="{{'https://www.youtube.com/embed/'.$video->url_video.'?rel=0'}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                        <br>
                                        {!!Form::open(['action' => ['VideoController@destroy', $video->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Hapus', ['class' => 'btn btn-danger', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '.bd-example-modal-sm'])}}
                                        {!!Form::close()!!}
                                    </div>
                                </div>			
                            @endforeach
                        @else
                            <h4 style="font-weight: 600; padding: 20px;">Video tidak tersedia</h4>
                        @endif
                    </div>
                    <center>
                            {{$videos->links()}}
                    </center>
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection