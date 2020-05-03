@extends('layouts.admin')
@section('content')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
                <div class="panel-body">
                {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{-- {{Form::label('title', 'Title')}} --}}
                        <label>Judul</label>
                        <div class="uk-margin">
                            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Judul'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{-- {{Form::label('body', 'Body')}} --}}
                        <label>Konten</label>
                        <div class="uk-margin">
                            {{Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body'])}}
                        {{-- <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Cover</label>
                        {{Form::file('image')}}
                    </div>
                    {{Form::submit('Simpan', ['class'=>'btn btn-lg btn-primary btn-block', 'data-toggle' => 'modal', 'data-target' => '.bd-example-modal-sm'])}}
                {!! Form::close() !!}
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
<!-- END MAIN -->
<script>
    CKEDITOR.replace( 'editor', {
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection