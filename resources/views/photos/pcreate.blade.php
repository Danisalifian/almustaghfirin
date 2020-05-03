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
                    <h3 class="panel-title">Tambah Foto</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['action' => 'PhotoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            {{Form::file('image')}}
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
                    <h3 class="panel-title">Foto Overview</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @if(count($photos) > 0)
                        @foreach($photos as $photo)
                        <div class="col-md-3">
                            <div class="metric">
                                <img src="{{ asset('/storage/photos/'.$photo->photo)}}" alt="..." class="img-thumbnail">
                                <br>
                                <br>
                            {!!Form::open(['action' => ['PhotoController@destroy', $photo->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Hapus', ['class' => 'btn btn-danger', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '.bd-example-modal-sm'])}}
                            {!!Form::close()!!}
                            </div>
                        </div>
                        @endforeach
                        @else
                            <h4 style="font-weight: 600; padding: 20px;">Gambar tidak tersedia</h4>
                        @endif	
                    </div>
                    <!-- {{-- <center>
                        <nav>
                            <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                            </ul>
                        </nav>
                    </center> --}} -->
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection