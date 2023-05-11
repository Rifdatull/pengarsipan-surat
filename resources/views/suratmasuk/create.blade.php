<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Data Surat Masuk</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surat Masuk</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
              </div>
            </div>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Surat Masuk</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
                    <form method="post" action="/suratmasuk/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama Surat</label>
                            <input type="text" name="nama_surat" class="form-control" placeholder="nama surat ">
 
                            @if($errors->has('nama_surat'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_surat')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Perihal</label>
                            <input type="text" name="perihal" class="form-control" placeholder="perihal ">
 
                            @if($errors->has('perihal'))
                                <div class="text-danger">
                                    {{ $errors->first('perihal')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Ditunjukkan</label>
                            <input type="text" name="ditunjukkan" class="form-control" placeholder="ditunjukkan ">
 
                            @if($errors->has('ditunjukkan'))
                                <div class="text-danger">
                                    {{ $errors->first('ditunjukkan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Tanggal Surat</label>
                            <input type="date" name="tanggal_surat" class="form-control" placeholder="tanggal surat ">
 
                            @if($errors->has('tanggal surat'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_surat')}}
                                </div>
                            @endif
                        
                            <div class="form-group">
                                <label>Pengirim</label>
                                <input type="text" name="pengirim" class="form-control" placeholder="pengirim ">
    
                                @if($errors->has('pengirim'))
                                    <div class="text-danger">
                                        {{ $errors->first('pengirim')}}
                                    </div>
                                @endif
                            </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/suratmasuk" class="btn btn-dark">Kembali</a>
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>
</div>
    </div><!-- /.card -->
        </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              </div>
            </div>
              </div>
            </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
      @include('template.script')
</body>
</html>
