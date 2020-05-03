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
                        <h3 class="panel-title">Bantuan</h3>
                        <hr>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h4>Klik link dibawah ini untuk membaca panduan pengisian konten pada website</h4>
                        <a href="https://drive.google.com/file/d/1G2-ORpc0Q8UoasCZmwN5mghSYZJMzZSm/view" target="_blank">Panduan untuk mengisi konten pada website</a>
                        
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