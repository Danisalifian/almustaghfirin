@extends('layouts.admin')
@section('content')

    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @include('inc.msgadmin')
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Postingan Baru</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th><center>Judul Artikel</center></th>
                                    <th width="10%"><center>Ubah</center></th>
                                    <th width="10%"><center>Hapus</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr class="odd gradeX">
                                        <td>{{$post->title}}</td>
                                        <td><a href="{{url('posts/'.$post->id.'/edit')}}" class="btn btn-primary">Ubah</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Hapus', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '.bd-example-modal-sm'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach                                    
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- END OVERVIEW -->
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
@endsection